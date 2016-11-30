@extends('main')
@section('content')

    <form action="{{ action('CurrencyController@process') }}" class="forma" name="converter_form" method="POST">
        {!! csrf_field() !!}

        <div class="left">
            <h3> Base Currency: <span id="base_cur">EUR</span></h3>
            <h3>
            </h3><h4>Change Currency:</h4>

            <select id="baseSelect" class="custom-select sources"></select>
        </div>

        <table id="mytable">
            <thead>
            <tr>
                <td> Currency</td>
                <td> Rate</td>
            </tr>
            </thead>
            <tbody>
            <tr></tr>
            </tbody>
        </table>

        <div class="right">
            <h3 class="title"> Currency Exchange Rate Chart: <span></span></h3>
            <span class="loading">Loading .... </span>
            <div id="chart"></div>
        </div>
    </form>

@endsection

@section('scripts')

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="{{ asset('js/chartscript.js') }}"></script>


@append