@extends('main')
@section('content')
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
                <input type="date" class="form-control" name="date">
            </div>

            <button type="submit" class="btn btn-info btn-block button">
                Show
            </button>

        </form>
    </div>
    @if(isset($historicalrate))

        <div class="col-lg-8 col-lg-push-2 margin-topp">
            <div class="table-responsive" id="mytable" style="width: 200px; height: 200px; font-family:'Century Gothic'; font-size: 5px;">


                @include('currency.hrate')


            </div>
        </div>
    @endif
@endsection