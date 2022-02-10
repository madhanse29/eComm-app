@extends('master')
@section('content')
<div class="container">
<div class="row">
    <div class="col-sm-6 mt-5">
<img class='detail-img mx-5 px-5' src="{{$product['gallery']}}" alt="">
    </div>
    <div class="col-sm-6">
<a href="/">Go Back</a>
<h2 class="text-danger">{{$product['name']}}</h2>
<h3>Price: {{$product['price']}}</h3>
<h4>Details: {{$product['description']}}</h4>
<h4>category: {{$product['category']}}</h4>
<br><br>
<button class="btn btn-warning">Add to cart</button>
<br><br>
<button class="btn btn-success">Buy now</button>
<br> <br>
    </div>
</div>
</div>
@endsection