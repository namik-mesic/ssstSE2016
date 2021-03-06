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
                <form class="form-horizontal" method="post" action="{{url('/add-picture')}}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="row form-group">
                    <div class="col-xs-4" style="margin-left: 1cm">
                    <label>Edit your profile picture!</label>
                  <input type="file" name="picture" class="form-control"/>
                  </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-xs-4" style="margin-left: 1cm">
                  <input type="submit" class="form-control" value="Upload picture"/>
                  </div>
                  </div>
                </form>
            </div>
          </div>
        </div>
    </div>

@endsection
