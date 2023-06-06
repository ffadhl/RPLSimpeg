<a href="/mahasiswa/create">Add Mahasiswa</a>

<table border="1">
    <tr>
        <th>ID Mahasiswa</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>NIK</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>
    @foreach ($mahasiswa as $row)
        <tr>
            <td>{{ $row->IDmahasiswa }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->prodi }}</td>
            <td>{{ $row->jenis_kelamin }}</td>
            <td>{{ $row->agama }}</td>
            <td>{{ $row->NIK }}</td>
            <td>{{ $row->tlp }}</td>
            <td>{{ $row->alamat }}</td>
            <td>{{ $row->tanggal_lahir }}</td>
            <td>{{ $row->email }}</td>
            <td>
                <a href="/mahasiswa/{{ $row->IDmahasiswa }}/edit">Edit</a>
                <form action="/mahasiswa/{{ $row->IDmahasiswa }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">

                </form>
            </td>
        </tr>
    @endforeach
</table>
