@extends('layout.main')

@section('content')
    <h3><strong> Data Keluarga </strong></h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('datakeluarga/add') }}'">
                <i class="fa-solid fa-circle-plus"></i> Tambah Data
            </button>
        </div>
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
                        <th>NIP</th>
                        <th>NIK</th>
                        <th>Nama Keluarga</th>
                        <th>Tempat Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Status Keluarga</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datakeluarga as $row)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $row->nip }}</td>
                            <td>{{ $row->nik }}</td>
                            <td>{{ $row->namadatakeluarga }}</td>
                            <td>{{ $row->tempatlahir }}</td>
                            <td>{{ $row->jeniskelamin }}</td>
                            <td>{{ $row->agamakeluarga }}</td>
                            <td>{{ $row->statuskeluarga }}</td>
                            <td>
                                <button onclick="window.location='{{ url('datakeluarga/' . $row->nik) }}'" type="button"
                                    class="btn btb-sm btn-primary" title="edit data">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <form onsubmit="return deleteData('{{ $row->namadatakeluarga }}')" style="display: inline"
                                    method="POST" action="{{ url('datakeluarga/' . $row->nik) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="Hapus data" class="btn btn-danger btn-med">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function deleteData(namadatakeluarga) {
            pesan = confirm(`Apakah anda yakin akan menghapus data ${namadatakeluarga} ?`);
            if (pesan) return true;
            else return false;
        }
    </script>
@endsection
