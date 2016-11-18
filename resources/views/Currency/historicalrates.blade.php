@extends('main')
@section('content')


    <form action="{{ action('CurrencyController@process') }}" class="forma" name="converter_form" method="POST">
        {!! csrf_field() !!}



        <div class="form-group">
            <label for="from">
                Select currency:
            </label>

            <select name="from" id="from" class="form-control">
                @include('currency.currency_options')
            </select>
        </div>
        <br>
        <label for="from">
            Select date:
        </label>

        <input type="date" class="form-control">

        </div>
        <br>
        <h5 style="color: red"> * Please select distinct currencies</h5>
        <button type="submit" class="btn btn-info btn-block">
            Show
        </button>
    </form>
