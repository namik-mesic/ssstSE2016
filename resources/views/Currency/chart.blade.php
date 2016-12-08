@extends('main')
@section('content')

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <form action="{{ action('CurrencyController@process') }}" class="forma" name="converter_form" method="POST" id="fr">
        {!! csrf_field() !!}

    <div class="cl">


            <h4>Chose Currency:</h4>
        <select id="baseSelect" class="custom-select sources"></select> <br>
        Base currency: <span id="base_cur">EUR</span>



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


            <span class="loading">Loading .... </span>
            <div id="chart"></div>



<style>
    .cl{
        position:absolute;
        left:-50px;
        top:-50px;
    }
    .table-responsive{
        position: absolute;
        left:100px;
        top:220px;
        width: 500px;
        height: 400px;
    }
    #chart{
        position: absolute;
        top:200px;
        left:700px;
           }

</style>

@endsection

@section('scripts')

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="{{ asset('js/chartscript.js') }}"></script>


@append
