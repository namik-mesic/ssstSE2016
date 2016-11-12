@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="main"></div>
        <div class="sidebar"></div>
        <div class="clear"></div>
    </div>

    <div class="profile-color-block" style="background-color: {{ Auth::user()->color ?: '#dd0000' }}">
        <br>
        {{Form::open(['url'=> 'users', 'method' => 'GET', 'class' => 'col-md-5'])}}

        &nbsp;&nbsp; {{Form::input('search','q', null, ['placeholder' => 'Search by name...'] )}}

        {{Form::close()}}
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
                            {{ Auth::user()->name }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <strong>
                                Username
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{Auth::user() -> username}}
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
                            {{Auth::user()->email }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                Created
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{Auth::user() -> created_at}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                Modified
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{Auth::user() -> updated_at}}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection