<!-- Original concept: Namik Mesic-->
<!-- Tweaked by Adem Hadrovic -->
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
                    <input type = "text" name="vicinity" maxlength="100" id="vicinity" class="form-control">{{ $place->vicinity }}>
                </div>

                <div class="form-group">
                    <label for="lat">
                        Place Latitude
                    </label>
                    <input type="number" step = "0.0000001" id="lat" placeholder="latitude" name="lat" class="form-control">{{ $place->lat }}>
                </div>

                <div class="form-group">
                    <label for="longitude">
                        Place Longitude
                    </label>
                    <input type="number" step = "0.0000001" id="lng" placeholder="longitude" name="lng" class="form-control">{{ $place->lng }}>
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