@extends('layout.main')

@section('content')
    <h3><strong> Edit Data Keluarga </strong></h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('keluarga') }}'">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('keluarga/' . $txtnip) }}">
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
                    <label for="txtnama" class="col-sm-2 col-form-label">Nama Keluarga</label>
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
                    <label for="txtjeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-4">
                        <select class="form-select form-select-sm @error('txtjeniskelamin') is-invalid @enderror"
                            name="txtjeniskelamin" id="txtjeniskelamin">
                            <option value=" "selected>-pilih-</option>
                            <option value="L" {{ $txtjeniskelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ $txtjeniskelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                            @error('txtjeniskelamin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtagamakeluarga" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-4">
                        <select class="form-select form-select-sm @error('txtagamakeluarga') is-invalid @enderror"
                            name="txtagamakeluarga" id="txtagamakeluarga">
                            <option value=" "selected>-pilih-</option>
                            <option value="islam" {{ $txtagamakeluarga == 'Islam' ? 'selected' : '' }}>Islam</option>
                            <option value="Katholik" {{ $txtagamakeluarga == 'Katholik' ? 'selected' : '' }}>Katholik</option>
                            <option value="Kristen" {{ $txtagamakeluarga == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                            <option value="Hindu" {{ $txtagamakeluarga == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                            <option value="Buddha" {{ $txtagamakeluarga == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                            <option value="Konghucu" {{ $txtagamakeluarga == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                            @error('txtjeniskelamin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </select>
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
    @endsection
