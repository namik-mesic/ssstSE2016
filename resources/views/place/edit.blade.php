@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="well">

            <form action="{{ action('PlaceController@update', $place->id) }}" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" value="PUT" name="_method">

                <div class="form-group">
                    <label for="name">
                        Place Name
                    </label>
                    <input type = "text" name="name" id="name" class="form-control">{{ $place->name }}>
                </div>

                <div class="form-group">
                    <label for="vicinity">
                        Place Address
                    </label>
                    <input type = "text" name="vicinity" id="vicinity" class="form-control">{{ $place->vicinity }}>
                </div>

                <div class="form-group">
                    <label for="name">
                        Place Coordinates
                    </label>
                    <input type = "text" name="coordinates" id="coordinates" class="form-control">{{ $place->coordinates }}>
                </div>

                <div class="form-group">
                    <label for="type">
                        Place Type
                    </label>
                    <input type="text" id="type" name="type" class="form-control" value="{{ $place->type }}">
                </div>

                <button role="button" class="btn btn-primary">
                    Submit
                </button>

            </form>

        </div>
    </div>

@append