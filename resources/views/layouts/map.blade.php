<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Group 4: Embedded Map</title>

    <link rel = "stylesheet" href="\css\mapstyles.css">
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->

    <meta name="viewport" content="initial-scale=1.0">
    <meta name="author" content="www.twitter.com/cheeriottis">
    <meta charset="utf-8">

    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<!--
   these css imports are not found in our project. are they even needed?
    <link rel="stylesheet" href="css/core.css">
    <link href="css/blog-post.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JavaScript -->

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

    @yield('head')
</head>
<body onload="initMap()">


<div id="search">
    <form class="form-wrapper cf">

        <input type="text" placeholder="Search here..." required>
        <button type="submit"> Search</button>
    </form></div>


<div class="pin">
    <a href="#"><img src="pin.png" ></a>
</div>

<div id="map" style="width: 700px; height: 500px;" class = "col-xs-1 col-md-12 col-lg-12 col-md-offset-0">


    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-jpP1e6mNwMTQj_6tcR1Okyg4gSczd6w&libraries=places&callback=initMap">
            // don't touch this ^^^
            // this api call allows the places to be displayed
    </script>

    @yield("mapbody")
</div>
<div class="row">
    <div class="col-md-6">
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1default" data-toggle="tab">Info</a></li>

                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">Drop Me <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#tab5default" data-toggle="tab">Favourite locations</a></li>
                            <li><a href="#tab6default" data-toggle="tab">Something</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab1default"></div>
                    <div class="tab-pane fade" id="tab2default">Drinks in your area!Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                    <div class="tab-pane fade" id="tab2default">Drinks in your area!Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                    <div class="tab-pane fade" id="tab3default">Parks in your area!</div>
                    <div class="tab-pane fade" id="tab4default">Hotels in your area!</div>
                    <div class="tab-pane fade" id="tab5default">Most visited locations</div>
                    <div class="tab-pane fade" id="tab6default">More of something!</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-sm-6 col-xs-12 col-lg-12 col-md-12">
<div class="gridcontainer clearfix">
    <div class="grid_3">
        <div class="fmcircle_out">
            <a href="http://localhost:8000/map_food">
                <div class="fmcircle_border">
                    <div class="fmcircle_in fmcircle_blue">
                        <span>Food</span><img src= "{{URL::asset('graphics/icons/map/food.png')}}" alt="" />
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="grid_3">
        <div class="fmcircle_out">
            <a href="http://localhost:8000/map_drink">
                <div class="fmcircle_border">
                    <div class="fmcircle_in fmcircle_green">
                        <span>Drinks</span><img src= "{{URL::asset('graphics/icons/map/coffee.png')}}" alt="" />
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="grid_3">
        <div class="fmcircle_out">
            <a href="http://localhost:8000/map_entertainment">
                <div class="fmcircle_border">
                    <div class="fmcircle_in fmcircle_red">
                        <span>Rec</span><img src= "{{URL::asset('graphics/icons/map/park.png')}}" alt="" />
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="grid_3">
        <div class="fmcircle_out">
            <a href="http://localhost:8000/map_hotel">
                <div class="fmcircle_border">
                    <div class="fmcircle_in fmcircle_orange">
                        <span>Hotels</span><img src= "{{URL::asset('graphics/icons/map/hotel.png')}}" alt="" />
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
        <div class="gridcontainer clearfix">
    <div class="grid_3">
        <div class="fmcircle_out">
            <a href="http://localhost:8000/map_bank">
                <div class="fmcircle_border">
                    <div class="fmcircle_in fmcircle_gold">
                        <span>BANK</span><img src= "{{URL::asset('graphics/icons/map/bank.png')}}" alt="" />
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="grid_3">
        <div class="fmcircle_out">
            <a href="http://localhost:8000/map_worship">
                <div class="fmcircle_border">
                    <div class="fmcircle_in fmcircle_indigo">
                        <span>WORSHIP</span><img src= "{{URL::asset('graphics/icons/map/worship.png')}}" alt="" />
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="grid_3">
        <div class="fmcircle_out">
            <a href="http://localhost:8000/map_parking">
                <div class="fmcircle_border">
                    <div class="fmcircle_in fmcircle_pink">
                        <span>PARKING</span><img src= "{{URL::asset('graphics/icons/map/parking.png')}}" alt="" />
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="grid_3">
        <div class="fmcircle_out">
            <a href="http://localhost:8000/map_shopping">
                <div class="fmcircle_border">
                    <div class="fmcircle_in fmcircle_burgundy">
                        <span>SHOPPING</span><img src= "{{URL::asset('graphics/icons/map/shopping.png')}}" alt="" />
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
</div>

</body>


<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>



</html>



