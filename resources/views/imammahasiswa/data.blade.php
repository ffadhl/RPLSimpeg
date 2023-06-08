@extends('layout.main')

@section('content')
    <div class="head-title">
        <div class="left">
            <h3><strong> Data Mahasiswa </strong></h3>
        </div>
        {{-- <a href="#" class="btn-download">
            <i class='bx bxs-cloud-download'></i>
            <span class="text">Download PDF</span>
        </a> --}}
    </div>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('imammahasiswa/add') }}'">
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
                        <th>ID Mahasiswa</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Prodi</th>
                        <th>Agama</th>
                        <th>NIK</th>
                        <th>No. Telepon</th>
                        <th>Alamat</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($imammahasiswa as $row)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $row->idmahasiswa }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                            <td>{{ $row->prodi }}</td>
                            <td>{{ $row->agama }}</td>
                            <td>{{ $row->nik }}</td>
                            <td>{{ $row->telepon }}</td>
                            <td>{{ $row->alamat }}</td>
                            <td>
                                <button onclick="window.location='{{ url('imammahasiswa/' . $row->idmahasiswa) }}'" type="button"
                                    class="btn btb-sm btn-primary" title="edit data">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <form onsubmit="return deleteData('{{ $row->nama }}')" style="display: inline"
                                    method="POST" action="{{ url('imammahasiswa/' . $row->idmahasiswa) }}">
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