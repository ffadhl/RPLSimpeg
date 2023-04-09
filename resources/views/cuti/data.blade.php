@extends('layout.main')

@section('content')
    <h3><strong> Data Cuti Karyawan </strong></h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('cuti/add') }}'">
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
                        <th>ID Cuti</th>
                        <th>NIP</th>
                        <th>Nama Karyawan</th>
                        <th>Jenis Cuti</th>
                        <th>Mulai Cuti</th>
                        <th>Selesai Cuti</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cuti as $row)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $row->id_cuti }}</td>
                            <td>{{ $row->nip }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->jenis_cuti }}</td>
                            <td>{{ $row->mulai_cuti }}</td>
                            <td>{{ $row->selesai_cuti }}</td>
                            <td>
                                <button onclick="window.location='{{ url('cuti/' . $row->id_cuti) }}'" type="button"
                                    class="btn btb-sm btn-primary" title="edit data">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <form onsubmit="return deleteData('{{ $row->nama }}')" style="display: inline"
                                    method="POST" action="{{ url('cuti/' . $row->id_cuti) }}">
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
        function deleteData(nama) {
            pesan = confirm(`Apakah anda yakin akan menghapus data ${nama} ?`);
            if (pesan) return true;
            else return false;
        }
    </script>
@endsection
