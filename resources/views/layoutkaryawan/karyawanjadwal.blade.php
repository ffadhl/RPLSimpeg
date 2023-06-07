@extends('layoutkaryawan.index')

@section('content')
    <div style="background-image: url('{{ asset('slide1.png') }}'); background-size: cover;" class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>Monitoring</h4>
                            <h2>Jadwal Karyawan</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="card">
        <div class="card-headerjadwal">
            <h4><b>Jadwal Karyawan</b></h4>
        </div>
        <div class="card-body">
            <div>
                <table class="table table-sm table-stripde table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Jadwal</th>
                            <th>NIP</th>
                            <th>Nama Karyawan</th>
                            <th>ID Jabatan</th>
                            <th>Waktu Shift</th>
                            <th>Tanggal Shift</th>
                            <th></th>
                        </tr>
                    </thead>

                    {{-- <tbody>
                        @foreach ($penjadwalan as $row)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $row->kode_jadwal }}</td>
                                <td>{{ $row->nip }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->id_jabatan }}</td>
                                <td>{{ $row->waktu_shift }}</td>
                                <td>{{ $row->tanggal_shift }}</td>
                            </tr>
                        @endforeach
                    </tbody> --}}
                </table>
            </div>
        </div>
    </div>
@endsection
