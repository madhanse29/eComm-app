
<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  
  $total=ProductController::cartItem();
}

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="/"><img src="https://p18cdn4static.sharpschool.com/UserFiles/Servers/Server_152602/Image/E%20Logo.png" alt="" width="30" height="30" class="d-inline-block align-items-center">-comm</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
     
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/myorders">Orders</a>
        </li>
     
        <li class="nav-item">
          <a class="nav-link active" href="/cartlist">Cart({{$total}})</a>
        </li>
      </ul>
      <form class="d-flex" action="/search">
        <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success text-light" type="submit">Search</button>
      </form>
     
      @if(Session::has('user'))
      <li class="nav-item dropdown d-flex bg-success rounded ms-2 text-white">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{Session::get('user')['name']}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
          </ul>
        </li>
        @else
        <a class="btn btn-success ms-2" href="/login">Login</a>
     <a class="btn btn-success ms-2" href="/register">Register</a>
        @endif

    </div>
</nav>
</div>