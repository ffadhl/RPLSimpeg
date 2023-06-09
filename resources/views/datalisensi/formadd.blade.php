@extends('layout.main')

@section('content')
    <h3><strong>Masukkan Data Lisensi</strong></h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('datalisensi') }}'">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('datalisensi') }}">
                @csrf
                
                <div class="row mb-3">
                    <label for="txtnip" class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-4">
                        <select class="form-select form-select-sm @error('txtnip') is-invalid @enderror" name="txtnip"
                            id="txtnip">
                            @error('txtnip')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <option value=" "selected>-pilih-</option>
                            @foreach ($karyawans as $list)
                                <option value="{{$list->nip}}">-{{$list->nip}}-</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtnamalisensi" class="col-sm-2 col-form-label">Nama Lisensi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm @error('txtnamalisensi') is-invalid @enderror"
                            id="txtnamalisensi" name="txtnamalisensi">
                        @error('txtnamalisensi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtpenerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control form-control-sm @error('txtpenerbit') is-invalid @enderror"
                            id="txtpenerbit" name="txtpenerbit">
                        @error('txtpenerbit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txttglterbit" class="col-sm-2 col-form-label">Tanggal Terbit</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control form-control-sm @error('txttglterbit') is-invalid @enderror"
                            id="txttglterbit" name="txttglterbit">
                        @error('txttglterbit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txttglkadaluarsa" class="col-sm-2 col-form-label">Tanggal Kadaluarsa</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control form-control-sm @error('txttglkadaluarsa') is-invalid @enderror"
                            id="txttglkadaluarsa" name="txttglkadaluarsa">
                        @error('txttglkadaluarsa')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtidkredensial" class="col-sm-2 col-form-label">ID Kredensial</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm @error('txtidkredensial') is-invalid @enderror"
                            id="txtidkredensial" name="txtidkredensial">
                        @error('txtidkredensial')
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
    </div>
@endsection
