@extends('layout.master')

@section('contentt-header')
<h1>
    Drink
    <small>Drink Home</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard Drink</li>
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
                  <div class="box-tools pull-right">
                    <span data-toggle="tooltip" title="3 New Messages" class="badge bg-red">3</span>
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                  <th>Name</th>
                  <th>Stock</th>
                  <th>Action</th>
                </tr>
                @foreach ($data as $d)
                    <tr>
                        <td>#</td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->stock}}</td>
                        <td>
                            <a href="/item/edit/{{$d->id}}">Add Stock</a> |
                            <a href="/item/delete/{{$d->id}}">Delete Stock</a>
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
