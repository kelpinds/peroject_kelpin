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
                    <h4 class="h4">Tambah Kelas</h4>
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
                            <label for="nama_kelas" class="form-label">Nama Kelas</label>
                            <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" placeholder="nama kelas">
                            @error('nama_kelas')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        
                        <div class="mb-3">
                            <label for="kopetensi_keahlian" class="form-label">kopetensi keahlian</label>
                            <input type="text" class="form-control" name="kopetensi_keahlian" id="kopetensi_keahlian" placeholder="kopetensi keahlian">
                            @error('kopetensi_keahlian')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        
                            <button class="btn form-control btn-primary mb-2">Tambah</button>
                            <button class="btn form-control btn-outline-success mb-2" type="reset">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>     