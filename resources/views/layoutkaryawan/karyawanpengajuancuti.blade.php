@extends('layoutkaryawan.index')

@section('content')
    <main>
        <div>
            <div class="containercuti">
                <div class="titlecuti"><b>Pengajuan cuti</b></div>
                <div class="contentcuti">
                    <form action="{{ ('pengajuancuti') }}" method="POST">
                    @csrf
                        <div class="user-detailsedit">
                            <div class="input-boxcuti">
                                <span class="detailsedit">Nama Lengkap</span>
                                <input type="text" placeholder="Masukkan nama lengkap" id="field_nama" name="field_nama" required>
                            </div>
                            <div class="input-boxcuti">
                                <span class="detailsedit">NIM</span>
                                <input type="text" placeholder="Masukkan NIP" id="field_nip" name="field_nip" required>
                            </div>
                            <div class="input-boxcuti">
                                <span class="detailsedit">Jabatan</span>
                                <input type="text" placeholder="Masukkan jabatan" id="field_jabatan" name="field_jabatan" required>
                            </div>
                            <div class="input-boxcuti">
                                <span class="detailsedit">Departemen</span>
                                <input type="text" placeholder="Masukkan departemen" id="field_departemen" name="field_departemen" required>
                            </div>
                            <div class="input-boxcuti">
                                <span class="detailsedit">Email</span>
                                <input type="text" placeholder="Masukkan Email" id="field_email" name="field_email" required>
                            </div>
                            <div class="input-boxcuti">
                                <span class="detailsedit">Nomor HP</span>
                                <input type="text" placeholder="Masukkan nomor HP" id="field_nohp" name="field_nohp" required>
                            </div>
                            <div class="input-boxcuti">
                                <span class="detailsedit">Tanggal Mulai Cuti</span>
                                <input type="date" placeholder="Masukkan tanggal mulai cuti" id="field_tanggal_mulai" name="field_tanggal_mulai" required>
                            </div>
                            <div class="input-boxcuti">
                                <span class="detailsedit">Tanggal Selesai Cuti</span>
                                <input type="date" placeholder="Masukkan tanggal selesai cuti" id="field_tanggal_selesai" name="field_tanggal_selesai" required>
                            </div>
                            <div class="jeniscuti">
                                <span class="jeniscuti-details">Jenis Cuti</span>
                                <select name="field_jenis_cuti" id="field_jenis_cuti" required>
                                    <option value="Cuti Tahunan">Cuti Tahunan</option>
                                    <option value="Cuti Besar">Cuti Besar</option>
                                    <option value="Cuti Sakit">Cuti Sakit</option>
                                    <option value="Cuti Bersalin">Cuti Bersalin</option>
                                    <option value="Cuti Karena Alasan Penting">Cuti Karena Alasan Penting</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-boxcuti">
                            <span class="detailsedit">Keterangan</span>
                            <textarea name="field_keterangan" placeholder="Masukkan Keterangan" id="field_keterangan" name="field_keterangan" required ></textarea>
                        </div>
                        <div class="buttoncuti">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
