@extends('layout.master')

@section('contentt-header')
<h1>
    Drink
    <small>Drink Home</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Search</li>
  </ol>
@endsection

@section('contentt')
<div class="row">
    <div class="col-md-4">
        <a href="/item/search">
            <button type="button" class="btn btn-block btn-primary btn-sm">Search Drink</button>
        </a>
    </div>
</div>
@foreach ($data as $d)
<div class="box box-widget widget-user">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header bg-aqua-active">
      <h3 class="widget-user-username">{{$d->name}}</h3>
      <h5 class="widget-user-desc">{{$d->description}}</h5>
    </div>
    <div class="widget-user-image">
      <img class="img-circle" src="../dist/img/wine.jpg" alt="User Avatar">
    </div>
    <div class="box-footer">
      <div class="row">
        <div class="col-sm-4 border-right">
          <div class="description-block">
            <h5 class="description-header">{{$d->sweetness}}</h5>
            <span class="description-text">SWEETNESS</span>
          </div>
          <!-- /.description-block -->
        </div>
        <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">{{$d->spicy}}</h5>
              <span class="description-text">SPICY</span>
            </div>
            <!-- /.description-block -->
          </div>
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">{{$d->malty}}</h5>
              <span class="description-text">MALTY</span>
            </div>
            <!-- /.description-block -->
          </div>
        <div class="col-sm-4">
          <div class="description-block">
            <h5 class="description-header">{{$d->stock}}</h5>
            <span class="description-text">STOCK</span>
          </div>
          <!-- /.description-block -->
        </div>
        <div class="col-sm-4">
            <div class="description-block">
                <h5 class="description-header"><a href="/item/edit/{{$d->id}}">Add Stock</a></h5>
                <h5 class="description-header"><a href="/item/delete/{{$d->id}}">Delete Stock</a></h5>
            </div>
            <!-- /.description-block -->
          </div>

          <div class="col-sm-4">
            <div class="description-block">
                <input type="text" class="form-control" name = "qty" placeholder="Insert Quantity Here">
                <h5 class="description-header"><a href="/item/buy/{{$d->id}}">Add to cart</a></h5>
            </div>
            <!-- /.description-block -->
          </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
  </div>

@endforeach
@endsection
