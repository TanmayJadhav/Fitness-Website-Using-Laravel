<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Payment Completed</title>
</head>
<body>
    <h1>Thank You For Purchasing From FitWorld.Have a Good Day</h1>
    <!-- @foreach ($response  as $side=>$direc)
    <h1>{{ $side}}=>{{$direc}}</h1>   
    @endforeach -->
    <h1>{{$response['ORDERID']}}</h1>
    
</body>
</html>