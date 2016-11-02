@extends('layouts.map')

@section('head')

<script type =  "javascript">

    function load() {
        var map = new google.maps.Map(document.getElementById("map"), {
            center: new google.maps.LatLng(43.860702, 18.429932),
            zoom: 13,
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





@endsection
