@extends('layoutkaryawan.index')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <h1 class="text-center">Presensi Karyawan</h1>
    </div>
</div>

<div class="card">
    <div class="card-body">
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
            <label for="txtnama" class="col-sm-2 col-form-label ">Nama Karyawan</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm @error('txtnama') is-invalid @enderror"
                    id="txtnama" name="txtnama">
                @error('txtnama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="img_foto" class="col-sm-2 col-form-label ">Foto</label>
            <div class="col-sm-4">
                <input type="file" class="form-control" id="img_foto" name = 'img_foto'>
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
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>
@endsection