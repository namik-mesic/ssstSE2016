
@extends('layouts.map')

@section('head')
    <script src="http://maps.google.com/maps/api/js?sensor=false"
            type="text/javascript"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-jpP1e6mNwMTQj_6tcR1Okyg4gSczd6w&libraries=places"></script>
    <script type="text/javascript">
        //<![CDATA[

        var map;
        var infowindow;

        function initMap() {
            var pyrmont = {lat: 43.860702, lng: 18.429932};

            map = new google.maps.Map(document.getElementById('map'), {
                center: pyrmont,
                zoom: 16
            });

            infowindow = new google.maps.InfoWindow();
            var service = new google.maps.places.PlacesService(map);
            service.nearbySearch({
                location: pyrmont,
                radius: 500,
                type: ['night_club'],
                type : ['cafe'],
                type: ['bar']
            }, callback);

            service = new google.maps.places.PlacesService(map);
            service.nearbySearch(request, callback);
        }

        function callback(results, status) {
            if (status === google.maps.places.PlacesServiceStatus.OK) {
                for (var i = 0; i < results.length; i++) {
                    createMarker(results[i]);
                }
            }
        }

        function createMarker(place) {
            var placeLoc = place.geometry.location;
            var marker = new google.maps.Marker({
                map: map,
                position: place.geometry.location,
                icon: place.icon

            });

            function getImage(src) {
                var tag = "<img src = src>";
                return tag;

            }

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

            google.maps.event.addListener(marker, 'mouseover', function() {
                infowindow.setContent(place.name);
                infowindow.open(map, this);
            });

            google.maps.event.addListener(marker, 'click', function() {

                displayInfo();


            });
        }


    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-jpP1e6mNwMTQj_6tcR1Okyg4gSczd6w&callback=initMap"
            async defer></script>


@endsection
