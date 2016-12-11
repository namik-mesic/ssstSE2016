
@extends('layouts.map')
<!-- The head that connects the map with the layout -->
@section('head')

    <!--
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-jpP1e6mNwMTQj_6tcR1Okyg4gSczd6w&libraries=places"></script>
    -->
    <script type="text/javascript">
        //<![CDATA[

        var map;
        var infowindow;

        <!-- Creates a map where Sebilj and shows the nearest places to get food -->
        function initMap() {

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

                    //create an info window for displaying location names
                    infowindow = new google.maps.InfoWindow();

                    var service = new google.maps.places.PlacesService(map);
                    service.nearbySearch({
                        location: pos,
                        radius: 10000,
                        type: ['restaurant'],
                        type: ['food'],
                        type: ['meal_takeaway'],
                        type: ['meal_delivery'],
                        type: ['bakery']
                    }, callback);

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
            var image = {
                url: place.icon,
                //size: new google.maps.Size(40,64),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(0, 32)
            };

                var placeLoc = place.geometry.location;

                var marker = new google.maps.Marker({
                    map: map,
                    icon: place.icon,
                    position: place.geometry.location


                });


                <!-- Get the image -->
                function getImage(src) {
                    var tag = "<img src = src>";
                    return tag;

                }

            //this function will return all the parameters
            //available for a place(testing purposes)
            function getPlaceInfo(place) {
                var element;
                var res;
                for(element in place){
                    res += place[element] + "<br>";
                }
                return res;
            }


            <!-- Display the information for each marker -->
                function displayInfo() {
                    var pic = place.photos[0].getUrl({'maxWidth': 200, 'maxHeight': 200});
                    var element;
                    var tag;

                        tag = document.getElementById("tab1default").innerHTML =
                                "Place Name: " + place.name + "<br>" +
                                "Place ID: " + place.place_id + "<br>" +
                                "Location: " + place.geometry.location + "<br>" +
                                "Address: " + place.vicinity;

                        // scroll down to info panel  upon clicking on a place icon
                        //temporary solution for scrolling. need to implement smooth scrolling
                        window.scrollTo(0,document.body.scrollHeight);
                        return tag;


                }

                <!-- Adds a mouseover listener where it shows the content for each marker  -->
                google.maps.event.addListener(marker, 'mouseover', function() {
                    infowindow.setContent(place.name);
                    infowindow.open(map, this);
                });

                <!-- Adds a click listener to do the displayInfo() function -->
                google.maps.event.addListener(marker, 'click', function () {

                    displayInfo();

                });
        }

    </script>



@endsection

