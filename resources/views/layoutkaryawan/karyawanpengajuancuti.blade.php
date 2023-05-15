@extends('layoutkaryawan.index')

@section('content')
    <main>
        <div>
            <div class="containercuti">
                <div class="titlecuti"><b>Pengajuan cuti</b></div>
                <div class="contentcuti">
                    <form action="#">
                        <div class="user-detailsedit">
                            <div class="input-boxcuti">
                                <span class="detailsedit">Nama Lengkap</span>
                                <input type="text" placeholder="Masukkan nama lengkap" required>
                            </div>
                            <div class="input-boxcuti">
                                <span class="detailsedit">NIP</span>
                                <input type="text" placeholder="Masukkan NIP" required>
                            </div>
                            <div class="input-boxcuti">
                                <span class="detailsedit">Jabatan</span>
                                <input type="text" placeholder="Masukkan jabatan" required>
                            </div>
                            <div class="input-boxcuti">
                                <span class="detailsedit">Departemen</span>
                                <input type="text" placeholder="Masukkan departemen" required>
                            </div>
                            <div class="input-boxcuti">
                                <span class="detailsedit">Email</span>
                                <input type="text" placeholder="Masukkan Email" required>
                            </div>
                            <div class="input-boxcuti">
                                <span class="detailsedit">Nomor HP</span>
                                <input type="text" placeholder="Masukkan nomor HP" required>
                            </div>
                            <div class="input-boxcuti">
                                <span class="detailsedit">Tanggal Mulai Cuti</span>
                                <input type="date" placeholder="Masukkan tanggal mulai cuti" required>
                            </div>
                            <div class="input-boxcuti">
                                <span class="detailsedit">Tanggal Selesai Cuti</span>
                                <input type="date" placeholder="Masukkan tanggal selesai cuti" required>
                            </div>
                            <div class="jeniscuti">
                                <span class="jeniscuti-details">Jenis Cuti</span>
                                <select name="jeniscuti" id="jeniscuti" required>
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
                            <textarea name="Keterangan" placeholder="Masukkan Keterangan" required ></textarea>
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
