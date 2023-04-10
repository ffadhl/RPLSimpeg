@extends('layout.main')

@section('content')
    <h3><strong> Edit Data Jabatan </strong></h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('jabatan') }}'">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('jabatan/' . $idjabatan) }}">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="idjabatan" class="col-sm-2 col-form-label ">ID Jabatan</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control-plaintext" id="idjabatan" name="idjabatan"
                            value="{{ $idjabatan }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="namajabatan" class="col-sm-2 col-form-label">Nama Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm @error('namajabatan') is-invalid @enderror"
                            id="namajabatan" name="namajabatan" value="{{ $namajabatan }}">
                        @error('namajabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="deskripsijabatan" class="col-sm-2 col-form-label">Deskripsi Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm @error('deskripsijabatan') is-invalid @enderror"
                            id="deskripsijabatan" name="deskripsijabatan" value="{{ $deskripsijabatan }}">
                        @error('deskripsijabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="gj_pkk" class="col-sm-2 col-form-label">Lokasi Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm @error('lokasijabatan') is-invalid @enderror"
                            id="lokasijabatan" name="lokasijabatan" value="{{ $lokasijabatan }}">
                        @error('gj_pkk')
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
    @endsection
