@extends('layout.main')

@section('content')
    <h3><strong>Edit Data mahasiswa</strong></h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('fadhlmahasiswa') }}'">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </button>
        </div>
        <div class="card-body">
            <form action="/fadhlmahasiswa/{{ $mahasiswa->IDmahasiswa }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row mb-3">
                    <input type="text" name="IDmahasiswa" placeholder="Masukkan ID Mahasiswa"
                        value="{{ $mahasiswa->IDmahasiswa }}"><br>
                </div>

                <div class="row mb-3">
                <input type="text" name="nama" placeholder="Masukkan Nama" value="{{ $mahasiswa->nama }}"><br>
                </div>

                <div class="row mb-3">
                <select name="jenis_kelamin" id="">
                    <option value="">== Pilih jenis Kelamin ==</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select><br>
                </div>

                <div class="row mb-3">
                <select name="prodi">
                    <option value="">Pilih prodi</option>
                    <option value="Teknik informatika">Teknik informatika</option>
                    <option value="Sistem informasi">Sistem informasi</option>
                </select><br>
                </div>

                <div class="row mb-3">
                <select name="agama" id=" ">
                    <option value="">== Pilih Agama ==</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
                </select><br>
                </div>

                <div class="row mb-3">
                <input type="number" name="NIK" placeholder="Masukkan NIK" value="{{ $mahasiswa->nik }}"><br>
                </div>

                <div class="row mb-3">
                <input type="number" name="tlp" placeholder="Masukkan Telepon" value="{{ $mahasiswa->tlp }}"><br>
                </div>

                <div class="row mb-3">
                <textarea name="alamat" id="" cols="30" rows="10" placeholder="Masukkan Alamat"></textarea><br>
                </div>

                <div class="row mb-3">
                <input type="date" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir"
                    value="{{ $mahasiswa->tanggal_lahir }}"><br>
                </div>

                <div class="row mb-3">
                <input type="email" name="email" placeholder="Masukkan Email" value="{{ $mahasiswa->email }}"><br>
                </div>

                <div class="row mb-3">
                <input type="submit" value="Simpan">
                <div class="row mb-3">

            </form>
        </div>
    </div>
@endsection
