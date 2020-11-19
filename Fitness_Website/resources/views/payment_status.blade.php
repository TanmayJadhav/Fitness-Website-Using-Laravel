<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <style>
        body {
            margin-top: 20px;
            background: #eee;
        }

        
    </style>


        <title>Payment Completed</title>
</head>

<body>

    <div class="jumbotron text-center">
        <h1 class="display-1">Thank You For Shopping!</h1><br>
        <p class="lead justify-content-center display-4"><strong>Payment Details</strong></p><br>
        <p>Customer Name : {{auth()->user()->name}}</p>
        <p>Customer Phone Number : {{auth()->user()->ph_number}}<p>
        <p>Customer Email ID : {{auth()->user()->email}}<p>
        <p>Order ID  : {{$response['ORDERID']}}<p>
        <!-- <p>Order ID  : <p> -->
        <hr>
        <p class="lead">
            <a class="btn btn-primary " href="/" role="button">Continue to homepage</a>
        </p>
    </div>


    <!-- <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="grid invoice">
                    <div class="grid-body">
                        <div class="invoice-title">
                            <div class="row">
                                <div class="col-xs-6">
                                    <img class="center" src="images\index\bestrong.png" alt="" height="70"
                                        style="background-color: #666666; ">
                                      
                                </div>
                            
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2>Invoice<br><br>
                                        <span class="small">Order Id {{$response["ORDERID"]}}</span></h2>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <address>
                                    <strong>Billed To:</strong><br>
                                    Name : {{auth()->user()->name}}<br>
                                    Phone Number : {{auth()->user()->ph_number}} <br>
                                    Email : {{auth()->user()->email}}<br>
                                </address>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <address>
                                    <strong>Payment Method:</strong><br>
                                    {{$response["PAYMENTMODE"]}} <br>
                                    Bank : {{$response["BANKNAME"]}}<br>
                                </address>
                            </div>
                            <div class="col-xs-6 text-right">
                                <address>
                                    <strong>Order Date:</strong><br>
                                   {{$response["TXNDATE"]}}
                                </address>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>ORDER SUMMARY</h3>
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="line">
                                            <td><strong>#</strong></td>
                                            <td class="text-center"><strong>PROJECT</strong></td>
                                            <td class="text-center"><strong>HRS</strong></td>
                                            <td class="text-right"><strong>RATE</strong></td>
                                            <td class="text-right"><strong>SUBTOTAL</strong></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><strong>Template Design</strong><br>A website template is a pre-designed
                                                webpage, or set of webpages, that anyone can modify with their own
                                                content and images to setup a website.</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">$75</td>
                                            <td class="text-right">$1,125.00</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><strong>Template Development</strong><br>Web development is a broad term
                                                for the work involved in developing a web site for the Internet (World
                                                Wide Web) or an intranet (a private network).</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">$75</td>
                                            <td class="text-right">$1,125.00</td>
                                        </tr>
                                        <tr class="line">
                                            <td>3</td>
                                            <td><strong>Testing</strong><br>Take measures to check the quality,
                                                performance, or reliability of (something), especially before putting it
                                                into widespread use or practice.</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">$75</td>
                                            <td class="text-right">$150.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"></td>
                                            <td class="text-right"><strong>Taxes</strong></td>
                                            <td class="text-right"><strong>N/A</strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                            </td>
                                            <td class="text-right"><strong>Total</strong></td>
                                            <td class="text-right"><strong>$2,400.00</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> -->
</body>

</html>