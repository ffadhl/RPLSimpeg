@extends('layout.main')

@section('content')
    <h3><strong> Edit Data Keluarga </strong></h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('datakeluarga') }}'">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('datakeluarga/' . $txtnik) }}">
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
                    <label for="txtnik" class="col-sm-2 col-form-label ">NIK</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control-plaintext" id="txtnik" name="txtnik"
                            value="{{ $txtnik }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtnamadatakeluarga" class="col-sm-2 col-form-label">Nama Keluarga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm @error('txtnamadatakeluarga') is-invalid @enderror"
                            id="txtnamadatakeluarga" name="txtnamadatakeluarga" value="{{ $txtnamadatakeluarga }}">
                        @error('txtnamadatakeluarga')
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
                            <option value="LakiLaki" {{ $txtjeniskelamin == 'LakiLaki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ $txtjeniskelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
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
                            @error('txtagamakeluarga')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtstatuskeluarga" class="col-sm-2 col-form-label">Status Keluarga</label>
                    <div class="col-sm-4">
                        <select class="form-select form-select-sm @error('txtstatuskeluarga') is-invalid @enderror"
                            name="txtstatuskeluarga" id="txtstatuskeluarga">
                            <option value=" "selected>-pilih-</option>
                            <option value="Ayah" {{ $txtstatuskeluarga == 'Ayah' ? 'selected' : '' }}>Ayah</option>
                            <option value="Ibu" {{ $txtstatuskeluarga == 'Ibu' ? 'selected' : '' }}>Ibu</option>
                            <option value="Suami" {{ $txtstatuskeluarga == 'Suami' ? 'selected' : '' }}>Suami</option>
                            <option value="Istri" {{ $txtstatuskeluarga == 'Istri' ? 'selected' : '' }}>Istri</option>
                            <option value="Anak" {{ $txtstatuskeluarga == 'Anak' ? 'selected' : '' }}>Anak</option>
                            @error('txtstatuskeluarga')
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
