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
        <a href="/checkout">
            <button type="button" class="btn btn-block btn-primary btn-sm">CHECKOUT</button>
        </a>
    </div>
</div>
@if ($status = true)
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
                  <th>Item Name</th>
                  <th>Quantity</th>
                  <th>Price</th>
                </tr>
                @foreach ($data as $d)
                    <tr>
                        <td>#</td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->item->name}}</td>
                        <td>{{$d->qty}}</td>
                        <td>{{$d->totalPrice}}</td>
                    </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </div>
</div>
@else
    <h3>You haven't add a drink</h3>
@endif

@endsection
