@extends('master')
@section('content')
<div class="container custom-product">
    <div class="row">
<div class="col-sm-10">
<div class="trending-wrapper">
    <h4>Result for products</h4>
    @foreach($products as $item)
    <div class="row searched-item cart-list-divider">
 <div class="col-sm-3">
 <a href="detail/{{$item->id}}">
      <img src="{{$item->gallery}}" class="searching1-image col-sm-6 img-thumbnail" >
   </a>
 </div>
 <div class="col-sm-4">

    <h2>{{$item->name}}</h2>        
    <h5>{{$item->description}}</h5>      

 </div>
 <div class="col-sm-3">
 <a class="btn btn-danger" href="/removecart/{{$item->cart_id}}">Remove from cart</a>
 </div>
 
    </div>
    @endforeach
</div>
</div>
</div>
</div>
@endsection 