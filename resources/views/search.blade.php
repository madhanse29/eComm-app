@extends('master')
@section('content')
<div class="container custom-search">
    <div class="row">
<div class="col-sm-4">
    <a href="#">Filter</a>
</div>
<div class="col-sm-4">
<div class="trending-wrapper">
    <h4>Result for products</h4>
    @foreach($products as $item)
    <div class="searched-item">
   <a href="detail/{{$item['id']}}">
      <img src="{{$item['gallery']}}" class="searching1-image col-sm-6 img-thumbnail" >
      <div class="">
    <h2>{{$item['name']}}</h2>        
    <h5>{{$item['description']}}</h5>        
      </div>
   </a>
    </div>
    @endforeach
</div>
</div>
</div>
</div>
@endsection