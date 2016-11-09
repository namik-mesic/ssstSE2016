@extends('main')
@section('content')

    <form action="{{ action('CurrencyController@process') }}" class="forma" name="converter_form" method="POST">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="amount">
                Amount
            </label>

            <input type="number" placeholder="Enter value..." name="amount" class="form-control">
        </div>

        <div class="form-group">
            <label for="from">
                From
            </label>

            <select name="from" id="from" class="form-control">
                @include('currency.currency_options')
            </select>
        </div>

        <div class="form-group">
            <label for="to">
                To
            </label>

            <select name="to" id="to" class="form-control">
                @include('currency.currency_options')
            </select>
        </div> <br>

        <button type="submit" class="btn btn-info btn-block">
            Convert
        </button>
    </form>

    @if(isset($calculatedAmount))

        @include('currency.amount')

    @endif

@endsection