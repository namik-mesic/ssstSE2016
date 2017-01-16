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
            @if (session('notAuthorizedMessage'))
                <div class="alert alert-danger">
                    {{ session('notAuthorizedMessage') }}
                </div>
            @endif
        </div>
    </div>

@endsection
