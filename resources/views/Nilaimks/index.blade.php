@extends('nilaimks.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Nilai Mahasiswa</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('nilaimks.create') }}"> Create New</a>
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
            <th>Nama Mata Kuliah</th>
            <th>Kode Mata Kuliah</th>
            <th>Nilai Mata Kuliah</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($nilaimks as $nilaimk)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $nilaimk->idmhs }}</td>
            <td>{{ $nilaimk-nama_mk }}</td>
            <td>{{ $nilaimk->kode_mk }}</td>
            <td>{{ $nilaimk->nilai}}</td>
            <td>
                <form action="{{ route('nilaimks.destroy',$nilaimk->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('nilaimks.show',$nilaimk->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('nilaimks.edit',$nilaimk->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    
      
@endsection