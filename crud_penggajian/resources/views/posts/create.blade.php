<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Penggajian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">NIP</label>
                                <input type="number" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" placeholder="Masukkan NIP">
                            
                                <!-- error message untuk title -->
                                @error('nip')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Karyawan</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama karyawan" >
                            
                                <!-- error message untuk title -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">ID Jabatan</label>
                                <input type="number" class="form-control @error('idjabatan') is-invalid @enderror" name="idjabatan" rows="5" placeholder="Masukkan ID Jabatan" value="{{ old('idjabatan') }}">
                            
                                <!-- error message untuk content -->
                                @error('idjabatan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Gaji Pokok</label>
                                <input type="number" class="form-control @error('gajipokok') is-invalid @enderror" name="gajipokok" rows="5" placeholder="Masukkan Gaji Pokok" value="{{ old('gajipokok') }}">
                            
                                <!-- error message untuk content -->
                                @error('gajipokok')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>                            

                            <div class="form-group">
                                <label class="font-weight-bold">Tunjangan</label>
                                <input type="number" class="form-control @error('tunjangan') is-invalid @enderror" name="tunjangan" rows="5" placeholder="Masukkan Tunjangan" value="{{ old('tunjangan') }}">
                            
                                <!-- error message untuk content -->
                                @error('tunjangan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    //CKEDITOR.replace( 'deskripsiDepartemen' );
    //CKEDITOR.replace( 'lokasiDepartemen' );
</script>
</body>
</html>