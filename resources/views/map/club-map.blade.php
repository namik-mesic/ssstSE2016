<!--Created by Adem Hadrovic-->
@extends('layouts.map')

@section('head')

    <script type="text/javascript">

        var map;
        var infowindow;

       <!-- Creates a map where it uses your Geolocation and shows the nearest places to club -->

        function initMap() {

            <!-- If clause to get location from function getCurrentPosition -->
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };


                    map = new google.maps.Map(document.getElementById('map'), {
                        center: pos,
                        mapTypeControl: false,
                        streetViewControl: false,
                        zoom: 15
                    });

                    // {map:map} will display the "you are here" bubble
                    infoWindow = new google.maps.InfoWindow({content:"You are here",map:map, position: pos});
                    infowindow = new google.maps.InfoWindow();

                    var service = new google.maps.places.PlacesService(map);
                    service.nearbySearch({
                        location: pos,
                        radius: 2000,
                        type: ['night_club'],
                        type: ['cafe'],
                        type: ['bar']
                    }, callback,setSearchType("drink"));
                    // this line returns undefined vvvv
                    //service = new google.maps.places.PlacesService(map);
                    //service.nearbySearch(request, callback);


                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            }

            else {
                // If browser doesn't support Geolocation,
                // set location to default (sebilj)
                var coordinates = {lat: 43.860702, lng: 18.429932};
                handleLocationError(false, infoWindow, coordinates);

            }

        }

    </script>
    <script type="text/javascript" src ="{{URL::asset('js/mapFunctions.js')}}"></script>

@endsection

