
@extends('layouts.map')

@section('head')
    <!--
    <script src="http://maps.google.com/maps/api/js?sensor=false"
            type="text/javascript"></script>
    -->

    <script type="text/javascript">
        //<![CDATA[

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
                type: []
            }, callback);
        }


    </script>




@endsection
