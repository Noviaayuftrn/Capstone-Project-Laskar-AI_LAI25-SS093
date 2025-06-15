@forelse ($subjects as $index => $subject)
                      <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $subject->nama_mapel }}</td>
                        <td>{{ $subject->major->nama_jurusan }}</td>
                        <td>{{ $subject->class->nama_kelas }}</td>
                        <td>
                          <a href="{{ route('subject.edit', $subject->id) }}" class="btn btn-sm btn-warning me-1" title="Edit">
                            <i class="fas fa-edit"></i>
                          </a>
                          <form action="{{ route('subject.destroy', $subject->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Hapus mata pelajaran ini?')">
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
                          <td colspan="5"  class="text-center">Belum ada data mata pelajaran.</td>
                      </tr>
                  @endforelse