<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengaduan | Masyarakat</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
</head>
<body>
    <div id="main" class="d-flex align-items-center vh-100" style="background-color: #3264ed;">
        <div class="container">
            <div class="card shadow m-auto" style="width: 400px">
                <div class="card-body">
                    <h4 class="h4">Tulis Laporan Anda</h4>
                    @if (session('pesan'))
                        <div class="alert alert-success" role="alert">
                            {{ session('pesan') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-success" role="alert">
                            Silahkan isi semua kolom!!!
                        </div>
                    @endif
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nisn" class="form-label">NISN</label>
                            <input type="text" class="form-control" name="NISN" id="nisn" placeholder="nisn">
                            @error('nisn')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>

                        <div class="mb-3">
                            <label for="nis" class="form-label">NIS</label>
                            <input type="text" class="form-control" name="NIS" id="nis" placeholder="nis">
                            @error('nis')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        
                        <div class="mb-3">
                            <label for="nama" class="form-label">NAMA</label>
                            <input type="text" class="form-control" name="NAMA" id="nama" placeholder="nama">
                            @error('nama')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        
                        
                        
                           
                          
                            <button class="btn form-control btn-primary mb-2">Lapor</button>
                            <button class="btn form-control btn-outline-success mb-2" type="reset">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>     