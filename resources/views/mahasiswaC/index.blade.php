@extends('mahasiswaC.layout')
@section('content')
    

    <div>
        <a href="{{route('mahasiswa.create')}}">Tambah Mahasiswa</a>
    </div>
    <div>
        <a href="{{route('mahasiswa.index')}}">Tampilkan Mahasiswa</a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>Jenis Kelamin</th>
            <th>Prodi</th>
            <th>Agama</th>
            <th>Telepon</th>
            <th>Alamat</th>
        </tr>


        @foreach ($mahasiswa as $mhs)
        <tr>
            <td> {{++$i}} </td>
            <td> {{ $mhs -> nama }} </td>
            <td> {{ $mhs -> nik }} </td>
            <td> {{ $mhs -> jenis_kelamin }} </td>
            <td> {{ $mhs -> prodi }} </td>
            <td> {{ $mhs -> agama }} </td>
            <td> {{ $mhs -> telepon }} </td>
            <td> {{ $mhs -> alamat }} </td>
            <td>
                <form action=" {{route('mahasiswa.destroy', $mhs->id)}}" method="POST">
                <a href="{{route('mahasiswa.show', $mhs->id)}}">Tampilkan</a>
                <a href="{{route('mahasiswa.edit', $mhs->id)}}">Edit</a>
                @csrf
                @method('DELETE')

                <button type="submit">Hapus</button>

                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $mahasiswa->links() !!}
@endsection