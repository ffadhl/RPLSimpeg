@extends('layout.main')

@section('content')
    <div>
        <div class="carddashboard">
            <div class="row">
                <div class="col-md-12">
                    <span>Selamat Datang, {{ Auth::user()->name }} <span>
                </div>
            </div>
        </div>

        <div class="carddashboard-container">
            <div class="carddashboard">
                <div class="row">
                    <div class="col-md-12">
                        <span><span>
                    </div>
                </div>
            </div>
            <div class="carddashboard">
                <div class="row">
                    <div class="col-md-12">
                        <span><span>
                    </div>
                </div>
            </div>
            <div class="carddashboard">
                <div class="row">
                    <div class="col-md-12">
                        <span><span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
