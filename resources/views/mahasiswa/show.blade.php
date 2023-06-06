@extends('mahasiswa.layout')
@section('content')
    <h2>Data Mahasiswa</h2>
    <div class="form-group">
        <strong>Nama: </strong>
        {{$mahasiswa->nama}}
    </div>
    <div class="form-group">
        <strong>NIK: </strong>
        {{$mahasiswa->nik}}
    </div>
    <div class="form-group">
        <strong>Jenis Kelamin: </strong>
        {{$mahasiswa->jenis_kelamin}}
    </div>
    <div class="form-group">
        <strong>Prodi: </strong>
        {{$mahasiswa->prodi}}
    </div>
    <div class="form-group">
        <strong>Agama: </strong>
        {{$mahasiswa->agama}}
    </div>
    <div class="form-group">
        <strong>Telepon: </strong>
        {{$mahasiswa->telepon}}
    </div>
    <div class="form-group">
        <strong>Alamat: </strong>
        {{$mahasiswa->alamat}}
    </div>
@endsection