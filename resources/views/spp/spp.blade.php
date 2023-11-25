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
                                Data Spp
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                   
                                    <table class="table table-striped table-bordered table-hover"
                                        id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tahun</th>
                                                <th>Nominal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                                @foreach ($data as $item)
                                                    
                                                <tr>
                                                    <td>{{$item->id_spp}}</td>
                                                    <td>{{$item->tahun}}</td>
                                                    <td>{{$item->nominal}}</td>
                                                    <td>
                                                        <a href="{{url('/editspp/'.$item->tahun)}}" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</a>
                                                        <a href="hapusspp/{{$item->tahun}}" class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                            <a type="button" class="btn btn-primary" href="{{url('/tambahspp')}}">Tambah</a>
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
