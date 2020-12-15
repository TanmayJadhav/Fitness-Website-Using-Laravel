

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
        .pager button {
            color: white;
            background-color: rgb(170, 67, 49);
        }

        .button {
            transition-duration: 0.4s;
        }

        .button:hover {
            background-color: #ff5e00;
            color: white;
        }
    </style>

    <title>Cart</title>
</head>

<body>
    

    <nav class="navbar navbar-light bg-dark p-3 justify-content-center">
        <!-- <h1 class="navbar-brand mb-0 h1 text-white">Navbar</h1> -->
        <a class="navbar-brand" href="#"><img src="\images\index\bestrong.png" width="150px" height="60px"  alt="Responsive image"></a>
    </nav>


  
    <div class="m-3">
        <a href="/product_nutrition" class="btn btn-outline-success px-4 py-2" role="button" aria-pressed="true">Back</a>

    </div>
    <div class="container my-4 py-4">
        <div class="row featurette">
            
            <div class="col-md-5 order-md-1">
                <img src="{{ URL::to( $product_description->image) }}" width="400px" height="400px" />
            </div>
            <div class="col-md-7 order-md-2 mt-4">
                <h2 class="featurette-heading">{{$product_description->name}}</h2>
                <hr>
                <h5 class="lead mt-4">Description </h5>
                <p class="">{{$product_description->description}}</p>
                
                <h5 class="lead mt-4">Price: Rs.{{$product_description->price}} </h5><br>
      
                @if ($user_logged)
                <a href="http://127.0.0.1:8000/payment/{{$product_description->id}}" class="btn btn-warning my-5 px-4 py-2" role="button" aria-pressed="true">BUY NOW</a>
                @else
                <div class="alert alert-warning">
                Please Login To Buy This Product
                </div>
                
                @endif
            </div>
            
        </div>

    </div>
    </div>

    




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

   
</body>

</html>