<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Checkout</title>
</head>
<body>
    @include('newlayout.newnavbar')
    <div class="container mt-5">
        <h4 class="mb-3">Your Total Price : ${{$totalPrice}}</h4>
        <h5 class="mb-5">Please input your identity down below !</h5>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>
