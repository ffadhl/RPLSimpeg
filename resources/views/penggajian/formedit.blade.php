@extends('layout.main')

@section('content')
    <h3><strong> Edit Data Penggajian </strong></h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('penggajian') }}'">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('penggajian/' . $id_gj) }}">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="id_gj" class="col-sm-2 col-form-label ">ID Gaji</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control-plaintext" id="id_gj" name="id_gj"
                            value="{{ $id_gj }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtnip" class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-4">
                        <select class="form-select form-select-sm @error('txtnip') is-invalid @enderror"
                            name="txtnip" id="txtnip">
                            <option value=" "selected>-pilih-</option>
                            {{-- <option value="islam" {{ $txtagama == 'Islam' ? 'selected' : '' }}>Islam</option> --}}
                            @foreach ($karyawans as $list)
                                <option value="{{$list->nip}}" {{ $txtnip == $list->nip ? 'selected' : '' }}>{{$list->nip}}</option>
                            @endforeach
                            @error('txtnip')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtnama" class="col-sm-2 col-form-label">Nama Karyawan</label>
                    <div class="col-sm-4">
                        <select class="form-select form-select-sm @error('txtnama') is-invalid @enderror"
                            name="txtnama" id="txtnama">
                            <option value=" "selected>-pilih-</option>
                            {{-- <option value="islam" {{ $txtagama == 'Islam' ? 'selected' : '' }}>Islam</option> --}}
                            @foreach ($karyawans as $list)
                                <option value="{{$list->nama}}" {{ $txtnama == $list->nama ? 'selected' : '' }}>{{$list->nama}}</option>
                            @endforeach
                            @error('txtnama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="gj_pkk" class="col-sm-2 col-form-label">Gaji Pokok</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control form-control-sm @error('gj_pkk') is-invalid @enderror"
                            id="gj_pkk" name="gj_pkk" value="{{ $gj_pkk }}">
                        @error('gj_pkk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tjgn" class="col-sm-2 col-form-label">Tunjangan</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control form-control-sm @error('tjgn') is-invalid @enderror"
                            id="tjgn" name="tjgn" value="{{ $tjgn }}">
                        @error('tjgn')
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
