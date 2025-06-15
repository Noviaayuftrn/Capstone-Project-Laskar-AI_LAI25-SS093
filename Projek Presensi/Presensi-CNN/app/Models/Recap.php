<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recap extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'sub_id',
        'id',
        'jumlah_hadir',
        'jumlah_alpha',
        'jumlah_sakit',
        'jumlah_izin',

    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
