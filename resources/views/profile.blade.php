<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"
      xmlns="http://www.w3.org/1999/html">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<!--
--CSS that is causing a problem with the dropdown menu
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
-->

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.3/css/bootstrap-colorpicker.min.css"
      rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.3/js/bootstrap-colorpicker.min.js"></script>

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="main"></div>
        <div class="sidebar"></div>
        <div class="clear"></div>
    </div>
    <div class="profile-color-block" style="background-color: {{ $user->color }}">
        <!-- Checks if the currently logged in user is on his / hers profile page-->
        @if(Auth::user() -> username == $user['username'])
            <form action="{{ url('/profile') }}" method="POST">

                {{ csrf_field() }}

                <label class="clrpick">
                    <input class="color" type="button" id="color"/>

                    <!--
                    <button class="color" type="button" id="color">
                        <span class="glyphicon glyphicon-adjust"></span>
                    </button>
                       -->

                    <script>

                        $('#color').colorpicker({}).on('hidePicker', function (event) {

                            $('.profile-color-block').css('background', event.color.toHex());
                            /**
                             * Server generated POST request called AJAX
                             * that sends the token and the color as a POST
                             * request -Edim
                             */
                            $.ajax({
                                type: "POST",
                                url: 'profile',
                                data: {
                                    color: event.color.toHex(),
                                    _token: '{{ csrf_token() }}'
                                }
                            });

                        });


                    </script>
                </label>
            </form>
        @endif
    </div>

    <img src="{{url($user->imgPath)}}" alt="" style="height: 150px; width: 150px; float: left; border-radius: 50%; margin-left: 1cm; margin-top: 0.5cm">

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
                            @if ($user->isHidden)
                                This information is private
                            @elseif ($user->isHidden == null)
                                {{$user->dob }}
                            @endif
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <strong>
                                Role
                            </strong>
                        </td>
                        <td class="text-primary">
                            @if(Auth::user()->isAdmin == 1)
                                Admin
                            @else
                                 Member
                            @endif
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
                        <td></td>
                        <td>
                            <button type="button">Change privacy</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
