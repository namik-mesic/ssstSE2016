<?php $__env->startSection('head'); ?>
    <!--
    <script src="http://maps.google.com/maps/api/js?sensor=false"
            type="text/javascript"></script>
    -->

    <script type="text/javascript">


        function initMap() {

            var xhttp = new XMLHttpRequest();
            var apiPlaces;
            //Http request to get content of api/places page
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // get content of /api/places (json data) as string
                    apiPlaces = this.responseText;
                }
            };
            xhttp.open("POST","<?php echo e(URL::asset('/api/places')); ?>",true);
            xhttp.send();

            // convert string to JSON data
            var customPlaces = JSON.parse(apiPlaces);
            alert(customPlaces);

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude,
                        maximumAge:600000,
                        timeout:5000,
                        enableHighAccuracy: true

                    };


                    map = new google.maps.Map(document.getElementById('map'), {
                        center: pos,
                        mapTypeControl: false,
                        streetViewControl: false,
                        zoom: 16
                    });

                    // {map:map} will display the "you are here" bubble
                    infoWindow = new google.maps.InfoWindow({content:"You are here",map:map, position: pos});
                    //infoWindow.setContent("You are here");

                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
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


    </script>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.map', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>