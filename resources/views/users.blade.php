@extends('layouts.app')

@section('content')

    @if(empty($users))

        No users in the database!
    @else

        @foreach($users as $user)

             <h3> &nbsp {{$user -> name}} </h3>


         @endforeach
    @endif

@stop
