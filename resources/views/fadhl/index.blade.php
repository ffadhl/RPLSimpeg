@extends('layout.main')

@section('content')
<h1>Fadhl Al-Hafizh</h1>
<h3>1.</h3> <p> Pada UAS ini saya menggunakan bahasa pemrograman PHP dan juga Framework dari Laravel.</p><br>

<h3>2.</h3> <p> pada UAS ini tabel yang dibuat oleh Fadhl Al-Hafizh yaitu bernama "mahasiswa" dengan atribut, antara lain</p><br>
<p>1. ID Mahasiswa sebagai Primary Key</p>
<p>2. Nama</p>
<p>3. Prodi</p>
<p>4. Jenis Kelamin</p>
<p>5. Agama</p>
<p>6. NIK</p>
<p>7. Telepon</p>
<p>8. Alamat</p>
<p>9. Tanggal Lahir</p>
<p>10. Email</p><br>




<a href="/fadhlmahasiswa/create">Add Mahasiswa</a>

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
                <a href="/fadhlmahasiswa/{{ $row->IDmahasiswa }}/edit">Edit</a>
                <form action="/fadhlmahasiswa/{{ $row->IDmahasiswa }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">

                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
