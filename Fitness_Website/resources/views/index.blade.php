<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">


  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  



  <title>BeStrong</title>
  <style>
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

    .form-control {
      border: none;
      border-radius: 20px;
      background: rgba(165, 147, 69, 0.075);
      box-shadow: 0px 1px 1px 1px rgba(0, 0, 0, 0.2)
    }

    .container1 img {
      border: 2px solid transparent;
      margin-right: 1000px;
      padding-top: 5px;
      padding-left: 70px;
      width: 100%;
      height: 100%;
      padding-bottom: 50px;



    }

    .container1 h2 {
      font-family: 'Goblin One';
      text-align: center;
    }

    .follow {
      padding-top: 60px;
      padding-bottom: 60px;
      background-color: #ffffff;

    }

    .wrapper {
      text-align: center;
      font-family: 'Goblin One';
      font-size: 12px;
    }

    .follow .fab {
      padding: 1rem;
      margin: .5rem;
      font-size: 2.8rem;
      color: red;
    }

    .fab:hover {
      -ms-transform: scale(1.2);
      /* IE 9 */
      -webkit-transform: scale(1.2);
      /* Safari 3-8 */
      transform: scale(1.06);
      color: red;
      /* background-color: rgba(255, 255, 255, 0.24); */
      box-shadow: 0 6px 8px 0 rgba(0, 0, 0, 0.5), 0 8px 20px 0 rgba(0, 0, 0, 0.5);
  </style>
</head>

<body>
  @if (session('alert'))
      <div class="alert alert-success">
          {{ session('alert') }}
      </div>
  @endif

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
          <a class="nav-link px-3 zoom" href="#"><i class="fas fa-address-card"></i> About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link trigger-btn px-3 zoom" data-toggle="modal" href="#myModal"><i
              class="fas fa-sign-in-alt"></i> Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link trigger-btn px-3 zoom" data-toggle="modal" href="#myModal1"><i
              class="fas fa-sign-in-alt"></i> SignUp</a>
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


  <!-- Login Modal -->
  <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="..." aria-hidden="true">
    <div class="modal-dialog modal-login modal-dialog-centered">
      <div class="modal-content">
        <form action='/login' method="post">
          @csrf
          <div class="modal-header">
            <h4 class="modal-title">Login</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="email" required="required">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password" required="required">
            </div>
            <div class="justify-content-between">
              <div class="clearfix">
                <a class="float-right" data-toggle="modal" data-target="#myModal2" data-dismiss="modal"><small>Forgot
                    Password?</small></a>
              </div>
            </div>
          </div>
          

          <!-- <span class="my-4" style="margin: 0 210px;">
                    <button type="submit" class="btn btn-primary mx-auto">Log in</button>
                </span> -->

          <div class="modal-footer justify-content-between">
            <input type="submit" class="btn btn-primary" value="Login">
            <div class="clearfix">
              <a class="float-right" data-toggle="modal" data-target="#myModal1" data-dismiss="modal"><small>New User ?
                  SignUp</small></a>
            </div>
          </div>


        </form>
      </div>
    </div>
  </div>
  <!-- Sign up Modal -->
  <div id="myModal1" class="modal fade">
    <div class="modal-dialog modal-login modal-dialog-centered">
      <div class="modal-content">
        <form action='/register' method="post">
          @csrf
          <div class="modal-header">
            <h4 class="modal-title">Sign Up</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">

            <div class="form-group">
              <input type="text" class="form-control" placeholder="Username" required="required" id="username"
                name="username">
            </div>

            <!-- <div class="form-group">
                        <input type="text" class="form-control" placeholder="Last name">
                    </div> -->

            <div class="form-group">
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email"
                required="required" name="email">
              <!-- <small id="emailHelp" class="form-text text-muted">A password will be sent to your email
                            address.</small> -->
            </div>

            <div class="form-group">
              <input type="number" class="form-control" id="number" aria-describedby="number" placeholder="Phone Number"
                required="required" name="ph_number">
              
            </div>

            <div class="form-group">
              <div class="clearfix">
                <!-- <label>Password</label> -->
                <!-- <a href="#" class="float-right text-muted"><small>Forgot?</small></a> -->
              </div>
              <input type="password" class="form-control" required="required" required="required" id="password1"
                name="password1" placeholder="Password">
            </div>

            <div class="form-group">
              <input type="password" class="form-control" required="required" placeholder="Confirm Password"
                name="password2" name="password2">
            </div>

          </div>
          <div class="modal-footer justify-content-between">
            <input type="submit" class="btn btn-primary" value="SignUp">
            <div class="clearfix">
              <a class="float-right" data-toggle="modal" data-target="#myModal" data-dismiss="modal"><small>Already
                  registered ? Login</small></a>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>


  <!-- Forgot Password Modal -->
  <div id="myModal2" class="modal">
    <div class="modal-dialog modal-login modal-dialog-centered">
      <div class="modal-content">
        <form action="/resetpassword" method="POST">
          @csrf
          
          <div class="modal-header">
            <h4 class="modal-title"> Forgot Password </h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">

            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" required="required" name="email" aria-describedby="emailHelp"
                placeholder="Email">
              
            </div>


            <div class="form-group">
              <input type="number" class="form-control" id="exampleInputEmail1" required="required" name="number" aria-describedby="emailHelp"
                placeholder="Mobile Number">
              
            </div>



            <div class="form-group">
              <input type="password" class="form-control" placeholder="New Password" name="new_password">
            </div>


            

          </div>

          <div class="modal-footer justify-content-between">
            <input type="submit" class="btn btn-primary" value="Submit">
            <button type=button class="btn btn-outline-danger" data-toggle="modal" data-target="#myModal"
              data-dismiss="modal"> Cancel</button>
          </div>

        </form>
      </div>
    </div>
  </div>

  <!-- Carousel -->

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images\index\gym2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images\index\gym2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images\index\gym2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
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



  <div class="jumbotron">
    <div class="container my-4 ">
      <div class="row featurette">
        <div class="col-md-6 order-md-2 px-4">
          <h1 class="featurette-heading text-center"><strong> Story About Us</strong></h1>
          <p class="lead mt-4 text-dark">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis est, corrupti
            harum laudantium obcaecati, perspiciatis nemo cupiditate distinctio. Eos iure qui ex corporis rerum
            reiciendis
            officia tempora reprehenderit obcaecati architecto voluptatum delectus, consequuntur facere quibusdam. Lorem
            ipsum, dolor sit amet consectetur adipisicing elit. Aut hic non excepturi debitis modi dolor optio sequi,
            facilis cum magni!</p>
          <button type="button" class="btn btn-success btn-lg">Read More »</button>

        </div>
        <div class="col-md-6 order-md-1">
          <img class="featurette-image img-fluid mx-auto" data-src="holder.js/560x360/auto" alt="500x500"
            src="images\index\gym3.jpg" data-holder-rendered="true" style = "width: 560px; height: 360px">
        </div>
      </div>
    </div>
  </div>


  <!-- Services -->

  <div class="container">
    <div class="row text-decoration-none">

      <div class="col-md-4 my-3">
        <a href="#">
          <div class="card text-center zoom" style="width: 100%;">
            <img src="images\index\blog.jpg" class="card-img-top" style="height: 300px;" alt="Blog">
            <div class="card-body text-decoration-none">
              <h5 class="card-title text-success text-decoration-none">Blog</h5>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4 my-3">
        <a href="#">
          <div class="card text-center zoom" style="width: 100%;">
            <img src="images\index\service1.png" class="card-img-top" style="height: 300px;" alt="Service">
            <div class="card-body">
              <h5 class="card-title text-danger">Service</h5>
            </div>
          </div>
      </div>
      </a>
      <div class="col-md-4 my-3">
        <a href="product_gym_equipments">
          <div class="card text-center zoom" style="width: 100%;">
            <img src="images\index\products.jpg" class="card-img-top" style="height: 300px;" alt="Products">
            <div class="card-body">
              <h5 class="card-title text-primary">Products</h5>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>



  <!-- Jumbotron Expert Trainers -->
  <div class="jumbotron my-0">
    <div class="container">
      <h1 class="text-center">Our Team</h1>
      <div class="container">
        <div class="row">


          <div class="col-md-4">

            <div class="card testimonial-card mt-2 mb-3">

              <!-- Background color -->
              <div class="card-up aqua-gradient"></div>

              <!-- Avatar -->
              <div class="avatar mx-auto white">
                <img src="images\index\avatar.png"
                  class="rounded-circle img-responsive" alt="woman avatar">
              </div>

              <!-- Content -->
              <div class="card-body">
                <!-- Name -->
                <h4 class="card-title font-weight-bold">Avdhut Shinde</h4>
                <hr>
                <!-- Quotation -->
                <p><i class="fas fa-quote-left"></i> Front-End Developer</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">

            <div class="card testimonial-card mt-2 mb-3">

              <!-- Background color -->
              <div class="card-up aqua-gradient"></div>

              <!-- Avatar -->
              <div class="avatar mx-auto white">
                <img src="images\index\avatar.png"
                  class="rounded-circle img-responsive" alt="woman avatar">
              </div>

              <!-- Content -->
              <div class="card-body">
                <!-- Name -->
                <h4 class="card-title font-weight-bold"> Tanmay Jadhav</h4>
                <hr>
                <!-- Quotation -->
                <p><i class="fas fa-quote-left"></i> Back-End Developer</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">

            <div class="card testimonial-card mt-2 mb-3">

              <!-- Background color -->
              <div class="card-up aqua-gradient"></div>

              <!-- Avatar -->
              <div class="avatar mx-auto white">
                <img src=" images\index\avatar.png"
                  class="rounded-circle img-responsive" alt="woman avatar">
              </div>

              <!-- Content -->
              <div class="card-body">
                <!-- Name -->
                <h4 class="card-title font-weight-bold"> Akshay Dhaygude</h4>
                <hr>
                <!-- Quotation -->
                <p><i class="fas fa-quote-left"></i> Front-End Developer</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


  <section class="follow container-fluid">


    <div class="wrapper">
      <h2 class="mbr-fonts-style align-center mbr-light display-2">
        Follow Us
      </h2>
      <div class="icon-list">
        <a href="#" target="_blank"><i class="fab fa-youtube"></i> </a>
        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
        <a href="#" target="_blank"><i class="fab fa-google-plus"></i></a>

      </div>
    </div>

  </section>

  <!-- Footer -->

  <div class="container-fluid bg-dark text-white">
    <!-- <hr style="color: white;"> -->
    <div class="text-center text-light px-4 py-2">
      <p>Gym © 2020 by All Rights Reserved.</p>
    </div>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>