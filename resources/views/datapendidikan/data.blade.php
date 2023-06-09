@extends('layout.main')

@section('content')
    <div class="head-title">
        <div class="left">
            <h3><strong> Data Pendidikan </strong></h3>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('datapendidikan/add') }}'">
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
                        <th>Sekolah</th>
                        <th>Gelar</th>
                        <th>Bidang</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Nilai</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datapendidikan as $row)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $row->nip }}</td>
                            <td>{{ $row->sekolah }}</td>
                            <td>{{ $row->gelar }}</td>
                            <td>{{ $row->bidang }}</td>
                            <td>{{ $row->tglmulai }}</td>
                            <td>{{ $row->tglselesai }}</td>
                            <td>{{ $row->nilai }}</td>
                            <td>
                                <button onclick="window.location='{{ url('datapendidikan/' . $row->id) }}'" type="button"
                                    class="btn btb-sm btn-primary" title="edit data">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <form onsubmit="return deleteData('{{ $row->id }}')" style="display: inline"
                                    method="POST" action="{{ url('datapendidikan/' . $row->id) }}">
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
            pesan = confirm(`Apakah anda yakin akan menghapus data ${nama} ?`);
            if (pesan) return true;
            else return false;
        }
    </script>
@endsection
