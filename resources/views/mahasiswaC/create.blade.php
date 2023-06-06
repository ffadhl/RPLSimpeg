@extends('mahasiswaC.layout')
@section('content')

<div>
    <a href="{{route('mahasiswa.index')}}">Tampilkan Mahasiswa</a>
</div>
<form action=" {{route('mahasiswa.store')}}" method="POST">

    @csrf
    
    <div class="form-group">
        Nama:
        <input type="text" name="nama" class="form-control" placeholder="nama">
    </div>
    <div class="form-group">
        NIK:
        <input type="text" name="nik" class="form-control" placeholder="nik">
    </div>
    <div class="form-group">
        Jenis Kelamin:
        <input type="radio" name="nama" class="form-control" value="pria">
        <label for="pria">Pria</label>
        <input type="radio" name="nama" class="form-control" value="wanita">
        <label for="wanita">Wanita</label>
    </div>
    <div class="form-group">
        Prodi:
        <input type="text" name="prodi" class="form-control" placeholder="prodi">
    </div>
    <div class="form-group">
        Agama:
        <input type="text" name="agama" class="form-control" placeholder="agama">
    </div>
    <div class="form-group">
        telepon:
        <input type="text" name="telepon" class="form-control" placeholder="telepon">
    </div>
    <div class="form-group">
        alamat:
        <input type="text" name="alamat" class="form-control" placeholder="alamat">
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>

</form>
    
@endsection