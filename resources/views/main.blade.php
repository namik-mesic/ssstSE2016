<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <title>Currency converter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name=”viewport” content=”width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1″ />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>


        .margin-top{
            margin-top:100px;
        }
        body {
            text-rendering: optimizeLegibility;
            color: #444;
            font-family: "Century Gothic";
            font-size: 18px;
            background: #fff;
        }

        .left {
            float: left;
            margin-left: 40px;
            width: 15%;
            text-align: center;
            margin-top: 50px;

        }

        #mytable {
            border-radius: 10px;
            float: left;
            text-align: center;
            min-width: 250px;
            padding: 10px;
            background: #474747;
            color: #fff;
            box-shadow: 10px 10px 5px #888888;
            font-size: 14px;
            margin-top: 50px;
            margin-left: 40px;
        }
        #mytable thead > tr > td {
            color: #fa8072;
            padding-bottom: 10px;
            text-decoration: underline;
        }
        #mytable tr {
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            border-color: #46637f;
        }
        #mytable tr:hover {
            cursor: pointer;
            opacity: 0.5;
        }

        .right {
            float: right;
            margin: 20px;
            width: 50%;
            height: 100%;
            position: relative;
            text-align: center;

        }

        .right.chart{
            text-align: center;
        }
        .loading{
            display:none;
        }



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

    <style>
        .alert{
            position:absolute;
            background-color: red;
            color:white;
            left:800px;
            top:200px;
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
</head>
<body>
<div>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand">Currency converter</a>
        </div>
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
                </a>
            </li>
             </ul>

        <li class="active"><a href="{{ action('ContactController@index') }}">Contact us</a></li>
            </div>

 </nav>
</div>



<div style='margin-left:auto;margin-right:auto;'>


    @yield('content')

</div>
<footer class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="container-fluid">
        <span>Currency converter 2016</span>
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@yield('scripts')
</body>
</html>