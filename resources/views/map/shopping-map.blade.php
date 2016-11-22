
@extends('layouts.map')
<!-- The head that connects the map with the layout -->
@section('head')
    <script src="http://maps.google.com/maps/api/js?sensor=false"
            type="text/javascript"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-jpP1e6mNwMTQj_6tcR1Okyg4gSczd6w&libraries=places"></script>
    <script type="text/javascript">
        //<![CDATA[

        var map;
        var infowindow;

        <!-- Creates a map where Sebilj and shows the nearest places to shop -->
        function initMap() {
            var pyrmont = {lat: 43.860702, lng: 18.429932};

            map = new google.maps.Map(document.getElementById('map'), {
                center: pyrmont,
                mapTypeControl: false,
                streetViewControl: false,
                zoom: 16
            });

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

            service = new google.maps.places.PlacesService(map);
            service.nearbySearch(request, callback);
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-jpP1e6mNwMTQj_6tcR1Okyg4gSczd6w&callback=initMap"
            async defer></script>


@endsection

