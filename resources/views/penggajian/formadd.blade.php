@extends('layout.main')

@section('content')
    <h3><strong>Masukkan Data Penggajian Baru</strong></h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('penggajian') }}'">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('penggajian') }}">
                @csrf
                <div class="row mb-3">
                    <label for="id_gj" class="col-sm-2 col-form-label ">ID Gaji</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control form-control-sm @error('id_gj') is-invalid @enderror"
                            id="id_gj" name="id_gj">
                        @error('id_gj')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtnip" class="col-sm-2 col-form-label ">NIP</label>
                    <div class="col-sm-4">
                        <select id="txtnip" name =txtnip class="form-control select2-multiple" multiple>
                            <option value=""></option>

                            @foreach($karyawans as $karyawan)
                            <option value="{{$karyawan->nip}}">{{$karyawan->nip}}</option>
                            @endforeach
                            
                        </select>
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
                    <label for="gj_pkk" class="col-sm-2 col-form-label ">Gaji Pokok</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control form-control-sm @error('gj_pkk') is-invalid @enderror"
                            id="gj_pkk" name="gj_pkk">
                        @error('gj_pkk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tjgn" class="col-sm-2 col-form-label ">Tunjangan</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control form-control-sm @error('tjgn') is-invalid @enderror"
                            id="tjgn" name="tjgn">
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
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    @endsection
