@extends('layoutkaryawan.index')

@section('content')
    <div>
        <h1>datadiri</h1>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-sm table-stripde table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Nomor Telepon</th>
                        <th>Agama</th>
                        <th>Pendidikan</th>
                        <th>Lisensi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($karyawan as $row)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $row->nip }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->tempat_lahir }}</td>
                            <td>{{ $row->tanggal_lahir }}</td>
                            <td>{{ $row->jenis_kelamin }}</td>
                            <td>{{ $row->no_telepon }}</td>
                            <td>{{ $row->agama }}</td>
                            <td>{{ $row->pendidikan }}</td>
                            <td>{{ $row->lisensi }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
