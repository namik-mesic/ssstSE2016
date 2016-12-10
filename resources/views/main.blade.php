<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <title>Currency converter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name=”viewport” content=”width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1″ />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style>

    .klasa {
        float:left;
        padding:8px;
        max-width: 200px;
        left: -400px;
        top:100px;

    }
    .margin-t{
        top:-30px;
    }
    .alert{
        color: #00001a;
    }
    .form-group{
        color: #00001a;
    }
    .margin-top{
        top:50px;
    }
    .margin-topp{
        top:100px;
    }
    .container{
        background-color: #00001a;
        width: 100%;
        font-size: 20px;

    }
    body{
        background-color: silver;
        color:white;
        font-family: "Century Gothic";
        font-size: 20px;
    }
    .forma{
        width: 300px;

    }
    .button{
        background-color:black;

    }
    .button:hover{
        color:black;
        background-color: white;
        border-color: black;
    }
    .form-control{
        border-color: black;

    }
    h4{
        color: black;
    }
    #mytable {
        border-radius: 10px;
        text-align: center;
        background: #474747;
        color: #fff;
        box-shadow: 10px 10px 5px #888888;
        font-size: 14px;

    }
    #mytable thead > tr > td {
        color: #fa8072;

    }

    #mytable tr:hover {
        cursor: pointer;
        opacity: 0.5;
    }
    .table-responsive{
        width: 200px;
        height: 400px;
    }
    .loading{
        display:none;

    }

</style>

<body>
<div class="container">
    <div class="page-header">
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{ action('CurrencyController@index') }}">Home</a></li>
            <li class="active"><a href="{{ action('ChartController@index') }}">Charts</a></li>
            <li class="active"><a href="{{ action('HistoricalRatesController@index') }}">Historical rates</a></li>
            <li class="active"><a href="{{ action('LiveRatesController@index') }}">Live rates</a></li>
            <li class="active"><a data-toggle="dropdown" href="#">Our offices
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="{{ action('OfficesController@index') }}">Office 1</a></li>
                        <li><a href="{{ action('OfficesController@index1') }}">Office 2</a></li>
                        <li><a href="{{ action('OfficesController@index2') }}">Office 3</a></li>

                        </li>
                    </ul>
            <li class="active"><a href="{{ action('ContactController@index') }}">Contact us</a></li>
            <li class="active"><img class="money" width=50 height="50" src= "{{ asset('coin.gif') }}"></li>
            <li class="active"><img class="money" width=50 height="50" src= "{{ asset('coin.gif') }}"></li>
    </div>
</div>

@yield('content')

<footer style="background-color: #00001a;" class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="container-fluid">
        <span style="color: white;">Currency converter 2016</span>
    </div>
</footer>

@yield('scripts')

</body>
</html>