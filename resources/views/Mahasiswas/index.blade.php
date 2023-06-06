@extends('mahasiswas.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Mahasiswa</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('mahasiswas.create') }}"> Create New</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>ID Mahasiswa</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Program Studi</th>
            <th>Agama</th>
            <th>No. Telepon</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($mahasiswas as $mahasiswa)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $mahasiswa->idmhs }}</td>
            <td>{{ $mahasiswa-nama }}</td>
            <td>{{ $mahasiswa->nik }}</td>
            <td>{{ $mahasiswa->tempat_lahir }}</td>
            <td>{{ $mahasiswa->tanggal_lahir }}</td>
            <td>{{ $mahasiswa->prodi }}</td>
            <td>{{ $mahasiswa-agama }}</td>
            <td>{{ $mahasiswa->no_telepon }}</td>
            <td>
                <form action="{{ route('mahasiswas.destroy',$mahasiswa->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('mahasiswas.show',$mahasiswa->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('mahasiswas.edit',$mahasiswa->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    
      
@endsection