@extends('layout.main')

@section('content')
    <h3><strong>Masukkan Data Mahasiswa Baru</strong></h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('fadhlmahasiswa') }}'">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </button>
        </div>
        <div class="card-body">
            <form action="/fadhlmahasiswa/store" method="POST">
                @csrf
                <div class="row mb-3">
                    <input type="text" name="IDmahasiswa" placeholder="Masukkan ID Mahasiswa"><br>
                </div>

                <div class="row mb-3">
                    <input type="text" name="nama" placeholder="Masukkan Nama"><br>
                </div>

                <div class="row mb-3">
                    <select name="jenis_kelamin" id="">
                        <option value="">== Pilih jenis Kelamin ==</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select><br>
                </div>

                <select name="prodi">
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

                <input type="number" name="NIK" placeholder="Masukkan NIK"><br>
                <input type="number" name="tlp" placeholder="Masukkan Telepon"><br>
                <textarea name="alamat" id="" cols="30" rows="10" placeholder="Masukkan Alamat"></textarea><br>
                <input type="date" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir"><br>
                <input type="email" name="email" placeholder="Masukkan Email"><br>
                <input type="submit" value="Simpan">
            </form>
        </div>
    </div>
@endsection
