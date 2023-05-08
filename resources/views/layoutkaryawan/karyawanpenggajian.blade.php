@extends('layoutkaryawan.index')

@section('content')
    <div style="background-image: url('{{ asset('slide1.png') }}'); background-size: cover;" class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>Layanan</h4>
                            <h2>Penggajian Karyawan</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-sm table-stripde table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Gaji</th>
                        <th>NIP</th>
                        <th>Nama Karyawan</th>
                        <th>Gaji Pokok</th>
                        <th>Tunjangan</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penggajian as $row)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $row->id_gaji }}</td>
                            <td>{{ $row->nip }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->gaji_pokok }}</td>
                            <td>{{ $row->tunjangan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
