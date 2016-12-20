@extends('layouts.app')




@section('content')

    <div class="container">
        <a href="{{ action('PlaceController@create') }}" class="btn btn-primary" style="margin-bottom: 10px">
            Create Place
        </a>

        <table class="table table-bordered table-responsive">
            <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Place Name
                </th>
                <th>
                    Place Address
                </th>
                <th>
                    Place Coordinates
                </th>
                <th>
                    Place Type
                </th>
                <th>
                    Options
                </th>
            </tr>
            </thead>

            <tbody>
            @foreach ($places as $place)
                <tr>
                    <td>
                        {{ $place->id}}
                    </td>
                    <td>
                        {{$place->name}}
                    </td>
                    <td>
                        {{ $place->vicinity ? $place->vicinity : 'Not set'}}
                    </td>
                    <td>
                        {{$place->coordinates}}
                    </td>
                    <td>
                        {{ $place->type ? $place->type : 'Not set'}}
                    </td>
                    <td>
                        <a href="{{ action('PlaceController@edit', $place->id) }}" class="btn btn-success">
                            Edit
                        </a>

                        <form method="POST" action="{{ action('PlaceController@destroy', $place->id) }}" style="margin-top: 10px">
                            {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection