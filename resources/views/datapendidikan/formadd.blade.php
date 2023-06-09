@extends('layout.main')

@section('content')
    <h3><strong>Masukkan Data Pendidikan</strong></h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('datapendidikan') }}'">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('datapendidikan') }}">
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
                    <label for="txtsekolah" class="col-sm-2 col-form-label">Sekolah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm @error('txtsekolah') is-invalid @enderror"
                            id="txtsekolah" name="txtsekolah">
                        @error('txtsekolah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtgelar" class="col-sm-2 col-form-label">Gelar</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control form-control-sm @error('txtgelar') is-invalid @enderror"
                            id="txtgelar" name="txtgelar">
                        @error('txtgelar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtbidang" class="col-sm-2 col-form-label">Bidang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm @error('txtbidang') is-invalid @enderror"
                            id="txtbidang" name="txtbidang">
                        @error('txtbidang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txttglmulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control form-control-sm @error('txttglmulai') is-invalid @enderror"
                            id="txttglmulai" name="txttglmulai">
                        @error('txttglmulai')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txttglselesai" class="col-sm-2 col-form-label">Tanggal Selesai</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control form-control-sm @error('txttglselesai') is-invalid @enderror"
                            id="txttglselesai" name="txttglselesai">
                        @error('txttglselesai')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtnilai" class="col-sm-2 col-form-label">Nilai</label>
                    <div class="col-sm-10">
                        <input type="number" step="0.01" class="form-control form-control-sm @error('txtnilai') is-invalid @enderror"
                            id="txtnilai" name="txtnilai">
                        @error('txtnilai')
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
