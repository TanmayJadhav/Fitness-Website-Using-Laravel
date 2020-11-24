<!DOCTYPE html>
<html>

<head>
    <title>Order Details</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <style>
        body {
            min-height: 100vh;
            background-size: cover;
            font-family: 'Lato', sans-serif;
            color: rgba(116, 116, 116, 0.667);
            background: linear-gradient(140deg, #fff, 50%, #ff7300da)
        }

        .container-fluid {
            margin-top: 200px
        }

        p {
            font-size: 14px;
            margin-bottom: 7px
        }

        .small {
            letter-spacing: 0.5px !important
        }

        .card-1 {
            box-shadow: 2px 2px 10px 0px rgb(17, 16, 17);
            width: 700px !important
        }

        hr {
            background-color: rgba(248, 248, 248, 0.667)
        }

        .bold {
            font-weight: 500
        }

        .change-color {
            color: #ff7300da !important
        }

        .card-2 {
            box-shadow: 1px 1px 3px 0px rgb(112, 115, 139)
        }

        .fa-circle.active {
            font-size: 8px;
            color: #AB47BC
        }

        .fa-circle {
            font-size: 8px;
            color: #aaa
        }

        .rounded {
            border-radius: 2.25rem !important
        }

        .progress-bar {
            background-color: #AB47BC !important
        }

        .progress {
            height: 5px !important;
            margin-bottom: 0
        }

        .invoice {
            position: relative;
            top: -70px
        }

        .Glasses {
            position: relative;
            top: -12px !important
        }

        .card-footer {
            background-color: #AB47BC;
            color: #fff
        }

        h2 {
            color: rgb(78, 0, 92);
            letter-spacing: 2px !important
        }

        .display-3 {
            font-weight: 500 !important
        }

        @media (max-width: 479px) {
            .invoice {
                position: relative;
                top: 7px
            }

            .border-line {
                border-right: 0px solid rgb(226, 206, 226) !important
            }
        }

        @media (max-width: 700px) {
            h2 {
                color: rgb(78, 0, 92);
                font-size: 17px
            }

            .display-3 {
                font-size: 28px;
                font-weight: 500 !important
            }
        }

        .card-footer small {
            letter-spacing: 7px !important;
            font-size: 12px
        }

        .border-line {
            border-right: 1px solid rgb(226, 206, 226)
        }
    </style>
</head>

<body>

    <div class="m-3">
        <a href="/" class="btn btn-success px-4 py-2" role="button" aria-pressed="true">Back</a>

    </div>
    <div class="container-fluid my-5 d-flex justify-content-center">
        <div class="card card-1">
            <div class="card-header bg-dark">
                <div class="media flex-sm-row flex-column-reverse justify-content-between ">
                    <div class="col my-auto">
                        <h4 class="mb-0 text-light">Thanks for your Order, <span class="change-color">{{auth()->user()->name}}</span> !</h4>
                    </div>
                    <div class="col-auto text-center my-0 pl-0 pt-sm-2 "> <img
                            class="img-fluid align-items-center mb-2 " src="images\index\bestrong.png"
                            width="115" height="115">
                    </div>
                </div>
            </div>
            @foreach($order as $order)
            <div class="card-body">
            
                <div class="row justify-content-between mb-3">
                    <div class="col-auto">
                        <h6 class="color-1 mb-0 change-color">Order Details</h6>
                    </div>

                </div>
                
                <div class="row">
                    <div class="col">
                        <div class="card card-2">
                            <div class="card-body">
                                <div class="media">
                                    <div class="sq align-self-center "> <img
                                            class="img-fluid my-auto align-self-center mr-2 mr-md-4 pl-0 p-0 m-0"
                                            src="{{ URL::to( $order->product_image) }}" width="135" height="135" /> </div>
                                    <div class="media-body my-auto text-right">
                                        <div class="row my-auto flex-column flex-md-row">
                                            <div class="col my-auto">
                                                <h6 class="mb-0">{{$order->product_name}}</h6>
                                            </div>

                                            <div class="col my-auto">
                                                <h6 class="mb-0">&#8377;{{$order->product_price}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="row mt-4">
                    <div class="col">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <p class="mb-1 text-dark"><b>Additional Details</b></p>
                            </div>
                            <div class="flex-sm-col text-right col">
                                <p class="mb-1"><b>Mobile Number</b></p>
                            </div>
                            <div class="flex-sm-col col-auto">
                                <p class="mb-1">{{$order->ph_number}}</p>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="flex-sm-col text-right col">
                                <p class="mb-1"> <b>Bank Name</b></p>
                            </div>
                            <div class="flex-sm-col col-auto">
                                <p class="mb-1">{{$order->bank_name}}</p>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="flex-sm-col text-right col">
                                <p class="mb-1"><b>Total </b></p>
                            </div>
                            <div class="flex-sm-col col-auto">
                                <p class="mb-1">&#8377;{{$order->product_price}}</p>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="flex-sm-col text-right col">
                                <p class="mb-1"><b>Delivery Charges</b></p>
                            </div>
                            <div class="flex-sm-col col-auto">
                                <p class="mb-1">Free</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row invoice ">
                    <div class="col">
                        <p class="mb-1"> Order ID : {{$order->order_id}}</p>
                        <p class="mb-1">Transaction ID : {{$order->txnid}}</p>
                        <p class="mb-1">Order Date: {{$order->order_date}}</p>
                    </div>
                </div> -->
            
                <div class="container my-5">
                    <div class="row">
                        <div class="col-md-7">
                            <p class="mb-1 text-dark"><b>Additional Details</b></p>
                            <p class="mb-1"><b> Order ID</b> : {{$order->order_id}}</p>
                            <p class="mb-1"><b> Transaction ID</b> : {{$order->txnid}}</p>
                            <p class="mb-1"><b>Order Date</b> {{$order->order_date}}</p>
                        </div>
                        <div class="col-md-5 mt-4">
                            <p class="mb-1"><b>Mobile Number</b> : {{$order->ph_number}}</p>
                            <p class="mb-1"> <b>Bank Name </b>: {{$order->bank_name}}</p>
                            <p class="mb-1"><b>Total</b> : &#8377;{{$order->product_price}} </p>
                            <p class="mb-1"><b>Delivery Charges</b> : Free</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</body>

</html>