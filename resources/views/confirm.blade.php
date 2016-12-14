@extends('layouts.app')

@section('content')

    <form class="form-horizontal" method="post" action="/destroy">
        {{ csrf_field() }}
        {!! csrf_field() !!}
        <fieldset>

        {{ csrf_field() }}
        {!! csrf_field() !!}



        <!-- Form Name -->
            <legend>
                <center>Please confirm your identity :</center>
            </legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Password:</label>
                <div class="col-md-4">
                    <input id="password" name="password" type="password" class="form-control input-md"
                           value="{{ old('name') }}">
                </div>
            </div>

            @if (session('message'))
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
        @endif


        <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="Submit"></label>
                <div class="col-md-4">
                    <button id="Submit" name="Submit" class="btn btn-primary"> Delete</button>
                </div>
            </div>


        </fieldset>
    </form>


@endsection
