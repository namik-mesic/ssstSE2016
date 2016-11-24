@extends('main')
@section('content')

    <form action="{{ action('CurrencyController@process') }}" class="forma" name="converter_form" method="POST">
        {!! csrf_field() !!}



        <div class="form-group">
            <label for="from">
                Select currency:
            </label>

            <select name="curr" id="from" class="form-control">
                @include('currency.currency_options')
            </select>

        </div>
        <br>
        <label for="from">
            Select date:
        </label>

        <input type="date" name="date" class="form-control">

        </div>

        <br>
        <br>
        <button type="submit" class="btn btn-info btn-block">
            Show
        </button>
    </form>

    @if(isset($calculatedAmount))
        @include('currency.hrate')

    @endif


