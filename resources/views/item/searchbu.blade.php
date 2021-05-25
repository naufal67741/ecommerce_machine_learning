@extends('layout.master')

@section('contentt-header')
<h1>
    Search Drinks
    <small>Whi-Sky</small>
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
                  <h3 class="box-title">Search Data</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="/item/hasilSearch" method="POST">
                  <div class="box-body">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}"/>
                        <input type="hidden" name="_method" value="POST">
                      <label>Level Sweetness</label>
                      <input type="text" class="form-control" name = "sweetnessLevel" placeholder="0-4">
                      <label>Level Spicy</label>
                      <input type="text" class="form-control" name = "spicyLevel" placeholder="0-4">
                      <label>Level Malty</label>
                      <input type="text" class="form-control" name = "maltyLevel" placeholder="0-4">
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
