<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; 
use App\Models\Schedule;
use App\Models\Attendance;
use Illuminate\Support\Facades\Storage;

class ApiController extends Controller
{
    public function index($id = null)
    {
        $schedule_id = $id ?? Schedule::whereDate('date', now())
            ->where('teach_id', auth()->id())
            ->value('id');

        return view('attendance.capture', compact('schedule_id'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'image' => 'required',
                'schedule_id' => 'required|integer|exists:schedules,id',
            ]);

            // Decode gambar
            $base64Image = str_replace('data:image/png;base64,', '', $request->input('image'));
            $base64Image = str_replace(' ', '+', $base64Image);
            $imageData = base64_decode($base64Image);
            $filename = 'capture_' . time() . '.png';
            $filePath = public_path('images/' . $filename);
            file_put_contents($filePath, $imageData);

            if (!file_exists($filePath)) {
                throw new \Exception("Gagal menyimpan file gambar.");
            }

            // Kirim ke Flask
            $client = new \GuzzleHttp\Client();
            $response = $client->post('http://127.0.0.1:5000/predict', [
                'multipart' => [
                    [
                        'name'     => 'image',
                        'contents' => fopen($filePath, 'r'),
                        'filename' => $filename,
                    ],
                ],
            ]);

            $result = json_decode($response->getBody(), true);
            if (!isset($result['label'])) {
                throw new \Exception("Respons dari Flask tidak valid.");
            }

            $user = auth()->user();

            // ✅ Cek role
            if ($user->role !== 'siswa') {
                throw new \Exception("Hanya siswa yang dapat melakukan presensi.");
            }

            $student = \App\Models\Student::where('user_id', $user->id)->first();
            if (!$student) {
                throw new \Exception("Data siswa tidak ditemukan.");
            }

            $expectedLabel = $student->label;

            // ✅ Cek apakah sudah pernah presensi selain 'alpa'
            $attendance = \App\Models\Attendance::where('user_id', $user->id)
                ->where('schedule_id', $request->schedule_id)
                ->first();

            if (!$attendance) {
                throw new \Exception("Data presensi tidak tersedia.");
            }

            if ($attendance->status !== 'alpa') {
                return response()->json([
                    'status' => 'fail',
                    'message' => 'Presensi sudah dilakukan sebelumnya.',
                ]);
            }

            // ✅ Jika wajah cocok, update status ke 'hadir'
            if ($result['label'] === $expectedLabel) {
                $attendance->status = 'hadir';
                $attendance->save();

                return response()->json([
                    'status'     => 'success',
                    'message'    => 'Presensi berhasil dicatat',
                    'student'    => $user->nama,
                    'confidence' => $result['confidence'],
                    'redirect'   => route('student.attendance'),
                ]);
            } else {
                return response()->json([
                    'status'  => 'fail',
                    'message' => 'Wajah tidak cocok (' . $result['label'] . ' ≠ ' . $expectedLabel . ')',
                ]);
            }
        } catch (\Exception $e) {
            \Log::error('Presensi error: ' . $e->getMessage());
            return response()->json([
                'status'  => 'error',
                'message' => 'Terjadi kesalahan: ' . $e->getMessage(),
            ], 500);
        }
    }


}
