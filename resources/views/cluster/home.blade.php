@extends('layout.master')

@section('contentt-header')
<h1>
    Cluster
    <small>Cluster Home</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
@endsection

@section('contentt')
<div class="row">
    <div class="col-md-4">
        <a href="/cluster/create">
            <button type="button" class="btn btn-block btn-primary btn-sm">Add Department</button>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Striped Full Width Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
                @foreach ($data as $d)
                    <tr>
                        <td>#</td>
                        <td>{{$d->id}}</td>
                        <td>{{$d->name}}</td>
                        <td>
                            <a href="/cluster/edit/{{$d->id}}">EDIT</a> |
                            <a href="/cluster/delete/{{$d->id}}">DELETE</a>
                        </td>
                    </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </div>
</div>
@endsection
