<!-- Original concept: Namik Mesic-->
<!-- Adapted by Adem Hadrovic -->
<!--Optimized and edited by Iva Jesenkovic-->
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
                    <input type = "text" name="name" id="name" class="form-control" value = "{{ $place->name }}">
                </div>

                <div class="form-group">
                    <label for="vicinity">
                        Place Address
                    </label>
                    <input type = "text" name="vicinity" maxlength="100" id="vicinity" class="form-control" value = "{{ $place->vicinity }}">
                </div>

                <div class="form-group">
                    <label for="lat">
                        Place Latitude
                    </label>
                    <input type="number" step = "0.0000001" id="lat" placeholder="latitude" name="lat" class="form-control" value = "{{ $place->lat }}">
                </div>

                <div class="form-group">
                    <label for="longitude">
                        Place Longitude
                    </label>
                    <input type="number" step = "0.0000001" id="lng" placeholder="longitude" name="lng" class="form-control" value = "{{ $place->lng }}">
                </div>

                <div class="form-group">
                    <label for="type">
                        Place Type
                    </label>

                    <select id = "type" name = "type" class="form-control" placeholder="{{ $place->type }}">
                        <option value="food">food</option>
                        <option value="drink">drink</option>
                        <option value="entertainment">entertainment</option>
                        <option value="hotel">hotel</option>
                        <option value="bank">bank</option>
                        <option value="parking">parking</option>
                        <option value="shopping">shopping</option>
                        <option value="worship">worship</option>
                    </select>
                </div>

                <button role="button" class="btn btn-primary">
                    Submit
                </button>

            </form>

        </div>
    </div>

@append