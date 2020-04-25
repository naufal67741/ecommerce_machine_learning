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
        {{-- <a href="/cluster/create">
            <button type="button" class="btn btn-block btn-primary btn-sm">Add Department</button>
        </a> --}}
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
              {{-- <table class="table table-striped">
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
            </div> --}}
            <!-- /.box-body -->

            <h4>Your Total Price : {{$totalPrice}}</h4>
            <form role="form" action="/checkout/success" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token()}}"/>
                        <input type="hidden" name="_method" value="POST">
                <div class="box-body">
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name = "address"placeholder="Enter Address">
                  </div>
                  <div class="form-group">
                    <label>Card Holder Name</label>
                    <input type="text" class="form-control" name = "cardHolderName"placeholder="Enter Card Holder Name">
                  </div>
                  <div class="form-group">
                    <label>CC Number</label>
                    <input type="text" class="form-control" name = "ccNumber"placeholder="ccNumber">
                  </div>
                  <div class="form-group">
                    <label>Card Expire</label>
                    <input type="text" class="form-control" name = "cardExpire"placeholder="Enter Card Expired Date">
                  </div>
                  <div class="form-group">
                    <label>CVC</label>
                    <input type="text" class="form-control" name = "cvc"placeholder="Enter CVC">
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
                </div>
          </div>
    </div>
</div>
@endsection
