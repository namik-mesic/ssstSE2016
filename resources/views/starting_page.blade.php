<!DOCTYPE html>

<html lang="en">

<head>
    <div class="col-xs-12"><hr></div>
    <title>Currency converter</title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

​

<div class="jumbotron text-center">

    <h1>Currency converter</h1>
    <p>
        The World's Trusted Currency Authority! </p>
    <h3><a href="{{ action('CurrencyController@index') }}" style="text-decoration: none; color: lightgrey; padding: 10px; background-color:#080808; border-radius: 5px;">Proceed to our website!</a> </h3></button>

</div>



<div class="container">

    <div class="row">

        <div class="col-sm-4">


            <img src= "{{ asset('amina.jpg') }}" class="img-circle" width="200" height="200">

        </div>

        <div class="col-sm-4">


            <img src= "{{ asset('edis.jpg') }}" class="img-circle" width="200" height="200">

        </div>

        <div class="col-sm-4">

            <img src= "{{ asset('ajla.jpg') }}"  class="img-circle" width="200" height="200">

        </div>


    </div>

    ​</div>


</body>

</html>
<!--This document was written by Ajla-->
​

