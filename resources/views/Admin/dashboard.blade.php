@extends('layout')
@section('lt')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    haha
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover"
                                            id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>ID Petugas</th>
                                                    <th>nisn</th>
                                                    <th>Tanggal di Bayar</th>
                                                    <th>Bulan di Bayar</th>
                                                    <th>Tahun di Bayar</th>
                                                    <th>ID Spp</th>
                                                    <th>Jumlah Di Bayar</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $item)
                                                    
                                                
                                                <td>{{$item>id_pembayaran}}</td>
                                                <td>{{$item>id_petugas}}</td>
                                                <td>{{$item>nisn}}</td>
                                                <td>{{$item>tgl_dibayar}}</td>
                                                <td>{{$item>bulan_dibayar}}</td>
                                                <td>{{$item>tahun_dibayar}}</td>
                                                <td>{{$item>id_spp}}</td>
                                                <td>{{$item>jumlah_bayar}}</td>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            <!--End Advanced Tables -->
                        </div>
                    </div>
                    <!-- /. ROW  -->

                </div>
            </div>
        </div>
    </div>
@endsection
