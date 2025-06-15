@forelse($teachers as $index => $teacher)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $teacher->nip }}</td>
        <td>{{ $teacher->user->nama }}</td>
        <td>{{ $teacher->user->username }}</td>
        <td>{{ $teacher->subject->nama_mapel ?? '' }}</td>
        <td>
          <a href="{{ route('teacher.show', $teacher->id) }}" class="btn btn-sm btn-info me-1" title="Lihat">
            <i class="fas fa-eye"></i>
          </a>
          <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-sm btn-warning me-1" title="Edit">
            <i class="fas fa-edit"></i>
          </a>
          <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST"
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
        <td colspan="6" class="text-center">Belum ada data guru yang ditambahkan.</td>
    </tr>
@endforelse


