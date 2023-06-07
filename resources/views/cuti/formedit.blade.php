@extends('layout.main')

@section('content')
    <h3><strong> Edit Data Cuti </strong></h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('cuti') }}'">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('cuti/' . $id_ct) }}">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="id_ct" class="col-sm-2 col-form-label ">ID Cuti</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control-plaintext" id="id_ct" name="id_ct"
                            value="{{ $id_ct }}">
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
                    <label for="jns_ct" class="col-sm-2 col-form-label">Jenis Cuti</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm @error('jns_ct') is-invalid @enderror"
                            id="jns_ct" name="jns_ct" value="{{ $jns_ct }}">
                        @error('jns_ct')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ml_ct" class="col-sm-2 col-form-label">Mulai Cuti</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control form-control-sm @error('ml_ct') is-invalid @enderror"
                            id="ml_ct" name="ml_ct" value="{{ $ml_ct }}">
                        @error('ml_ct')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="sls_ct" class="col-sm-2 col-form-label">Selesai Cuti</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control form-control-sm @error('sls_ct') is-invalid @enderror"
                            id="sls_ct" name="sls_ct" value="{{ $sls_ct }}">
                        @error('sls_ct')
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
