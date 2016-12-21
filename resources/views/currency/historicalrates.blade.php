@extends('main')
@section('content')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
        $(function() {
            $( "#datepicker" ).datepicker();
        });
    </script>
    <div class="col-lg-8 col-lg-push-2 margin-top">
        <form action="{{ action('HistoricalRatesController@process') }}" class="forma" name="converter_form" method="POST">
            {!! csrf_field() !!}



            <div class="form-group">
                <label for="from">Select currency:</label>
                <select name="curr" id="from" class="form-control" >
                    @include('currency.currency_options_hr')
                </select>
            </div>

            <div class="form-group">
                <label for="from">Date:</label>
                <input id="datepicker" type="date" class="form-control" name="date" placeholder="Enter date...">
            </div>

            <button type="submit" class="btn btn-info btn-block button">
                Show
            </button>

        </form>
    </div>
    @if(isset($historicalrate))

        <div class="col-lg-8 col-lg-push-2">

                @include('currency.hrate')

        </div>
    @endif

    @if (count($errors) > 0)
        <div class="row">
            <div class="col-md-8 col-md-push-2 margin-top alert" id="divtoBlink">
                <div class="alert" id="divtoBlink">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif
@endsection
<!--This document was written by Ajla-->
​