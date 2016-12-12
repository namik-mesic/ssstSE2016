
@extends('layouts.map')

@section('head')
   <!--
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-jpP1e6mNwMTQj_6tcR1Okyg4gSczd6w&libraries=places"></script> -->
    <script type="text/javascript">
        //<![CDATA[

        var map;


        <!-- Creates a map where it gets your GeoLocation and shows the nearest places to shop -->
        function initMap() {

            <!-- "If clause" to find your location-->
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
                location: pyrmont,
                radius: 500,
                type: ['book_store'],
                type: ['clothing_store'],
                type: ['convenience_store'],
                type: ['department_store'],
                type: ['electronics_store'],
                type: ['furniture_store'],
                type: ['grocery_or_supermarket'],
                type: ['hardware_store'],
                type: ['home_goods_store'],
                type: ['jewelry_store'],
                type: ['liquor_store'],
                type: ['pet_store'],
                type: ['shoe_store']
            }, callback);

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

