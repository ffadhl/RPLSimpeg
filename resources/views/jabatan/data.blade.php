@extends('layout.main')

@section('content')
    <h3><strong> Data Jabatan </strong></h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('jabatan/add') }}'">
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
                        <th>ID Jabatan</th>
                        <th>Nama Jabatan</th>
                        <th>Deskripsi Jabatan</th>
                        <th>Lokasi Jabatan</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jabatan as $row)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $row->id_jabatan }}</td>
                            <td>{{ $row->nama_jabatan }}</td>
                            <td>{{ $row->deskripsi_jabatan }}</td>
                            <td>{{ $row->lokasi_jabatan }}</td>
                            <td>
                                <button onclick="window.location='{{ url('jabatan/' . $row->id_jabatan) }}'" type="button"
                                    class="btn btb-sm btn-primary" title="edit data">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <form onsubmit="return deleteData('{{ $row->nama_jabatan }}')" style="display: inline"
                                    method="POST" action="{{ url('jabatan/' . $row->id_jabatan) }}">
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
        function deleteData(nama_jabatan) {
            pesan = confirm(`Apakah anda yakin akan menghapus data ${nama_jabatan} ?`);
            if (pesan) return true;
            else return false;
        }
    </script>
@endsection
