@extends('layouts.app')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"
      xmlns="http://www.w3.org/1999/html">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.3/css/bootstrap-colorpicker.min.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.3/js/bootstrap-colorpicker.min.js"></script>


@section('content')

    <div class="container">
        <div class="main"></div>
        <div class="sidebar"></div>
        <div class="clear"></div>
    </div>

    <div class="profile-color-block" style="background-color: {{ $user->color }}">
        <input class="clrpick" type="button" id="color"/>

        <script>

            $('#color').colorpicker({});

        </script></input>
    </div>
    <div class="col-md-6 center">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-condensed table-responsive table-user-information">
                    <tbody>
                    <tr>
                        <td>
                            <strong>
                                Name
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{ $user->name }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <strong>
                                Username
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{$user-> username}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                Date of Birth
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{$user->dob }}
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <strong>
                                Role
                            </strong>
                        </td>
                        <td class="text-primary">
                            d' boss
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                Email
                            </strong>
                        </td>
                        <td class="text-primary">
                            <a href="mailto: {{$user -> email}} ">{{$user->email }}</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                Created
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{$user -> created_at}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                Modified
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{$user -> updated_at}}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection