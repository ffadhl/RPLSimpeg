@extends('layoutkaryawan.index')

@section('content')
    <div style="background-image: url('{{ asset('slide1.png') }}'); background-size: cover;" class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>Monitoring</h4>
                            <h2>Jadwal Karyawan</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="card">
        <div class="card-headerjadwal">
            <h4><b>Jadwal Karyawan</b></h4>
        </div>
        <div class="card-body">
            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th><i class="fa fa-calendar" aria-hidden="true"></i></th>
                            <th>Senin</th>
                            <th>Selasa</th>
                            <th>Rabu</th>
                            <th>Kamis</th>
                            <th>Jumat</th>
                            <th>Sabtu</th>
                            <th>Minggu</th>
                        </tr>

                    </thead>

                    <tbody>
                        <tr>
                            <td><small>Pagi </small></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><small>Siang </small></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><small>Malam </small></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
