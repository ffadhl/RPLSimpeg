<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Penggajian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">NIP</label>
                                <input type="number" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip',$post->nip) }}" placeholder="Masukkan NIP">
                            
                                <!-- error message untuk title -->
                                @error('nip')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Karyawan</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama',$post->nama) }}" placeholder="Masukkan nama karyawan">
                            
                                <!-- error message untuk title -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">ID Jabatan</label>
                                <input type="text" class="form-control @error('idjabatan') is-invalid @enderror" name="idjabatan" value="{{ old('idjabatan',$post->idjabatan) }}" placeholder="Masukkan ID Jabatan">
                            
                                <!-- error message untuk title -->
                                @error('idjabatan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Gaji Pokok</label>
                                <input type="text" class="form-control @error('gajipokok') is-invalid @enderror" name="gajipokok" value="{{ old('gajipokok',$post->gajipokok) }}" placeholder="Masukkan gaji pokok">
                            
                                <!-- error message untuk title -->
                                @error('gajipokok')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>   
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Tunjangan</label>
                                <input type="text" class="form-control @error('tunjangan') is-invalid @enderror" name="tunjangan" value="{{ old('tunjangan',$post->tunjangan) }}" placeholder="Masukkan Tunjangan">
                            
                                <!-- error message untuk title -->
                                @error('tunjangan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
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
    //CKEDITOR.replace( 'content' );
</script>
</body>
</html>