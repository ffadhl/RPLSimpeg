@extends('mahasiswa.layout')
@section('content')

<form action=" {{route('mahasiswa.update', $mahasiswa->id)}} " method="post">
@csrf
@method('PUT')

<div class="form-group">
    <strong>Nama:</strong>
    <input type="text" name="nama" value="{{$mahasiswa->name}}" class="form-control" placeholder="nama">
</div>
<div class="form-group">
    <strong>NIK:</strong>
    <input type="text" name="nik" value="{{$mahasiswa->nik}}" class="form-control" placeholder="nama">
</div>
<div class="form-group">
    <strong>Jenis Kelamin:</strong>
    <input type="radio" name="nama" class="form-control" value="pria" value="{{$mahasiswa->jenis_kelamin}}">
    <label for="pria">Pria</label>
    <input type="radio" name="nama" class="form-control" value="wanita" value="{{$mahasiswa->jenis_kelamin}}">
    <label for="wanita">Wanita</label>
</div>
<div class="form-group">
    <strong>Prodi:</strong>
    <input type="text" name="prodi" value="{{$mahasiswa->prodi}}" class="form-control" placeholder="nama">
</div>
<div class="form-group">
    <strong>Agama:</strong>
    <input type="text" name="agama" value="{{$mahasiswa->agama}}" class="form-control" placeholder="nama">
</div>
<div class="form-group">
    <strong>Telepon:</strong>
    <input type="text" name="telepon" value="{{$mahasiswa->telepon}}" class="form-control" placeholder="telepon">
</div>
<div class="form-group">
    <strong>Alamat:</strong>
    <input type="text" name="alamat" value="{{$mahasiswa->alamat}}" class="form-control" placeholder="nama">
</div>

<div class="submit">
    <button type="submit">Submit</button>
</div>

</form>

@endsection