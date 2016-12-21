<?php $__env->startSection('head'); ?>
    <script src="http://maps.google.com/maps/api/js?sensor=false"
            type="text/javascript"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-jpP1e6mNwMTQj_6tcR1Okyg4gSczd6w&libraries=places"></script>
    <script type="text/javascript">
        //<![CDATA[
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 43.860702, lng: 18.429932},
                zoom: 10
            });
            var infoWindow = new google.maps.InfoWindow({map: map});

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    infoWindow.setPosition(pos);
                    infoWindow.setContent('You are here.');
                    map.setCenter(pos);
                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }

            var service = new google.maps.places.PlacesService(map);
            service.nearbySearch({
                location: infoWindow.getPosition(),
                radius: 10000,
                type: ['cafe']

            }, callback);

            service = new google.maps.places.PlacesService(map);
            service.nearbySearch(request, callback);
        }


        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                    'Error: The Geolocation service failed.' :
                    'Error: Your browser doesn\'t support geolocation.');
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

            google.maps.event.addListener(marker, 'mouseover', function() {
                infowindow.setContent(place.name);
                infowindow.open(map, this);
            });
        }





    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-jpP1e6mNwMTQj_6tcR1Okyg4gSczd6w&callback=initMap"
            async defer></script>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.map', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>