
@extends('layouts.map')

@section('head')
    <!--
    <script src="http://maps.google.com/maps/api/js?sensor=false"
            type="text/javascript"></script>
    -->

    <script type="text/javascript">
        //<![CDATA[

        var coordinates = {lat: 43.860702, lng: 18.429932};


        function getUserLocation() {
            var pos = coordinates;

            if(navigator.geolocation){

                coordinates.lat = position.coords.longitude;
                coordinates.lng = position.coords.latitude;
                return coordinates;

            }
            else{
                return pos;

            }
        }

        function getUserLocation(infoWindow) {
            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    infoWindow.setPosition(pos);
                    //
                    infoWindow.setContent('You are here.');
                    map.setCenter(pos);
                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }

        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                    'Error: The Geolocation service failed.' :
                    'Error: Your browser doesn\'t support geolocation.');
        }


        function initMap() {
            var coordinatesObject = getUserLocation();
            map = new google.maps.Map(document.getElementById('map'), {
                center: coordinatesObject,
                mapTypeControl: false,
                streetViewControl: false,
                zoom: 16
            });

            // {map:map} will display the "you are here" bubble
            infowindow = new google.maps.InfoWindow(/*{map: map}*/);

            getUserLocation(infowindow);


            /*
            var service = new google.maps.places.PlacesService(map);
            service.nearbySearch({
                location: map.center,
                radius: 100,
                type: []
            }, callback);
            */
        }






    </script>




@endsection
