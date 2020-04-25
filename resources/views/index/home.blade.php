@extends('layout.master')

@section('contentt-header')
<h1>
    INI HEADERNYA Employee
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
@endsection

@section('contentt')
<div class="row">
    <div class="col-md-4">
        <a href="/employee/create">
            <button type="button" class="btn btn-block btn-primary btn-sm">Add Employee</button>
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
                  <th>Name</th>
                  <th>Email</th>
                  <th>Image</th>

                  <th>Action</th>
                </tr>
                @foreach ($data as $d)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                        {{-- <a href="employee/show/{{$d->id}}"> --}}
                        {{$d->name}}
                        {{-- </a> --}}
                    </td>

                    <td>{{$d->email}}</td>
                    {{-- <td>{{$d->image}}</td> --}}
                    <td><img src="{{ asset('storage/images/user/'.$d->image)}}" alt="foto" width="50px" height="50px"></td>
                    <td>
                        <a href="/employee/edit/{{$d->id}}">EDIT</a> |
                        <a href="/employee/delete/{{$d->id}}">DELETE</a>
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
