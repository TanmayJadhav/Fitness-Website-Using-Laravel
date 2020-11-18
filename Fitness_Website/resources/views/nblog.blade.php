<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Nutrition Blog </title>

  <!-- Bootstrap core CSS -->
 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">
  <style>
     html {
            overflow:scroll;
                width:100%;
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
     .nav-item{
          font-family:  'Black Han Sans';
             }

  </style>

</head>


<body>

<nav class="navbar sticky-top navbar-expand-lg bg-dark navbar-dark ">
    <a class="navbar-brand" href="#"><img src="images\index\bestrong.png" width="150px" height="60px"
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
          <a class="nav-link px-3 zoom" href="product_nutrition"><i class="fas fa-store"></i> Products</a>
        </li>

        
      </ul>
    </div>
</nav>


  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">BeStrong Blogs
          
        </h1>

        <!-- Blog Post -->
        @foreach ($blogs as $blog)
        <div class="card mb-4">
          <img class="card-img-top" src="{{$blog->image}}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{$blog->name}} </h2>
            <p class="card-text">{{$blog->brief}}</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on {{$blog->date}} by
            Be Strong Fitness Club
          </div>
        </div>
        @endforeach


        <!-- Pagination
        <ul class="pagination justify-content-center mb-4">
         
          <li class="page-item ">
            <a class="page-link" href="fblog.html">1 </a>
          </li>
          <li class="page-item ">
            <a class="page-link" href="nblog.html">2 </a>
          </li>
          <li class="page-item ">
            <a class="page-link" href="wlblog.html">next &rarr;</a>
          </li>
        </ul> -->

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class=" my-4">
            <h1>Other Topics</h1>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="fitness_blog">Fitness</a>
                  </li>
                  <li>
                    <a href="nutrition_blog">Nutrition</a>
                  </li>
                  <li>
                    <a href="weight_loss_blog">Weight Loss</a>
                  </li>
                </ul>
              </div>
              
            </div>
          </div>
        </div>

     

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">BeStrong Fitness club © 2020 by All Rights Reserved.</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  
</body>

</html>
