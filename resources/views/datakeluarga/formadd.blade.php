@extends('layout.main')

@section('content')
    <h3><strong>Masukkan Data Keluarga Baru</strong></h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('datakeluarga') }}'">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('datakeluarga') }}">
                @csrf
                <div class="row mb-3">
                    <label for="txtnip" class="col-sm-2 col-form-label ">NIP</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm @error('txtnip') is-invalid @enderror"
                            id="txtnip" name="txtnip">
                        @error('txtnip')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtnik" class="col-sm-2 col-form-label ">NIK</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control form-control-sm @error('txtnik') is-invalid @enderror"
                            id="txtnik" name="txtnik">
                        @error('txtnik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtnamadatakeluarga" class="col-sm-2 col-form-label">Nama Keluarga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm @error('txtnamadatakeluarga') is-invalid @enderror"
                            id="txtnamadatakeluarga" name="txtnamadatakeluarga">
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
                            id="txttempatlahir" name="txttempatlahir">
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
                        <div class="form-check">
                            <input class="form-check-input @error('txtjeniskelamin') is-invalid @enderror" type="radio" name="txtjeniskelamin" id="txtjeniskelamin" value="LakiLaki">
                            <label class="form-check-label" for="txtjenis_kelamin">Laki-Laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('txtjeniskelamin') is-invalid @enderror" type="radio" name="txtjeniskelamin" id="txtjeniskelamin" value="Perempuan">
                            <label class="form-check-label" for="txtjeniskelamin">Perempuan</label>
                        </div>
                        @error('txtjeniskelamin')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtagamakeluarga" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-4">
                        <select class="form-select form-select-sm @error('txtagamakeluarga') is-invalid @enderror"
                            name="txtagamakeluarga" id="txtagamakeluarga">
                            @error('txtagamakeluarga')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <option value=" "selected>-pilih-</option>
                            <option value="Islam">Islam</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Budhha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtstatuskeluarga" class="col-sm-2 col-form-label">Status Keluarga</label>
                    <div class="col-sm-4">
                        <select class="form-select form-select-sm @error('txtstatuskeluarga') is-invalid @enderror"
                            name="txtstatuskeluarga" id="txtstatuskeluarga">
                            @error('txtstatuskeluarga')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <option value=" "selected>-pilih-</option>
                            <option value="Ayah">Ayah</option>
                            <option value="Ibu">Ibu</option>
                            <option value="Suami">Suami</option>
                            <option value="Istri">Istri</option>
                            <option value="Anak">Anak</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-sm btn-primary">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    @endsection
