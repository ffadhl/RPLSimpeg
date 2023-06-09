@extends('layout.main')

@section('content')
    <h3><strong>Masukkan Data Mahasiswa Baru</strong></h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('imammahasiswa') }}'">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('imammahasiswa') }}">
                @csrf

                <div class="row mb-3">
                    <label for="txtidmahasiswa" class="col-sm-2 col-form-label ">ID Mahasiswa</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control form-control-sm @error('txtidmahasiswa') is-invalid @enderror"
                            id="txtidmahasiswa" name="txtidmahasiswa">
                        @error('txtidmahasiswa')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtnama" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                    <div class="col-sm-10">
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
                    <label for="txtjeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-4">
                        <div class="form-check">
                            <input class="form-check-input @error('txtjeniskelamin') is-invalid @enderror" type="radio"
                                name="txtjeniskelamin" id="txtjeniskelamin" value="L">
                            <label class="form-check-label" for="txtjeniskelamin">Laki-Laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('txtjeniskelamin') is-invalid @enderror" type="radio"
                                name="txtjeniskelamin" id="txtjeniskelamin" value="P">
                            <label class="form-check-label" for="txtjeniskelamin">Perempuan</label>
                        </div>
                        @error('txtjeniskelamin')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="txtprodi" class="col-sm-2 col-form-label">Prodi</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control form-control-sm @error('txtprodi') is-invalid @enderror"
                            id="txtprodi" name="txtprodi">
                        @error('txtprodi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="txtagama" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-4">
                        <select class="form-select form-select-sm @error('txtagama') is-invalid @enderror" name="txtagama"
                            id="txtagama">
                            @error('txtagama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <option value=" "selected>-pilih-</option>
                            <option value="Islam">Islam</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Budhha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="txtnik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="number"
                            class="form-control form-control-sm @error('txtnik') is-invalid @enderror"
                            id="txtnik" name="txtnik">
                        @error('txtnik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="txttelepon" class="col-sm-2 col-form-label">No Telepon</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control form-control-sm @error('txttelepon') is-invalid @enderror"
                            id="txttelepon" name="txttelepon">
                        @error('txttelepon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="txtalamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm @error('txtalamat') is-invalid @enderror"
                            id="txtalamat" name="txtalamat">
                        @error('txtalamat')
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
