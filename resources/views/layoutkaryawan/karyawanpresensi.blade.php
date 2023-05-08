@extends('layoutkaryawan.index')

@section('content')
    <div style="background-image: url('{{ asset('slide1.png') }}'); background-size: cover;" class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>Layanan</h4>
                            <h2>Presensi Karyawan</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="containerpresensi">
        <header>Form Presensi Karyawan</header>
        <form action="#" class="form">
            <div class="input-boxpresensi">
                <label>NIP</label>
                <input type="text" placeholder="Masukkan NIP Saudara" @error('txtnip') is-invalid @enderror"
                    id="txtnip" name="txtnip" required>
                @error('txtnip')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="input-boxpresensi">
                <label>Nama Karyawan</label>
                <input type="text" placeholder="Masukkan Nama Saudara" @error('txtnama') is-invalid @enderror"
                    id="txtnama" name="txtnama" required>
                @error('txtnama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="img_foto" class="col-sm-2 col-form-label ">Foto</label>
                <div class="col-sm-4">
                    <input type="file" class="form-control" id="img_foto" name='img_foto'>
                    @error('img_foto')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <button>Submit</button>
        </form>
    </section>
@endsection
