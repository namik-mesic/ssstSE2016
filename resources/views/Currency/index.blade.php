@extends('main')
@section('content')

    <div class="col-lg-8 col-lg-push-2 margin-top">
        <form action="{{ action('CurrencyController@process') }}" class="forma" name="converter_form" method="POST">
            {!! csrf_field() !!}


            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" class="form-control" placeholder="Enter value..." name="amount">
            </div>
            <div class="form-group">
                <label for="from">From:</label>
                <select name="from" id="from" class="form-control" >
                    @include('currency.currency_options')
                </select>
            </div>

            <div class="form-group">
                <label for="to">To:</label>
                <select name="to" id="from" class="form-control">
                    @include('currency.currency_options')
                </select>
            </div>

            <button type="submit" class="btn btn-info btn-block button">Convert</button>
        </form>
    </div>

    @include('layouts.display')
    <div class="col-lg-8 col-lg-push-2 margin-top alert" id="divtoBlink">
        @if (count($errors) > 0)
            <div class="alert" id="divtoBlink">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    </div>
    @endif

    <div class="col-lg-8 col-lg-push-5 margin-t">
        @if(isset($calculatedAmount))

            <h2> The calculated amount is </h2>
            <img class="money" width=50 height="50" src= "{{ asset('coin.gif') }}">

            @include('currency.amount')

        @endif
    </div>
@endsection