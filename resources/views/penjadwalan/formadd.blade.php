@extends('layout.main')

@section('content')
    <h3><strong>Masukkan Data Penjadwalan Baru</strong></h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('penjadwalan') }}'">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('penjadwalan') }}">
                @csrf
                <div class="row mb-3">
                    <label for="kd_jwl" class="col-sm-2 col-form-label ">Kode Jadwal</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control form-control-sm @error('kd_jwl') is-invalid @enderror"
                            id="kd_jwl" name="kd_jwl">
                        @error('kd_jwl')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
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
                    <label for="txtnama" class="col-sm-2 col-form-label">Nama Karyawan</label>
                    <div class="col-sm-4">
                        <select class="form-select form-select-sm @error('txtnama') is-invalid @enderror" name="txtnama"
                            id="txtnama">
                            @error('txtnama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <option value=" "selected>-pilih-</option>
                            @foreach ($karyawans as $list)
                                <option value="{{$list->nama}}">-{{$list->nama}}-</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="id_jbtn" class="col-sm-2 col-form-label">ID Jabatan</label>
                    <div class="col-sm-4">
                        <select class="form-select form-select-sm @error('id_jbtn') is-invalid @enderror" name="id_jbtn"
                            id="id_jbtn">
                            @error('id_jbtn')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <option value=" "selected>-pilih-</option>
                            @foreach ($jabatans as $list)
                                <option value="{{$list->id_jabatan}}">-{{$list->id_jabatan}}-</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="wkt_shft" class="col-sm-2 col-form-label ">Waktu Shift</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm @error('wkt_shft') is-invalid @enderror"
                            id="wkt_shft" name="wkt_shft">
                        @error('wkt_shft')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tgl_shft" class="col-sm-2 col-form-label ">Tanggal Shift</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control form-control-sm @error('tgl_shft') is-invalid @enderror"
                            id="tgl_shft" name="tgl_shft">
                        @error('tgl_shft')
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
