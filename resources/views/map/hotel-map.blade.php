
@extends('layouts.map')

@section('head')
    <script src="http://maps.google.com/maps/api/js?sensor=false"
            type="text/javascript"></script>
    <script type="text/javascript">
        //<![CDATA[

        function load() {
            var map = new google.maps.Map(document.getElementById("map"), {
                center: new google.maps.LatLng(43.860702, 18.429932),
                zoom: 16,
                mapTypeId: 'roadmap',

            });
            var infoWindow = new google.maps.InfoWindow;
            // Change this depending on the name of your PHP file
            downloadUrl("phpsqlajax_genxml.php", function(data) {
                var xml = data.responseXML;
                var markers = xml.documentElement.getElementsByTagName("marker");
                for (var i = 0; i < markers.length; i++) {
                    var name = markers[i].getAttribute("name");
                    var address = markers[i].getAttribute("address");
                    var type = markers[i].getAttribute("type");
                    var point = new google.maps.LatLng(
                            parseFloat(markers[i].getAttribute("lat")),
                            parseFloat(markers[i].getAttribute("lng")));
                    var html = "<b>" + name + "</b> <br/>" + address;
                    var icon = customIcons[type] || {};
                    var marker = new google.maps.Marker({
                        map: map,
                        position: point,
                        icon: icon.icon,
                        shadow: icon.shadow
                    });
                    bindInfoWindow(marker, map, infoWindow, html);
                }
            });
        }


    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-jpP1e6mNwMTQj_6tcR1Okyg4gSczd6w&callback=initMap"
            async defer></script>


@endsection
