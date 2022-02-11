@extends('master')
@section('content')
<div class="container custom-product">
    <div class="row">
<div class="col-sm-10">
<div class="trending-wrapper">
    <h4>My orders</h4>
    @csrf
    @foreach($orders as $item)
    <div class="row searched-item cart-list-divider">
 <div class="col-sm-3">
 <a href="detail/{{$item->id}}">
      <img src="{{$item->gallery}}" class="searching1-image col-sm-6 img-thumbnail" >
   </a>
 </div>
 <div class="col-sm-4">

    <h3>Name: {{$item->name}}</h3>        
    <p>Delivery status: {{$item->status}}</p>      
    <p>Addresss: {{$item->address}}</p>      
    <p>Payment Status : {{$item->payment_status}}</p>      
    <p>Payment Method : {{$item->payment_method}}</p>      

 </div>
 
    </div>
    @endforeach

</div>
</div>
</div>
</div>
@endsection 