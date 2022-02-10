@extends('master')
@section('content')
<div class="container custom-product">
<div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
      @foreach($products as $item)
      <a href="detail/{{$item['id']}}">
    <div class="carousel-item {{$item['id']==1?'active':''}} ">
      <img src="{{$item['gallery']}}" class=" custom-slider mx-5 px-5" >
      <div class="carousel-caption d-none d-md-block text-dark">
        <h5>{{$item['name']}}</h5>
        <p>{{$item['description']}}</p>
      </div>
   </a>
    </div>
    @endforeach
</div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"><i class="bi bi-arrow-left-short"></i></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="trending-wrapper">
    <h3>Trending products</h3>
    @foreach($products as $item)
   <a href="detail/{{$item['id']}}">
   <div class="trending-item ">
      <img src="{{$item['gallery']}}" class="trending-image" >
      <div class="">
    <h5>{{$item['name']}}</h5>        
      </div>
   </a>
    </div>
    @endforeach
</div>
</div>
</div>
@endsection