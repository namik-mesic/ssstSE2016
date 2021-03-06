<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <title>Currency converter</title>

    @yield('ajlahead')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name=”viewport” content=”width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1″/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
<div class="pozadina">
    <div class="container">

        <div class="navbar-header">
            <a class="navbar-brand">Currency converter</a>
            <div class="col-md-push-4">
                <MARQUEE class="marquee">The world's trusted currency authority!</MARQUEE>

            </div>
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

                    </ul>
                <li class="active"><a href="{{ action('ContactController@index') }}">Contact us</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

@yield('content')

<div class="clearfix"></div>
<div class="pomocni-div" style="display: block !important;"></div>
<footer class="navbar navbar-inverse navbar-fixed-bottom" >
    <span class="timed">Currency converter 2016</span>

    <?php
    use Carbon\Carbon;
        $current = Carbon::now();
        $current = new Carbon();

        echo $current->addHour()->toDayDateTimeString();

    ?>


</footer>


@yield('scripts')

</body>
</html>

<!-- This was written by Edis and Ajla -->