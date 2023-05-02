@extends('layout.main')

@section('content')
    <h3><strong> Edit Data Karyawan </strong></h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('karyawan') }}'">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('karyawan/' . $txtnip) }}">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="txtnip" class="col-sm-2 col-form-label ">NIP</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control-plaintext" id="txtnip" name="txtnip"
                            value="{{ $txtnip }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtnama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm @error('txtnama') is-invalid @enderror"
                            id="txtnama" name="txtnama" value="{{ $txtnama }}">
                        @error('txtnama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txttempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control form-control-sm @error('txttempatlahir') is-invalid @enderror"
                            id="txttempatlahir" name="txttempatlahir" value="{{ $txttempatlahir }}">
                        @error('txttempatlahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tl" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control form-control-sm @error('tl') is-invalid @enderror"
                            id="tl" name="tl" value="{{ $tl }}">
                        @error('tl')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtjenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-4">
                        <div class="col-sm-4">
                            <input class="form-check-input @error('txtjenis_kelamin') is-invalid @enderror" type="radio" name="txtjenis_kelamin" id="txtjenis_kelamin" value="L" {{ $txtjenis_kelamin == 'L' ? 'selected' : '' }}>
                            <label class="form-check-label" for="txtjenis_kelamin">Laki-Laki</label>
                        </div>
                        <div class="col-sm-4">
                            <input class="form-check-input @error('txtjenis_kelamin') is-invalid @enderror" type="radio" name="txtjenis_kelamin" id="txtjenis_kelamin" value="P" {{ $txtjenis_kelamin == 'P' ? 'selected' : '' }}>
                            <label class="form-check-label" for="txtjenis_kelamin">Perempuan</label>
                        </div>
                        @error('txtjenis_kelamin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txttelp" class="col-sm-2 col-form-label">No Telepon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm @error('txttelp') is-invalid @enderror"
                            id="txttelp" name="txttelp" value="{{ $txttelp }}">
                        @error('txttelp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtagama" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-4">
                        <select class="form-select form-select-sm @error('txtagama') is-invalid @enderror"
                            name="txtagama" id="txtagama">
                            <option value=" "selected>-pilih-</option>
                            <option value="islam" {{ $txtagama == 'Islam' ? 'selected' : '' }}>Islam</option>
                            <option value="Katholik" {{ $txtagama == 'Katholik' ? 'selected' : '' }}>Katholik</option>
                            <option value="Kristen" {{ $txtagama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                            <option value="Hindu" {{ $txtagama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                            <option value="Buddha" {{ $txtagama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                            <option value="Konghucu" {{ $txtagama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                            @error('txtagama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtpend" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm @error('txtpend') is-invalid @enderror"
                            id="txtpend" name="txtpend" value="{{ $txtpend }}">
                        @error('txtpend')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtlisensi" class="col-sm-2 col-form-label">Lisensi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm @error('txtlisensi') is-invalid @enderror"
                            id="txtlisensi" name="txtlisensi" value="{{ $txtlisensi }}">
                        @error('txtlisensi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-sm btn-primary">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

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

    <h3><strong> Data Lisensi </strong></h3>
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
                                <button onclick="window.location='{{ url('datalisensi/' . $row->id) }}'" type="button"
                                    class="btn btb-sm btn-primary" title="edit data">
                                    <i class="fa-solid fa-edit"></i>
                                </button>
                                <form onsubmit="return deleteData('{{ $row->id }}')" style="display: inline"
                                    method="POST" action="{{ url('datalisensi/' . $row->id) }}">
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
    
    <h3><strong> Data Pendidikan </strong></h3>
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

@endsection

