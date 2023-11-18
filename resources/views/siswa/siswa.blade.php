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
                                                <th>Nisn</th>
                                                <th>Nis</th>
                                                <th>Nama</th>
                                                <th>Id Kelas</th>
                                                <th>No Telpon</th>
                                                <th>Id Spp</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                                @foreach ($data as $item)
                                                    
                                                <tr>
                                                    <td>{{$item->}}</td>
                                                    <td>{{$item->}}</td>
                                                    <td>{{$item->}}</td>
                                                    <td>{{$item->}}</td>
                                                    <td>{{$item->}}</td>
                                                    <td>{{$item->}}</td>
                                                    <td>
                                                        <a href="{{url('/editkelas/'.$item->id_kelas)}}" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</a>
                                                        <a href="hapuskelas/{{$item->id_kelas}}" class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                        </div>
                                        
                                <a class="btn btn-outline-primary" href="{{url('/tambahkelas')}}" role="button">Tambah</a> 
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
