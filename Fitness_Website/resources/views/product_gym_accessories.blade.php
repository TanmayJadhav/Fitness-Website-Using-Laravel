<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/boot/css/bootstrap.min.css" type="text/css">
    <link rel ="stylesheet" href="bootstrap-4.0.0/assets/css/docs.min.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <title>Document</title>
    <style>
    
    .btn-group{
        width: 100%;
        border: 1px solid transparent;
      
        margin-top: 10px;
        margin-bottom: 20px;


    }
    .c{
        color: #fff;
        font-family: Montserrat, sans-serif;
    }
    .jumbotron{
        margin-top: 80px;
        background-color:#DCDCDC;
        color: #000000;
        text-align: center;
        font-family: Montserrat, sans-serif;
    }
    .Caption{
        text-align: center;
        font-family: Montserrat, sans-serif;
    }
    .thumbnail{
        display: block;
        padding: 4px;
        margin-bottom: 20px;
        line-height: 1.42857143;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        -webkit-transition: border .2s ease-in-out;
        
            
    }
   
  
    .footer{
            
            left: 0;
            bottom: 0;
            padding-top: 10px;
            padding-bottom: 20px;
            width: 100%;
            background-color: #101010;
            color: #9d9d9d;
            text-align: center;
        }
    </style>
</head>
<body >
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header ">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#myPage" class="navbar-brand "><i class="fas fa-dumbbell " >  Be Fit</i></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a class="c" href=""><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a class="c"  href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li><a class="c"  href="#"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a class="c"  href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                    <li class="dropdown">
                   
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bars"></i>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="about.php">About</a></br>
                                        <a class="dropdown-item" href="contact.php">Contact US</a>
                
                                    </div>
                                   
                                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>
    
    
    
        <div class="container-1">
            <div class="jumbotron">
                <h1>Welcome to our shop</h1>
                <p>Bootstrap is the most popular HTML, CSS...</p>
              </div>
              
                <div class="btn-group btn-group-justified">
                  <a href="product_nutrition" class="btn btn-warning"><i class="fas fa-nutritionix ">Nutrition</i></a>
                  <a href="product_gym_equipments" class="btn btn-primary"><i class="fas fa-nutritionix ">Gym Equipment</i></a>
                  <a href="product_gym_accessories" class="btn btn-danger"><i class="fas fa-nutritionix ">Gym Accessories</i></a>
                  <a href="product_gym_clothing" class="btn btn-success"><i class="fas fa-nutritionix ">Gym Clothing</i></a>

                </div>
              
                <div class="container-2">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img src="img/a1.jpg" alt="Responsive image">
                                <div class="Caption">
                                    <h3>Combo of FCB Leather Bag </h3>
                                    <p>Price: Rs.670.00 </p>
                                    <input type="submit" value="Add to cart" class="btn btn-primary btn-block">
                                </div>
                            </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/a2.jpg" alt="Responsive image">
                            <div class="Caption">
                                <h3>Strap With Palm </h3>
                                <p>Price: Rs.299.00 </p>
                                <input type="submit" value="Add to cart" class="btn btn-primary btn-block">
                            </div>
                        </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/a3.jpg" alt="Responsive image">
                        <div class="Caption">
                            <h3>Grip Handle </h3>
                            <p>Price: Rs.450.00 </p>
                            <input type="submit" value="Add to cart" class="btn btn-primary btn-block">
                        </div>
                    </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/a4.jpg" alt="Responsive image">
                    <div class="Caption">
                        <h3>Nivia 11041 Thumb Wrist Support </h3>
                        <p>Price: Rs.176.00 </p>
                        <input type="submit" value="Add to cart" class="btn btn-primary btn-block">
                    </div>
                </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="img/a5.jpg" alt="Responsive image">
                <div class="Caption">
                    <h3>Duffels Gym Bag </h3>
                    <p>Price: Rs.345.00 </p>
                    <input type="submit" value="Add to cart" class="btn btn-primary btn-block">
                </div>
            </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
            <img src="img/a6.jpg" alt="Responsive image">
            <div class="Caption">
                <h3>KObo WTA Gym support </h3>
                <p>Price: Rs.380.00 </p>
                <input type="submit" value="Add to cart" class="btn btn-primary btn-block">
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
            <img src="img/a7.jpg" alt="Responsive image">
            <div class="Caption">
                <h3>KOBO leather Gloves </h3>
                <p>Price: Rs.270.00 </p>
                <input type="submit" value="Add to cart" class="btn btn-primary btn-block">
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
            <img src="img/a8.jpg" alt="Responsive image">
            <div class="Caption">
                <h3>FitKit Bottle Shaker 700ml </h3>
                <p>Price: Rs.180.00 </p>
                <input type="submit" value="Add to cart" class="btn btn-primary btn-block">
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
            <img src="img/a9.jpg" alt="Responsive image">
            <div class="Caption">
                <h3>APRDO EVA waist belt</h3>
                <p>Price: Rs.499.00 </p>
                <input type="submit" value="Add to cart" class="btn btn-primary btn-block">
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
            <img src="img/a10.jpg" alt="Responsive image">
            <div class="Caption">
                <h3>Xtrim dura Belt </h3>
                <p>Price: Rs.500.00 </p>
                <input type="submit" value="Add to cart" class="btn btn-primary btn-block">
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
            <img src="img/a11.jpg" alt="Responsive image">
            <div class="Caption">
                <h3>Gocart Tactical Gloves </h3>
                <p>Price: Rs.399.00 </p>
                <input type="submit" value="Add to cart" class="btn btn-primary btn-block">
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
            <img src="img/a12.jpg" alt="Responsive image">
            <div class="Caption">
                <h3>Izoo Latex Ball </h3>
                <p>Price: Rs.699.00 </p>
                <input type="submit" value="Add to cart" class="btn btn-primary btn-block">
            </div>
        </div>
    </div>
    
                    </div>
                    </div>
                <div class="footer bg-dark footer-dark">
                    
                        <p>Copyright <span class="glyphicon glyphicon-copyright-mark"></span> Lifestyle Store. All Rights Reserved and Contact US: +91 90000 00000</span></p>
                    </div>
               
            </body>
            </html>
            
               