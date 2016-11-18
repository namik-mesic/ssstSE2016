@extends('main')
@section('content')

    <form action="{{ action('CurrencyController@process') }}" class="forma" name="converter_form" method="POST">
        {!! csrf_field() !!}



        <div class="form-group">
            <label for="from">
                Select one currency:
            </label>

            <select name="from" id="from" class="form-control">
                @include('currency.currency_options')
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="to">
                Select another currency:
            </label>

            <select name="to" id="to" class="form-control">
                @include('currency.currency_options')
            </select>
        </div> <br>
        <br>
        <h5 style="color: red"> * Please select distinct currencies</h5>
        <button type="submit" class="btn btn-info btn-block">
            Show graph
        </button>
    </form>
