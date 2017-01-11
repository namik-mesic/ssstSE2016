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
                                    <!-- If the logged user views their own profile, they can see their name,
                                    otherwise if isNameHidden is null/1 info is public/private  - Dalila. -->

                                    <td class="text-primary">
                                        <li class="active"><a href="{{ action('UpdatePrivacyController@toggleNameHidden') }}">Change visibility</a></li>
                                    </td>
                                    <td>
                                        @if (Auth::user() -> isNameHidden == null)
                                            Public
                                        @else
                                            Private
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <strong>
                                            Date of Birth
                                        </strong>
                                    </td>
                                    <!-- If the logged user views their own profile, they can see their birth date,
                                    otherwise if isHidden is null/1 info is public/private  - Dalila. -->

                                    <td class="text-primary">
                                        <li class="active"><a href="{{ action('UpdateDobPrivacyController@toggleDobHidden') }}">Change visibility</a></li>
                                    </td>
                                    <td>
                                        @if (Auth::user() -> isHidden == null)
                                            Public
                                        @else
                                            Private
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <strong>
                                            Email
                                        </strong>
                                    </td>
                                    <!-- If the logged user views their own profile, they can see their email,
                                    otherwise if isEmailHidden is null/1 info is public/private  - Dalila. -->

                                    <td class="text-primary">
                                        <li class="active"><a href="{{ action('UpdateEmailPrivacyController@toggleEmailHidden') }}">Change visibility</a></li>
                                    </td>
                                    <td>
                                        @if (Auth::user() -> isEmailHidden == null)
                                            Public
                                        @else
                                            Private
                                        @endif
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


@endsection