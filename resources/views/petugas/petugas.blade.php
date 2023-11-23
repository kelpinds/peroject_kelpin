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
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Nama Petugas</th>
                                                <th>Level</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                                @foreach ($data as $item)
                                                    
                                                <tr>
                                                    <td>{{$item->id_petugas}}</td>
                                                    <td>{{$item->username}}</td>
                                                    <td>{{$item->password}}</td>
                                                    <td>{{$item->nama_petugas}}</td>
                                                    <td>{{$item->level}}</td>
                                                    <td>
                                                        <a href="{{url('/editpetugas/'.$item->username)}}" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</a>
                                                        <a href="hapuspetugas/{{$item->username}}" class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                            <a type="button" class="btn btn-primary" href="{{url('/tambahpetugas')}}">Tambah</a>
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
