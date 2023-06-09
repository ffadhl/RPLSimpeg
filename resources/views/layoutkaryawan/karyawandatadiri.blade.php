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
                if(@empty($karyawan)
                <tbody>
                    <tr>
                        <td>{{ 'sample' }}</td>
                        <td>{{ 'sample' }}</td>
                        <td>{{ 'sample' }}</td>
                        <td>{{ 'sample' }}</td>
                        <td>{{ 'sample' }}</td>
                        <td>{{ 'sample' }}</td>
                        <td>{{ 'sample' }}</td>
                        <td>{{ 'sample' }}</td>
                        <td>{{ 'sample' }}</td>
                    </tr>
                </tbody>
                @endempty)else{
                    <tbody>
                        <tr>
                            <td>{{ $karyawan->nip }}</td>
                            <td>{{ $karyawan->nama }}</td>
                            <td>{{ $karyawan->tempat_lahir }}</td>
                            <td>{{ $karyawan->tanggal_lahir }}</td>
                            <td>{{ $karyawan->jenis_kelamin }}</td>
                            <td>{{ $karyawan->no_telepon }}</td>
                            <td>{{ $karyawan->agama }}</td>
                            <td>{{ $karyawan->pendidikan }}</td>
                            <td>{{ $karyawan->lisensi }}</td>
                        </tr>
                    </tbody>
                }
            </table>
        </div>
    </div>
@endsection
