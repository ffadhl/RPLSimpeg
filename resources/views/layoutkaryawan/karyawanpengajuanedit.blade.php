@extends('layoutkaryawan.index')

@section('content')
    <main>
        <div>
            <div class="containereditdata">
                <div class="titleeditdata"><b>Pengajuan Data Diri</b></div>
                <div class="contenteditdata">
                    <form action="{{url('/karyawan/formeditdata')}}" method="POST">
                        @csrf 
                        <div class="user-detailsedit">
                            <div class="input-boxeditdata">
                                <span class="detailsedit">Nama Lengkap</span>
                                <input type="text" placeholder="Masukkan nama lengkap" required name="field_nama" id="field_nama">
                                @error('field_nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-boxeditdata">
                                <span class="detailsedit">NIP</span>
                                <input type="number" placeholder="Masukkan NIP" required name="field_nip" id="field_nip">
                                @error('field_nip')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-boxeditdata">
                                <span class="detailsedit">Jabatan</span>
                                <input type="text" placeholder="Masukkan jabatan" required name="field_jabatan" id=="field_jabatan">
                                @error('field_jabatan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-boxeditdata">
                                <span class="detailsedit">Departemen</span>
                                <input type="text" placeholder="Masukkan departemen" required name="field_departemen" id="field_departemen">
                                @error('field_departemen')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-boxeditdata">
                                <span class="detailsedit">Email</span>
                                <input type="email" placeholder="Masukkan Email" required name="field_email" id="field_email">
                                @error('field_email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-boxeditdata">
                                <span class="detailsedit">Nomor HP</span>
                                <input type="number" placeholder="Masukkan nomor HP" required name="field_nohp" id="field_nohp">
                                @error('field_nohp')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="bagiandata">
                                <span class="bagiandata-details">Bagian Data yang akan diedit</span>
                                <select name="field_bagiandata" id="field_bagiandata">
                                    <option value="data_diri">Data Diri</option>
                                    <option value="data_keluarga">Data Keluarga</option>
                                    <option value="data_pendidikan">Data Pendidikan</option>
                                    <option value="data_lisensi">Data Lisensi</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-boxeditdata">
                            <span class="detailsedit">Keterangan</span>
                            <textarea name="field_keterangan" placeholder="Masukkan Keterangan" required ></textarea>
                            @error('field_keterangan')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="buttoneditdata">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
