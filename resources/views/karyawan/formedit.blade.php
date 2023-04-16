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
                        <select class="form-select form-select-sm @error('txtjenis_kelamin') is-invalid @enderror"
                            name="txtjenis_kelamin" id="txtjenis_kelamin">
                            <option value=" "selected>-pilih-</option>
                            <option value="L" {{ $txtjenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ $txtjenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                            @error('txtjenis_kelamin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </select>
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
                        <input type="text" class="form-control form-control-sm @error('txtagama') is-invalid @enderror"
                            id="txtagama" name="txtagama" value="{{ $txtagama }}">
                        @error('txtagama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
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
@endsection
