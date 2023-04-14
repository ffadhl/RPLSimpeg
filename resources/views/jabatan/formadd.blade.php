@extends('layout.main')

@section('content')
    <h3><strong>Masukkan Data Jabatan Baru</strong></h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('jabatan') }}'">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('jabatan ') }}">
                @csrf

                <div class="row mb-3">
                    <label for="field_id" class="col-sm-2 col-form-label ">ID Jabatan</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm @error('field_id') is-invalid @enderror"
                            id="field_id" name="field_id">
                        @error('field_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="field_nama" class="col-sm-2 col-form-label">Nama Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm @error('field_nama') is-invalid @enderror"
                            id="field_nama" name="field_nama">
                        @error('field_nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="field_deskripsi" class="col-sm-2 col-form-label">Deskripsi Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control form-control-sm @error('field_deskripsi') is-invalid @enderror"
                            id="field_deskripsi" name="field_deskripsi">
                        @error('field_deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="field_lokasi" class="col-sm-2 col-form-label">Lokasi Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm @error('field_lokasi') is-invalid @enderror"
                            id="field_lokasi" name="field_lokasi">
                        @error('field_lokasi')
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
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    @endsection
