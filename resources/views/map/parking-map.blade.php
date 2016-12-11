
@extends('layouts.map')

@section('head')
    <!--
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-jpP1e6mNwMTQj_6tcR1Okyg4gSczd6w&libraries=places"></script>
    -->

    <script type="text/javascript">
        //<![CDATA[

        var map;


        <!-- Creates a map where it gets the GeoLocation and shows the nearest parking lots -->
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
                type: ['parking']
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

        <!-- Function that handles if the Geolocation is on or if the browser can support it -->
        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                    'Error: The Geolocation service failed.' :
                    'Error: Your browser doesn\'t support geolocation.');
        }

        <!-- Calls the Google API for each marker needed -->
        function callback(results, status) {
            if (status === google.maps.places.PlacesServiceStatus.OK) {
                for (var i = 0; i < results.length; i++) {
                    createMarker(results[i]);
                }
            }
        }

        <!-- Creates each marker -->
        function createMarker(place) {
            var placeLoc = place.geometry.location;
            var marker = new google.maps.Marker({
                map: map,
                position: place.geometry.location,
                icon: place.icon

            });

            <!-- Get the image -->
            function getImage(src) {
                var tag = "<img src = src>";
                return tag;

            }

            <!-- Display the information for each marker -->
            function displayInfo() {
                var pic = place.photos[0].getUrl({'maxWidth': 200, 'maxHeight': 200});
                var tag;
                tag = document.getElementById("tab1default").innerHTML =
                        "Place Name: " + place.name +
                        "\nPlace ID: " + place.place_id+
                        "\nLocation: " + place.geometry.location +
                        "<br>" + getImage(pic);
                return tag;

            }

            <!-- Adds a mouseover listener where it shows the content for each marker  -->
            google.maps.event.addListener(marker, 'mouseover', function() {
                infowindow.setContent(place.name);
                infowindow.open(map, this);
            });

            <!-- Adds a click listener to do the displayInfo() function -->
            google.maps.event.addListener(marker, 'click', function() {

                displayInfo();


            });
        }


    </script>


@endsection