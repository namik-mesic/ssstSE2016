@extends('layouts.app')

@section('content')

    @if(empty($users))

        No users in the database!
    @endif
    @else

        @foreach($users as $user)

             <h3>{{$user -> name}} </h3>


         @endforeach

@stop
