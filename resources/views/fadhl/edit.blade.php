@extends('layout.main')

@section('content')

<h1>Edit Mahasiswa Baru</h1>

<form action="/fadhlmahasiswa/{{ $mahasiswa -> NIM }}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="IDmahasiswa" placeholder="Masukkan ID Mahasiswa" value="{{ $mahasiswa -> IDmahasiswa }}"><br>
    <input type="text" name="nama" placeholder="Masukkan Nama" value="{{ $mahasiswa -> nama }}"><br>
    <select name="jenis_kelamin" id="">
        <option value="">== Pilih jenis Kelamin ==</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select><br>

    <select name="prodi" >
        <option value="">Pilih prodi</option>
        <option value="Teknik informatika">Teknik informatika</option>
        <option value="Sistem informasi">Sistem informasi</option>
    </select><br>
    
    <select name="agama" id=" ">
        <option value="">== Pilih Agama ==</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
        <option value="Konghucu">Konghucu</option>
    </select><br>

    <input type="number" name="NIK" placeholder="Masukkan NIK" value="{{ $mahasiswa -> nik }}"><br>
    <input type="number" name="tlp" placeholder="Masukkan Telepon" value="{{ $mahasiswa -> tlp }}"><br>
    <textarea name="alamat" id="" cols="30" rows="10" placeholder="Masukkan Alamat"></textarea><br>
    <input type="date" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" value="{{ $mahasiswa -> tanggal_lahir }}"><br>
    <input type="email" name="email" placeholder="Masukkan Email" value="{{ $mahasiswa -> email }}"><br>
    <input type="submit" value="Simpan">

</form>
@endsection