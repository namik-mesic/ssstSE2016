<!--Created by Tarik Mutapcic-->


<?php $__env->startSection('head'); ?>

    <script type="text/javascript">

        var map;
        var infowindow;

        <!-- Creates a map where it your GeoLocation and shows the nearest places of worship -->
        function initMap() {

            <!-- "If clause" to find your location-->
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

            <!-- Calls the API for to create the map -->
            map = new google.maps.Map(document.getElementById('map'), {
                center: pos,
                mapTypeControl: false,
                streetViewControl: false,
                zoom: 15
            });

                    <!-- {map:map} will display the "you are here" bubble -->
                    infoWindow = new google.maps.InfoWindow({content:"You are here",map:map, position: pos});

                    <!-- create an info window for displaying location names -->
                    infowindow = new google.maps.InfoWindow();

        <!-- The function that calls the API for a particular type of marker -->
        var service = new google.maps.places.PlacesService(map);
            service.nearbySearch({
                location: pos,
                radius: 2000,
                type: ['church'],
                type: ['hindu_temple'],
                type: ['mosque'],
                type: ['place_of_worship'],
                type: ['synagogue']
            }, callback,setSearchType("place_of_worship"));

                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            }

            else {

                <!-- If browser doesn't support Geolocation, set location to default (sebilj) -->
                var coordinates = {lat: 43.860702, lng: 18.429932};
                handleLocationError(false, infoWindow, coordinates);
            }
        }

    </script>
    <script type="text/javascript" src ="<?php echo e(URL::asset('js/mapFunctions.js')); ?>"></script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.map', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>