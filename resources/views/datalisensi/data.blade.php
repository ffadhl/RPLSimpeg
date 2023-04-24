@extends('layout.main')

@section('content')
    <div class="head-title">
        <div class="left">
            <h3><strong> Data Lisensi </strong></h3>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('datalisensi/add') }}'">
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
                        <th>Nama Lisensi</th>
                        <th>Penerbit</th>
                        <th>Tanggal Terbit</th>
                        <th>Tanggal Kadaluarsa</th>
                        <th>ID Kredensial</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datalisensi as $row)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $row->nip }}</td>
                            <td>{{ $row->namalisensi }}</td>
                            <td>{{ $row->penerbit }}</td>
                            <td>{{ $row->tglterbit }}</td>
                            <td>{{ $row->tglkadaluarsa }}</td>
                            <td>{{ $row->idkredensial }}</td>
                            <td>
                                <button onclick="window.location='{{ url('datalisensi/' . $row->nip) }}'" type="button"
                                    class="btn btb-sm btn-primary" title="edit data">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <form onsubmit="return deleteData('{{ $row->nip }}')" style="display: inline"
                                    method="POST" action="{{ url('datalisensi/' . $row->nip) }}">
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
        function deleteData(nip) {
            pesan = confirm(`Apakah anda yakin akan menghapus data ${nip} ?`);
            if (pesan) return true;
            else return false;
        }
    </script>
@endsection
