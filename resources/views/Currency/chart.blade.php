@extends('main')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h4>Select a currency:</h4>
                <select id="baseSelect"
                        class="custom-select sources"></select> <br>
                <h4> Base currency: <span id="base_cur">EUR</span></h4>


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

            <div class="col-lg-6">
                <span class="loading">Loading .... </span>
                <div id="chart"></div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="{{ asset('js/chartscript.js') }}"></script>


@append
