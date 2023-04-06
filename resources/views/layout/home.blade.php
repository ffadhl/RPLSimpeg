@extends('layout.main')

@section('content')
    <div>
        <section class="py-3 mt-3">
            <div class="container py-4 py-xl-5">
                <div class="row gy-4 gy-md-0">
                    <div
                        class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                        <div style="max-width: 350px;">
                            <h1 class="display-6 fw-bold mb-4">Selamat Datang di Pelayanan edit <span
                                    class="colortext">Karyawan</span>.</h1>
                            <p class="my-4">Pada Menu Ini Merupakan CRUD Untuk Mengelola Data Karyawan, Silahkan click
                                button dibawah untuk Mengelola Data Karyawan</p><a class="btn btn-primary btn-lg me-2"
                                role="button" href="/karyawan">Data Karyawan</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div><img class="rounded img-fluid w-55 fit-cover" style="min-height: 200px;"
                                src="{{ asset('illustrasi.png') }}" /></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div>
        <section class="py-3 mt-3">
            <div class="container py-4 py-xl-5">
                <div class="row gy-4 gy-md-0">
                    <div class="col-md-6">
                        <div><img class="rounded img-fluid w-55 fit-cover" style="min-height: 200px;"
                                src="{{ asset('illustrasi2.png') }}" /></div>
                    </div>

                    <div
                        class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                        <div style="max-width: 350px;">
                            <h1 class="display-6 fw-bold mb-4">About <span class="colortext">Us</span>.</h1>
                            <p class="my-4">Rombel Satu Teknik Informatika Health Center Hospital atau bisa disingkat
                                dengan
                                ROSATI Hospital merupakan suatu project dalam membuat dan mengembangkan suatu perangkat
                                lunak,
                                dimana menjadi implementasi dari mata kuliah Rekayasa Perangkat Lunak. yang dimana berisi
                                tentang
                                sistem sistem yang berada di rumah sakit. seperti Pelayanan Publik, Farmasi, Pengelola
                                Ruangan,
                                dan Sistem Kepegawaian.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
