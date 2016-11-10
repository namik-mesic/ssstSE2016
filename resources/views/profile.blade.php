@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="main"></div>
        <div class="sidebar"></div>
        <div class="clear"></div>
    </div>

    <div class="profile-color-block" style="background-color: {{ Auth::user()->color ?: '#dd0000' }}">
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
                            Lorem
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                Lastname
                            </strong>
                        </td>
                        <td class="text-primary">
                            Ipsum
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <strong>
                                Username
                            </strong>
                        </td>
                        <td class="text-primary">
                            LtotheP
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
                            noreply@email.com
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                created
                            </strong>
                        </td>
                        <td class="text-primary">
                            1.1.0.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                                Modified
                            </strong>
                        </td>
                        <td class="text-primary">
                            1.1.0. 22:00:00
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection