@extends('layouts.app')


@section('content')

    

    <div class="container">
        <div class="panel panel-default">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
    @endif
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
                                        <li class="active"><a href="{{ action('PrivacyController@privacy') }}">Change visibility</a></li>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <strong>
                                            Username
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <li class="active"><a href="{{ action('PrivacyController@privacy') }}">Change visibility</a></li>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            Date of Birth
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <li class="active"><a href="{{ action('PrivacyController@privacy') }}">Change visibility</a></li>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


@endsection