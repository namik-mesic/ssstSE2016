@extends('main')
@section('content')

    <div class="col-lg-8 col-lg-push-2 margin-top">
        <h4>Select a currency:</h4>
        <select style="color: black; width: 160px; border-color: black" id="baseSelect" class="custom-select sources"></select> <br>
        <h4> Base currency: <span id="base_cur">EUR</span></h4>
    </div>

    <div class="col-lg-8 col-lg-push-2 margin-top">
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
    </div>


    <div class="col-lg-8 col-lg-push-4 klasa">
        <span class="loading" style="color: #00001a">Loading .... </span>
        <div id="chart"></div>
    </div>
@endsection
@section('scripts')

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="{{ asset('js/chartscript.js') }}"></script>


@append
