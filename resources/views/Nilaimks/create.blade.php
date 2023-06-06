@extends('mahasiswas.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('nilaimks.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('nilaimks.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Mahasiswa:</strong>
                <input type="number" name="idmhs" class="form-control" placeholder="ID Mahasiswa">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Mata Kuliah:</strong>
                <input type="text" name="nama_mk" class="form-control" placeholder="Nama Mata Kuliah">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Mata Kuliah:</strong>
                <input type="number" name="kode_mk" class="form-control" placeholder="Kode Mata Kuliah">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nilai Mata Kuliah:</strong>
                <input type="number" name="nilai" class="form-control" placeholder="Nilai Mata Kuliah">
            </div>
        </div>
    </div>
   
</form>
@endsection