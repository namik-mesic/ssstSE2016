@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                Dashboard
            </div>

            <div class="panel-body">
                Welcome {{Auth::user() -> name}}, You are logged in!
            </div>
        </div>
    </div>

@endsection
