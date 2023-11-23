<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tambah | kelas</title>
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
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                            @error('username')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" class="form-control" name="password" id="password" placeholder="Password">
                            @error('Password')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        
                        <div class="mb-3">
                            <label for="nama_petugas" class="form-label">Nama Petugas</label>
                            <input type="text" class="form-control" name="nama_petugas" id="nama_petugas" placeholder="Nama Petugas">
                            @error('nama_petugas')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        
                            <div class="from-group"> 
                                <label for="level">Level</label>
                                <select class="form-control" name="level" id="level">
                                        <option>Admin</option>
                                        <option>Petugas</option>
                                </select>
                                @error('level')
                                    <div class="form-text">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div><br>
                        
                            <button class="btn form-control btn-primary mb-2">Tambah</button>
                            <button class="btn form-control btn-outline-success mb-2" type="reset">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>     