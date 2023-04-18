@extends('layout.main')

@section('content')
    <h3><strong> Edit Data Presensi </strong></h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('presensi') }}'">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('presensi/' . $id_prsns) }} " enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="id_prsns" class="col-sm-2 col-form-label ">ID Presensi</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control-plaintext" id="id_prsns" name="id_prsns"
                            value="{{ $id_prsns }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtnip" class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm @error('txtnip') is-invalid @enderror"
                            id="txtnip" name="txtnip" value="{{ $txtnip }}">
                        @error('txtnip')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtnama" class="col-sm-2 col-form-label">Nama Karyawan</label>
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
                    <label for="sts_prsns" class="col-sm-2 col-form-label">Status Presensi</label>
                    <div class="col-sm-10">
                        <select class="form-select form-select-sm @error('sts_prsns') is-invalid @enderror"
                            name="sts_prsns" id="sts_prsns">
                            <option value=" "selected>-pilih-</option>
                            <option value="Tepat Waktu" {{ $sts_prsns == 'Tepat Waktu' ? 'selected' : '' }}>Tepat Waktu</option>
                            <option value="Terlambat" {{ $sts_prsns == 'Terlambat' ? 'selected' : '' }}>Terlambat</option>
                            @error('sts_prsns')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="img_foto" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control form-control-sm @error('img_foto') is-invalid @enderror"
                            id="img_foto" name="img_foto" value="{{ $img_foto }}">
                        @error('img_foto')
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
