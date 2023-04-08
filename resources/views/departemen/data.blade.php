@extends('layout.main')

@section('content')
    <h3><strong> Data Departemen </strong></h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('departemen/add') }}'">
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
                        <th>ID Departemen</th>
                        <th>Nama Departemen</th>
                        <th>Kepala Departemen</th>
                        <th>Deskripsi Departemen</th>
                        <th>Lokasi Departemen</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($departemen as $row)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $row->id_departemen }}</td>
                            <td>{{ $row->nama_departemen }}</td>
                            <td>{{ $row->kepala_departemen }}</td>
                            <td>{{ $row->deskripsi_departemen }}</td>
                            <td>{{ $row->lokasi_departemen }}</td>
                            <td>
                                <button onclick="window.location='{{ url('departemen/' . $row->id_departemen) }}'" type="button"
                                    class="btn btb-sm btn-primary" title="edit data">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <form onsubmit="return deleteData('{{ $row->nama_departemen }}')" style="display: inline"
                                    method="POST" action="{{ url('departemen/' . $row->id_departemen) }}">
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
        function deleteData(nama_departemen) {
            pesan = confirm(`Apakah anda yakin akan menghapus data ${nama_departemen} ?`);
            if (pesan) return true;
            else return false;
        }
    </script>
@endsection
