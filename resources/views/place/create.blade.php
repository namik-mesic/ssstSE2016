<!-- Original concept: Namik Mesic-->
<!-- Adapted by Adem Hadrovic -->
<!--Optimized and edited by Iva Jesenkovic-->
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="well">

            <form action="{{ action('PlaceController@store') }}" method="POST">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="name">
                        Place Name
                    </label>
                    <input type="text" id="name" name="name" placeholder="Place Name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="vicinity">
                        Place Address
                    </label>
                    <input type = "text" maxlength="100" name="vicinity" placeholder="Address" id="vicinity" class="form-control">
                </div>

                <div class="form-group">
                    <label for="lat">
                        Place Latitude
                    </label>
                    <!-- Might change to number input -->
                    <input type="number" step = "0.0000001" id="lat" placeholder="latitude" name="lat" class="form-control">
                </div>
                <div class="form-group">
                    <label for="lng">
                        Place Longitude
                    </label>
                    <!-- Might change to number input -->
                    <input type="number" step = "0.0000001" id="lng" placeholder="longitude" name="lng" class="form-control">
                </div>
                <div class="form-group">
                    <label for="type">
                        Place Type
                    </label>

                    <!-- Limited choices done by Iva -->
                    <!--<input type="text" id="type" placeholder="Type" name="type" class="form-control">-->
                    <select id = "type" name = "type" class="form-control">
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