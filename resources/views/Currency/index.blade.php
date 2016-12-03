@extends('main')
@section('content')


    <form action="{{ action('CurrencyController@process') }}" class="forma" name="converter_form" method="POST">
        {!! csrf_field() !!}


        <div class="form-group">
            <div class="row">
                <div class="col-sm-20">
            <label for="amount">Amount</label>
            <input type="number" placeholder="Enter value..." name="amount" class="form-control">
        </div>

        <div class="form-group">
            <label for="from">From</label>
            <select name="from" id="from" class="form-control">
                @include('currency.currency_options')
            </select>
        </div>

        <div class="form-group"><label for="to">To</label>
            <select name="to" id="to" class="form-control">
                @include('currency.currency_options')
            </select>
        </div>
        <br>
        <h5 style="color: red"> * Please select distinct currencies</h5>
         <button type="submit" class="btn btn-info btn-block">Convert</button>

                </div>
            </div>
    </form>
    <div class="row">
        <div class="col-sm-20">
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
</div>
        </div>
    @if(isset($calculatedAmount))

        <div class="row">
            <div class="col-sm-20">
        <h2> The calculated amount is </h2>

        @include('currency.amount')

    @endif
</div>
    </div>
@endsection