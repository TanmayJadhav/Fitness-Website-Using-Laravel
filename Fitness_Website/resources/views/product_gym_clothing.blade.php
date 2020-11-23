<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="bootstrap/boot/css/bootstrap.min.css" type="text/css"> -->
        <!-- <link rel="stylesheet" href="bootstrap-4.0.0/assets/css/docs.min.css" type="text/css"> -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

    <title>Gym Clothing</title>

    <style>
        
        .btn-group {
            width: 100%;
            border: 1px solid transparent;

            margin-top: 10px;
            margin-bottom: 20px;


        }

        .c {
            color: #fff;
            font-family: Montserrat, sans-serif;
        }

        .jumbotron {
            margin-top: 80px;
            background-color: #DCDCDC;
            color: #000000;
            text-align: center;
            font-family: Montserrat, sans-serif;
        }

        .Caption {
            text-align: center;
            font-family: Montserrat, sans-serif;
        }

        .thumbnail {
            display: block;
            padding: 4px;
            margin-bottom: 20px;
            line-height: 1.42857143;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            -webkit-transition: border .2s ease-in-out;


        }


        .footer {

            left: 0;
            bottom: 0;
            padding-top: 10px;
            padding-bottom: 20px;
            width: 100%;
            background-color: #101010;
            color: #9d9d9d;
            text-align: center;
        }

        .zoom:hover {
            -ms-transform: scale(1.2);
            /* IE 9 */
            -webkit-transform: scale(1.2);
            /* Safari 3-8 */
            transform: scale(1.06);
            color: rgb(230, 25, 25);
            /* background-color: rgba(255, 255, 255, 0.24); */
            box-shadow: 0 6px 8px 0 rgba(0, 0, 0, 0.5), 0 8px 20px 0 rgba(0, 0, 0, 0.5);
        }

        .zooms:hover {
            -ms-transform: scale(1.2);
            /* IE 9 */
            -webkit-transform: scale(1.2);
            /* Safari 3-8 */
            transform: scale(1.06);
            /* background-color: rgba(255, 255, 255, 0.24); */
            box-shadow: 0 6px 8px 0 rgba(0, 0, 0, 0.5), 0 8px 20px 0 rgba(0, 0, 0, 0.5);
        }

        .about-pic img {
            min-width: 100%;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .title {
            color: rgb(247, 104, 9);
            font-size: 18px;
        }

        .card h3 ,p{
            text-decoration: none;
            color: #000000;
        }
        
        
    </style>

    
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg bg-dark navbar-dark ">
    <a class="navbar-brand" href="/"><img src="images\index\bestrong.png" width="150px" height="60px"
        alt="Responsive image"></a>

    <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse"
      data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

   

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav py-1 ml-auto">

        <li class="nav-item active">
          <a class="nav-link px-3 zoom" href="/"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link px-3 zoom" href="fitness_blog"><i class="fab fa-blogger"></i> Blog</a>
        </li>


        <li class="nav-item active">
          <a class="nav-link px-3 zoom" href="product_nutrition"><i class="fas fa-shopping-bag"></i> Products</a>
        </li>


        @if (auth()->user())
        <li class="nav-item">
          <a class="nav-link trigger-btn px-3 zoom"  href="/logout"><i
              class="fas fa-sign-out-alt"></i>Logout</a>
        </li>
        @endif

        
      </ul>
    </div>
  </nav>

    <!-- Carousel -->

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images\index\c1.jpg" height="585px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Gym Equipment</h5>
                    
                </div>
            </div>
            <div class="carousel-item">
                <img src="images\index\c2.jpg" height="585px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Nutrition Products</h5>
                    
                </div>
            </div>
            <div class="carousel-item">
                <img src="images\index\c3.jpg" height="585px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Gym Accessories</h5>
                    
                </div>
            </div>
            <div class="carousel-item">
                <img src="images\index\c4.jpg" height="585px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Gym Wear</h5>
                    
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Buttons -->
    <div class="container-fluid">

<div class="row justify-content-md-center my-5">
    <div class="col col-lg-2">
        <a href="product_nutrition" class="btn btn-primary  px-5 my-2 mx-2 zooms">Nutritions</a>
    </div>
    <div class="col col-lg-2">
        <a href="product_gym_equipments" class="btn btn-danger  my-2 mx-1 zooms">Gym Equipment</a>
    </div>
    <div class="col col-lg-2">
        <a href="product_gym_accessories" class="btn btn-success px-4 my-2 mx-1 zooms">Gym Accessories</a>
    </div>
    <div class="col col-lg-2">
        <a href="product_gym_clothing" class="btn btn-warning px-4 my-2 mx-2 zooms">Gym Wear</a>
    </div>
</div>
</div>   


    
    <div class="container-fluid">
        <div class="row text-decoration-none">
            @foreach ($products as $product)
            <div class="col-md-3 col-6 my-3 mx-auto">
                <a href="http://127.0.0.1:8000/product_description/{{$product->id}}">
                    <div class="card text-center zooms" style="width: 100%;">
                        <img src="{{$product->image}}" height="270px" class="card-img-top" alt="">
                        <div class="card-body text-decoration-none">
                            <h3 class="text-decoration-none">{{$product->name}} </h3>
                            <p class="text-decoration-none">Price: Rs.{{$product->price}} </p>
                            <input type="submit" value="Details" class="btn btn-primary btn-block">
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>


    <div class="footer bg-dark footer-dark text-white">
        <h5>BeStrong @<span class="glyphicon glyphicon-copyright-mark"></span>2020. All Rights Reserved
            </span></h5>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>


</body>

</html>