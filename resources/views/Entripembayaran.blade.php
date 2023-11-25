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
                    <h4 class="h4">Tambah Siswa</h4>
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
                            <label for="nisn" class="form-label">Nisn</label>
                            <input type="text" class="form-control" name="nisn" id="nisn" placeholder="Nisn">
                            @error('nisn')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        
                        <div class="mb-3">
                            <label for="bulan_dibayar" class="form-label">Bulan Bayar</label>
                            <input type="text" class="form-control" name="bulan_dibayar" id="bulan_dibayar" placeholder="Bulan Bayar">
                            @error('bulan_bayar')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        <div class="mb-3">
                            <label for="tahun_dibayar" class="form-label">Tahun Bayar</label>
                            <input type="text" class="form-control" name="tahun_dibayar" id="tahun_dibayar" placeholder="Tahun Bayar">
                            @error('tahun_bayar')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        
                            <div class="from-group"> 
                                <label>ID Spp</label>
                                <select class="form-control" name="id_spp" id="id_spp">
                                    @foreach ($dataspp as $item)
                                        <option value="{{$item->id_spp}}">{{$item->tahun}}-{{$item->nominal}}</option>
                                    @endforeach
                                </select>
                                @error('id_spp')
                                    <div class="form-text">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="jumlah_bayar" class="form-label">Jumlah Bayar</label>
                                    <input type="text" class="form-control" name="jumlah_bayar" id="jumlah_bayar" placeholder="Jumlah Bayar">
                                    @error('jumlah_bayar')
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