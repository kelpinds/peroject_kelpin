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
                                Advanced Tables
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover"
                                        id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kelas</th>
                                                <th>Kopetensi Keahlian</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                                @foreach ($data as $item)
                                                    
                                                <tr>
                                                    <td>{{$item->id_kelas}}</td>
                                                    <td>{{$item->nama_kelas}}</td>
                                                    <td>{{$item->kopetensi_keahlian}}</td>
                                                    <td>
                                                        <a href="{{url('/editkelas'.$item->id_petugas)}}" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</a>
                                                        <a href="hapus/{{$item->id_petugas}}" class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</a>
                                                    </td>
                                                </tr>
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
