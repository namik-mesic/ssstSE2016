@extends('main')
@section('content')

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <form action="{{ action('CurrencyController@process') }}" class="forma" name="converter_form" method="POST">
        {!! csrf_field() !!}

            <div class="container">
            <div class="row">
                <div class="col-sm-4">


            Base currency: <span id="base_cur">EUR</span>

            <h4>Chose Currency:</h4>

                <div class="col-sm-4">
                    <div class="form-group">

            <select id="baseSelect" class="custom-select sources"></select>
                        </div>

            </div>
            </div>
        </div>

            </div>
</form>

        <div class="table-responsive">
        <table id="mytable" class="table">
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
            </div>
        <div class="col-sm-4">
        <div class="right">
            <h3 class="title"> Currency Exchange Rate Chart: <span></span></h3>
            <span class="loading">Loading .... </span>
            <div id="chart"></div>
        </div>
            </div>




@endsection

@section('scripts')

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="{{ asset('js/chartscript.js') }}"></script>


@append
