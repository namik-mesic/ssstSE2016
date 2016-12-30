<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Group 4: Embedded Map</title>
    <link rel="stylesheet" href="styles/main.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="http://maps.google.com/maps/api/js?sensor=false"
            type="text/javascript"></script>
    <script type="text/javascript">
        //<![CDATA[
        var customIcons = {
            restaurant: {
                icon: 'http://labs.google.com/ridefinder/images/mm_20_blue.png',
                shadow: 'http://labs.google.com/ridefinder/images/mm_20_shadow.png'
            },
            bar: {
                icon: 'http://labs.google.com/ridefinder/images/mm_20_red.png',
                shadow: 'http://labs.google.com/ridefinder/images/mm_20_shadow.png'
            }
        };
        function load() {
            var map = new google.maps.Map(document.getElementById("map"), {
                center: new google.maps.LatLng(43.860702, 18.429932),
                zoom: 13,
                mapTypeId: 'roadmap'
                
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
        function bindInfoWindow(marker, map, infoWindow, html) {
            google.maps.event.addListener(marker, 'click', function() {
                infoWindow.setContent(html);
                infoWindow.open(map, marker);
            });
        }
        function downloadUrl(url, callback) {
            var request = window.ActiveXObject ?
                new ActiveXObject('Microsoft.XMLHTTP') :
                new XMLHttpRequest;
            request.onreadystatechange = function() {
                if (request.readyState == 4) {
                    request.onreadystatechange = doNothing;
                    callback(request, request.status);
                }
            };
            request.open('GET', url, true);
            request.send(null);
        }
        function doNothing() {}
        //]]>
    </script>


</head>
<body onload="load()">

<header class="navbar">
    <div class="container-fluid">


        <div class="col-sm-6 col-xs-12 col-lg-12 col-md-12">

            <div class="panel panel-primary">
                <div class="panel-heading" id = "title">Embedded Map</div>
                <div class="panel-body text-primary" id = "searchinfo">
                    Here, You can search the map!
                </div>
            </div>
        </div>

        <span id="map" style="width: 650px; height: 500px;" class = "col-xs-1 col-md-12 col-lg-12 col-md-offset-2">

    </span>


        <div class="col-sm-6 col-xs-12 col-lg-12 col-md-12">
            <br>
            <div class="panel panel-primary">

                <div class="panel-body text-primary col-lg-12 col-md-12">

                    <a onclick= "changeTitleToFood();" class="btn btn-success col-md-3 col-lg-3">Food</a>
                    <a onclick = "changeTitleToClubs();" class="btn btn-info col-md-3 col-lg-3">Drink</a>
                    <a onclick = "changeTitleToHotels();" class="btn btn-primary col-md-3 col-lg-3">Hotel</a>
                    <a onclick = "changeTitleToRecreation();" class="btn btn-success col-md-3 col-lg-3">Recreation</a>

                </div>
            </div>
        </div>

    </div>

</header><!-- /header -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript" charset="utf-8" async defer>

    // will transfer to separate js file
    // script to show map results will be included in js functions

    function changeTitleToFood() {
        alert("Returned restaurants in your area");
        document.getElementById("title").innerHTML = "Restaurants in your Area";
        document.getElementById("searchinfo").innerHTML = "Results for restaurants in a 5km radius";
        // add color change later
    }

    function changeTitleToClubs() {
        alert("Returned Clubs and Bars in your area");
        document.getElementById("title").innerHTML = "Clubs and Bars in your Area ";
        document.getElementById("searchinfo").innerHTML = "Results for clubs, bars, and lounges in a 5km radius";
        // add color change later
    }

    function changeTitleToHotels() {
        alert("Returned places to stay in your area");
        document.getElementById("title").innerHTML = "Places to stay the night in your Area ";
        document.getElementById("searchinfo").innerHTML = "Results for hotels, motels, and hostels in a 5km radius";
        // add color change later

    }

    function changeTitleToRecreation() {
        alert("Returned parks and recreation in your area");
        document.getElementById("title").innerHTML = "Parks and Recreation in your Area";
        document.getElementById("searchinfo").innerHTML = "Results for parks, recreation, and entertainment in a 5km radius";
        // add color change later
    }


</script>
</body>

</html>