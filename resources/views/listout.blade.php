@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <table style="width:100%">
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Date of birth</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->dob}}</td>
                            <td>{{$user->email}}</td>
                            <td>Edit | Delete</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection
