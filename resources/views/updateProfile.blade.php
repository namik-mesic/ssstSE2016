@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                Update Profile
            </div>
            @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

            <div class="panel-body">
              <div class="row">
                <form class="form-horizontal" method="post" action="{{url('/confirm2')}}">
                  {{ csrf_field() }}
                  <div class="row form-group">
                    <div class="col-xs-4" style="margin-left: 1cm">
                    <label>Change your name!</label>
                  <input type="text" name="name" class="form-control" placeholder="{{$user->name}}" />
                  </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-xs-4" style="margin-left: 1cm">
                    <label>Change your email!</label>
                  <input type="text" name="email" class="form-control" placeholder="{{$user->email}}" />
                  </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-xs-4" style="margin-left: 1cm">
                    <label>Change your password!</label>
                  <input type="password" name="password" class="form-control" placeholder="" />
                  </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-xs-4" style="margin-left: 1cm">
                    <label>Repeat password!</label>
                  <input type="password" name="REpassword" class="form-control" placeholder="" />
                  </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-xs-4" style="margin-left: 1cm">

                  <input type="submit" name="submit" class="btn btn success" value="Submit" />
                  </div>
                  </div>
                </form>
            </div>
          </div>
        </div>
    </div>

@endsection
