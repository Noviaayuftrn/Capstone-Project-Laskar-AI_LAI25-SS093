@forelse($students as $index => $student)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $student->nisn }}</td>
                                <td>{{ $student->user->nama }}</td>
                                <td>{{ $student->user->username }}</td>
                                <td>{{ $student->major->nama_jurusan ?? '' }}</td>
                                <td>{{ $student->class->nama_kelas ?? '' }}</td>
                                <td>
                                    <a href="{{ route('student.edit', $student->id) }}" class="btn btn-sm btn-warning me-1"
                                        title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('student.destroy', $student->id) }}" method="POST"
                                        style="display:inline;" onsubmit="return confirm('Yakin ingin hapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" title="Hapus">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">Belum ada data siswa yang ditambahkan.</td>
                            </tr>
                        @endforelse
                        