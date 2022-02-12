<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-comm app</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    @include('header')
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .custom-login{
        height:500px;
        padding-top:100px
    }
    .custom-slider{
        height: 400px;
    }
    .custom-product{
        height:100vh;
    }
    .custom-search{
        height:900px;
    }
    .trending-image{
        height: 100px;
        object-fit:cover;
    }
    .trending-item{
        float:left;
        width:20%;
    }
    a{
        text-decoration:none;
    }
    .detail-img{
        height:200px;
    }
    .search-box{
        width: 500px !important
    }
    .searching-image{
        height:150px
    }
    .cart-list-divider{
        border-bottom : 1px solid;
        margin-bottom : 20px ;
        padding-bottom :20px;
    }
</style>
</html>