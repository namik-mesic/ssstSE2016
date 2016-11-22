<html>
<html lang="en">
<head>
    <title>Currency converter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand">Currency converter</a>
        </div>
        <ul class="nav navbar-nav">

            <li class="active"><a href="{{ action('CurrencyController@index') }}">Home</a></li>
            <li class="active"><a href="{{ action('ChartController@index') }}">Chart</a></li>
            <li class="active"><a href="{{ action('HistoricalRatesController@index') }}">Historical rates</a></li>
            <li class="active"><a data-toggle="dropdown" href="{{ action('OfficesController@index') }}">Our offices
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">Office 1</a></li>
                <li><a href="#">Office 2</a></li>
                <li><a href="#">Office 3</a></li>
                </a>
            </li>
            </ul>
            </div>




    <img class="money" width=30 height="30" src= "{{ asset('money.png') }}"></li>
</nav>



<div style='margin-left:auto;margin-right:auto;width:290px;'>

    @include('layouts.display')

    @yield('content')

</div>



</body>
<style>


    .money{
        position: absolute;
        top:10px;
        left:700px;
    }
    .forma {
        color: #00001a;
        width: 500px;
        position: absolute;
        left: 150px;
        top: 150px;

    }

    body {
        font-family: "Century Gothic";
        font-size: 18px;
background-color: #ebebe0;

        /* background: #304352; /* fallback for old browsers */
        /*background: -webkit-linear-gradient(to left, #304352 , #d7d2cc); /* Chrome 10-25, Safari 5.1-6 */
       /* background: linear-gradient(to left, #304352 , #d7d2cc); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }

    .con {
        position: absolute;
        left: 200px;
    }

    #id {
        position: absolute;
        left: 120px;
    }

    #id1 {
        position: absolute;
        left: 70px;
    }
    .btn{
        background-color: black;

    }
    .btn:hover{
        color: black;
        background-color: inherit;
        border-color: black;
    }

</style>
<footer class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="container-fluid">
        <span>2016</span>
    </div>
</footer>
</html>