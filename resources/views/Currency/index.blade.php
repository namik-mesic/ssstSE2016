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
        <h5 style="color: red"> * Please select distinct currencies</h5>
         <button type="submit" class="btn btn-info btn-block">
            Convert
        </button>
    </form>

    @include('layouts.display')

    @if (count($errors) > 0)
        <div class="alert" id="divtoBlink">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(isset($calculatedAmount))


        <h2> The calculated amount is </h2>
        <style>
            h2{
                position: absolute;
                left:850px;
                top:220px;
            }
        </style>

        @include('currency.amount')

    @endif

@endsection