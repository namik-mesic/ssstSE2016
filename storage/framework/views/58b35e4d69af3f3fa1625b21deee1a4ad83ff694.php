<!--Created by Adem Hadrovic. Tweaked by Tarik Mutapcic-->


<?php $__env->startSection('head'); ?>

    <script type="text/javascript">

        function initMap() {

            <!-- Try getting the HTML5 geolocation. -->
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude,
                        maximumAge:600000,
                        timeout:5000,
                        enableHighAccuracy: true
                    };

                    <!-- Calls the API for to create the map -->
                    map = new google.maps.Map(document.getElementById('map'), {
                        center: pos,
                        mapTypeControl: false,
                        streetViewControl: false,
                        zoom: 16
                    });

                    <!-- {map:map} will display the "you are here" bubble -->
                    infoWindow = new google.maps.InfoWindow({content:"You are here",map:map, position: pos});

                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {

                <!-- Browser doesn't support Geolocation,set location to default (sebilj) -->
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

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.map', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>