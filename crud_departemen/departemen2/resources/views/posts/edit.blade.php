<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Departemen</title>
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
                                <label class="font-weight-bold">Nomor Identifikasi</label>
                                <input type="number" class="form-control @error('nomorIdentifikasi') is-invalid @enderror" name="nomorIdentifikasi" value="{{ old('nomorIdentifikasi',$post->nomorIdentifikasi) }}" placeholder="Masukkan no Identifikasi">
                            
                                <!-- error message untuk title -->
                                @error('nomorIdentifikasi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Departemen</label>
                                <input type="text" class="form-control @error('namaDepartemen') is-invalid @enderror" name="namaDepartemen" value="{{ old('namaDepartemen',$post->namaDepartemen) }}" placeholder="Masukkan nama departemen">
                            
                                <!-- error message untuk title -->
                                @error('namaDepartemen')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Deskripsi Departemen</label>
                                <textarea class="form-control @error('deskripsiDepartemen') is-invalid @enderror" name="deskripsiDepartemen" rows="5" placeholder="Masukkan Deskripsi">{{ old('deskripsiDepartemen',$post->deskripsiDepartemen) }}</textarea>
                            
                                <!-- error message untuk content -->
                                @error('deskripsiDepartemen')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Kepala Departemen</label>
                                <input type="text" class="form-control @error('kepalaDepartemen') is-invalid @enderror" name="kepalaDepartemen" value="{{ old('kepalaDepartemen',$post->kepalaDepartemen) }}" placeholder="Masukkan nama Kepala departemen">
                            
                                <!-- error message untuk title -->
                                @error('kepalaDepartemen')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>   
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Lokasi Departemen</label>
                                <textarea class="form-control @error('lokasiDepartemen') is-invalid @enderror" name="lokasiDepartemen" rows="5" placeholder="Masukkan Lokasi">{{ old('lokasiDepartemen',$post->lokasiDepartemen) }}</textarea>
                            
                                <!-- error message untuk content -->
                                @error('lokasiDepartemen')
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