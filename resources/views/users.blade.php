@extends('layouts.app')

@section('content')

    @if(count($users) == 0)

        <div class="col-md-6 alert-danger table-bordered center">
            <h3> Nothing matches! </h3>
        </div>
    @else

        @foreach($users as $user)
            <div class="col-md-6 alert-info table-bordered center">
                <h3><a href="/users/{{$user->id}}"> {{$user -> name}} </a></h3>
            </div>


        @endforeach
    @endif

@stop
