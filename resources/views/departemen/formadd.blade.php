@extends('layout.main')

@section('content')
    <h3><strong>Masukkan Data Departemen Baru</strong></h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('departemen') }}'">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('departemen') }}">
                @csrf
                <div class="row mb-3">
                    <label for="id_dprtmn" class="col-sm-2 col-form-label ">ID departemen</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control form-control-sm @error('id_dprtmn') is-invalid @enderror"
                            id="id_dprtmn" name="id_dprtmn">
                        @error('id_dprtmn')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama_dprtmn" class="col-sm-2 col-form-label ">Nama departemen</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm @error('nama_dprtmn') is-invalid @enderror"
                            id="nama_dprtmn" name="nama_dprtmn">
                        @error('nama_dprtmn')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kepala_dprtmn" class="col-sm-2 col-form-label ">Kepala departemen</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm @error('kepala_dprtmn') is-invalid @enderror"
                            id="kepala_dprtmn" name="kepala_dprtmn">
                        @error('kepala_dprtmn')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="deskripsi_dprtmn" class="col-sm-2 col-form-label ">Deskripsi departemen</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm @error('deskripsi_dprtmn') is-invalid @enderror"
                            id="deskripsi_dprtmn" name="deskripsi_dprtmn">
                        @error('deskripsi_dprtmn')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="lokasi_dprtmn" class="col-sm-2 col-form-label ">Lokasi departemen</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm @error('lokasi_dprtmn') is-invalid @enderror"
                            id="lokasi_dprtmn" name="lokasi_dprtmn">
                        @error('lokasi_dprtmn')
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
