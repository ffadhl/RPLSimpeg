@extends('layout.main')

@section('content')
    <h3><strong> Data Penjadwalan Karyawan </strong></h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('penjadwalan/add') }}'">
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
                        <th>Kode Jadwal</th>
                        <th>NIP</th>
                        <th>Nama Karyawan</th>
                        <th>ID Jabatan</th>
                        <th>Waktu Shift</th>
                        <th>Tanggal Shift</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penjadwalan as $row)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $row->kode_jadwal }}</td>
                            <td>{{ $row->nip }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->id_jabatan }}</td>
                            <td>{{ $row->waktu_shift }}</td>
                            <td>{{ $row->tanggal_shift }}</td>
                            <td>
                                <button onclick="window.location='{{ url('penjadwalan/' . $row->kode_jadwal) }}'" type="button"
                                    class="btn btb-sm btn-primary" title="edit data">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <form onsubmit="return deleteData('{{ $row->nama }}')" style="display: inline"
                                    method="POST" action="{{ url('cuti/' . $row->kode_jadwal) }}">
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
