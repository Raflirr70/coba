
<h1>Daftar Mahasiswa</h1>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>NPM</th>
            <th>Nama Lengkap</th>
            <th>Angkatan</th>
            <th>Prodi</th>
            <th>Aktif</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $student->npm }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->angkatan }}</td>
                <td>{{ $student->prodi }}</td>
                <td>{{ $student->aktif ? 'Ya' : 'Tidak' }}</td>
                <td>
                    <a href="{{ route('student.edit', $student->id) }}">Edit</a>
                    <form action="{{ route('student.destroy', $student->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $students->links() }}
