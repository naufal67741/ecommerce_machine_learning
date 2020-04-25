@extends('layout.master')

@section('contentt-header')
<h1>
    INI HEADERNYA EDIT
    <small>Tambah data</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
@endsection

@section('contentt')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Add Data Cluster</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="/cluster/update" method="POST">
                  <div class="box-body">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}"/>
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="id" value="{{$data->id}}">
                      <label>Name</label>
                      <input type="text" class="form-control" name = "name"
                        value = "{{$data->name}}" placeholder="Enter Name">
                    </div>
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
        </div>
    </div>
@endsection
