@extends('layout.main')

@section('content')
    <h3><strong> Data Presensi Karyawan </strong></h3>
    <div class="card">
        <div class="card-body">
            @if (session('msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> Berhasil </strong> {{ session('msg') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <table class="table table-sm table-stripde table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Presensi</th>
                        <th>NIP</th>
                        <th>Nama Karyawan</th>
                        <th>Status Presensi</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($presensi as $row)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $row->id_presensi }}</td>
                            <td>{{ $row->nip }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->status_presensi }}</td>
                            <td>
                                <img src="{{ asset('/storage/presensi/'.$row->foto) }}" class="rounded" style="width: 150px">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
