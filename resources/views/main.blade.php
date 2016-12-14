<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <title>Currency converter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name=”viewport” content=”width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1″/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>

        .alert {
            color: #00001a;
        }

        .form-group {
            color: #00001a;
        }

        .pozadina {
            background-color: #00001a;
            font-size: 20px;
        }

        body {
            background-color: silver;
            color: white;
            font-family: "Century Gothic";
            font-size: 20px;
        }

        .button {
            background-color: black;

        }

        .button:hover {
            color: black;
            background-color: white;
            border-color: black;
        }

        .form-control {
            border-color: black;

        }

        h4 {
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

        .table-responsive {
            width: 200px;
            height: 400px;
        }

        .loading {
            display: none;

        }

    </style>

</head>

<body>
<div class="pozadina" style="margin-bottom: 30px">
    <div class="container">

        <div class="navbar-header">
            <a style="color: silver; font-size: 30px;" class="navbar-brand">Currency converter</a>
        </div>
        <div class="page-header">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ action('CurrencyController@index') }}">Home</a></li>
                <li class="active"><a href="{{ action('ChartController@index') }}">Charts</a></li>
                <li class="active"><a href="{{ action('HistoricalRatesController@index') }}">Historical rates</a></li>
                <li class="active"><a href="{{ action('LiveRatesController@index') }}">Live rates</a></li>
                <li class="active"><a data-toggle="dropdown" href="#">Our offices
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ action('OfficesController@index') }}">Office 1</a></li>
                        <li><a href="{{ action('OfficesController@index1') }}">Office 2</a></li>
                        <li><a href="{{ action('OfficesController@index2') }}">Office 3</a></li>

                        </li>
                    </ul>
                <li class="active"><a href="{{ action('ContactController@index') }}">Contact us</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

@yield('content')

<footer style="background-color: #00001a;" class="navbar navbar-inverse navbar-fixed-bottom">
    <span style="color: white;">Currency converter 2016</span>
</footer>

@yield('scripts')

</body>
</html>

