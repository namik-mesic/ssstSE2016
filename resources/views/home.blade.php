@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                Dashboard
            </div>

            <div class="panel-body">
                You are logged in!
            </div>
        </div>


        <div class="row">
            <div class="col-lg-6 col-md-9">
                <div class="alert alert-info">
                    A
                </div>
            </div>

            <div class="col-lg-3 col-md-3">
                <div class="alert alert-success">
                    B
                </div>
            </div>

            <div class="col-lg-3 col-md-12">
                <div class="alert alert-danger">
                    C
                </div>
            </div>
        </div>

        <div class="well">

            <form action="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Your Name*
                            </label>

                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="last_name">
                                Your Last Name*
                            </label>

                            <input type="text" class="form-control" name="last_name" id="last_name">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-md btn-success">
                    Submit
                </button>
            </form>
        </div>
    </div>

@endsection
