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
            @if (Auth::user()->name=='Admin')
            <div class="description-block">
                <h5 class="description-header"><a href="/item/edit/{{$d->id}}">Add Stock</a></h5>
                <h5 class="description-header"><a href="/item/delete/{{$d->id}}">Delete Stock</a></h5>
            </div>
            @endif
            <!-- /.description-block -->
          </div>
          <form role="form" action="/cart/store" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token()}}"/>
            <input type="hidden" name="_method" value="POST">
            <input type="hidden" name="item_id" value="{{$d->id}}">
            <input type="hidden" name="item_price" value="{{$d->price}}">
          <div class="col-sm-4">
            <div class="description-block">
                <input type="number" class="form-control" name = "qty" placeholder="Insert Quantity Here" max="{{$d->stock}}">
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Add To Cart</button>
                  </div>
            </div>
            <!-- /.description-block -->
          </div>
        </form>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
  </div>

@endforeach
@endsection
