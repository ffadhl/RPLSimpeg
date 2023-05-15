@extends('layoutkaryawan.index')

@section('content')
    <main>
        <div>
            <div class="containereditdata">
                <div class="titleeditdata"><b>Pengajuan Data Diri</b></div>
                <div class="contenteditdata">
                    <form action="#">
                        <div class="user-detailsedit">
                            <div class="input-boxeditdata">
                                <span class="detailsedit">Nama Lengkap</span>
                                <input type="text" placeholder="Masukkan nama lengkap" required>
                            </div>
                            <div class="input-boxeditdata">
                                <span class="detailsedit">NIP</span>
                                <input type="text" placeholder="Masukkan NIP" required>
                            </div>
                            <div class="input-boxeditdata">
                                <span class="detailsedit">Jabatan</span>
                                <input type="text" placeholder="Masukkan jabatan" required>
                            </div>
                            <div class="input-boxeditdata">
                                <span class="detailsedit">Departemen</span>
                                <input type="text" placeholder="Masukkan departemen" required>
                            </div>
                            <div class="input-boxeditdata">
                                <span class="detailsedit">Email</span>
                                <input type="text" placeholder="Masukkan Email" required>
                            </div>
                            <div class="input-boxeditdata">
                                <span class="detailsedit">Nomor HP</span>
                                <input type="text" placeholder="Masukkan nomor HP" required>
                            </div>
                            <div class="bagiandata">
                                <span class="bagiandata-details">Bagian Data yang akan diedit</span>
                                <select name="bagiandata" id="bagiandata">
                                    <option value="bagiandata">Data Diri</option>
                                    <option value="bagiandata">Data Keluarga</option>
                                    <option value="bagiandata">Data Pendidikan</option>
                                    <option value="bagiandata">Data Lisensi</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-boxeditdata">
                            <span class="detailsedit">Keterangan</span>
                            <textarea name="Keterangan" placeholder="Masukkan Keterangan" required ></textarea>
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
