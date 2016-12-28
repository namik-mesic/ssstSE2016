@extends('layouts.app')


@section('content')
    @if($user -> isAdmin())
<div class="col-md-5">
    <table>
        @foreach($users as $user)
            <tr>
                <td>{{$user -> name}}</td>
                <td>{{$user -> email}}</td>
                <td>{{$user -> username}}</td>
            </tr>
        @endforeach
    </table>
</div>
    @endif
@stop
