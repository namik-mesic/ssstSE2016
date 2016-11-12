@extends('layouts.app')

@section('content')

    @if(empty($users))

        No users in the database!
    @else

        @foreach($users as $user)
            <div class="col-md-6 alert-info table-bordered center">
                <h3><a href="#"> {{$user -> name}} </a></h3>
            </div>


        @endforeach
    @endif

@stop
