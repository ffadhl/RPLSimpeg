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
                    <tr>
                        <td>{{ $data->nip }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data>tempat_lahir }}</td>
                        <td>{{ $data->tanggal_lahir }}</td>
                        <td>{{ $data->jenis_kelamin }}</td>
                        <td>{{ $data->no_telepon }}</td>
                        <td>{{ $data->agama }}</td>
                        <td>{{ $data->pendidikan }}</td>
                        <td>{{ $data->lisensi }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
