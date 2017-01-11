<!DOCTYPE html>
<!--Map interface created by: Iva Jesenkovic. Tweaked by: Adem Hadrovic-->
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Group 4:Embedded map</title>

    <meta name="keywords" content="">

    <!-- Mobile viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

    <link rel="shortcut icon" href="{{URL::asset('graphics/icons/map/map-pin.png')}}"  type="image/x-icon" />

    <link href='http://fonts.googleapis.com/css?family=Dosis:500,600|Arvo|La+Belle+Aurore' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/mapstyles.css">

    <!-- Bootstrap-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap-->

    <!-- end CSS-->

    <!-- JS-->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script type="text/javascript"></script>
    <script type="text/javascript">
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

    </script>

    <!-- end JS-->

    @yield('head')
</head>

<body onload = "initMap()">

<!-- Header area -->
<header class="clearfix background-lightgrey">
    <div class="wrapper">
        <div id="banner">
            <div id="logo"><a href="/map"><img src= "{{URL::asset('graphics/icons/map/pin.png')}}" alt="logo" /></a></div>
        </div>

        <!-- Main navigation -->
        <nav id="topnav" role="navigation">
            <div class="menu-toggle">Menu</div>
            <ul class="srt-menu" id="menu-main-navigation">
                <li><a href="#find">Find</a></li>
                <li><a href="#information">Information</a></li>

            </ul>
        </nav>
        <!-- end main navigation -->
    </div>
</header>
<!-- end header -->


<!-- hero area -->
<section id="hero" class="background-greyish clearfix">
    <div class="wrapper">

        <!-- this api call allows the places to be displayed -->
        <div id="map"></div>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOBHDxuxfq2gyt3qkh5Llzz_YQ7rodgZc&libraries=places&callback=initMap">
        </script>

        @yield("mapbody")

    </div>
    <!-- end .wrapper div -->
</section>
<!-- end hero area -->


<!-- Find section -->
<section id="find">
    <div class="wrapper centered-text clearfix">
        <div class="gridcontainer clearfix">
            <div class="grid_3">
                <div class="fmcircle_out">
                    <a href="/map_food">
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
                    <a href="/map_drink">
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
                    <a href="/map_entertainment">
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
                    <a href="/map_hotel">
                        <div class="fmcircle_border">
                            <div class="fmcircle_in fmcircle_orange">
                                <span>Hotels</span><img src= "{{URL::asset('graphics/icons/map/hotel.png')}}" alt="" />
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="grid_3">
                <div class="fmcircle_out">
                    <a href="/map_bank">
                        <div class="fmcircle_border">
                            <div class="fmcircle_in fmcircle_gold">
                                <span>Bank</span><img src= "{{URL::asset('graphics/icons/map/bank.png')}}" alt="" />
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="grid_3">
                <div class="fmcircle_out">
                    <a href="/map_worship">
                        <div class="fmcircle_border">
                            <div class="fmcircle_in fmcircle_indigo">
                                <span>Worship</span><img src= "{{URL::asset('graphics/icons/map/worship.png')}}" alt="" />
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="grid_3">
                <div class="fmcircle_out">
                    <a href="/map_parking">
                        <div class="fmcircle_border">
                            <div class="fmcircle_in fmcircle_pink">
                                <span>Parking</span><img src= "{{URL::asset('graphics/icons/map/parking.png')}}" alt="" />
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid_3">
                <div class="fmcircle_out">
                    <a href="/map_shopping">
                        <div class="fmcircle_border">
                            <div class="fmcircle_in fmcircle_burgundy">
                                <span>Shopping</span><img src= "{{URL::asset('graphics/icons/map/shopping.png')}}" alt="" />
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- #end content area -->


<!-- information section -->
<section id="information" class="background-blue">
    <div class="wrapper centered-text clearfix">
        <div class="ing">
            <h1>Discover information on your locations</h1></div>

        <div class="container">
            <div class="page-header">

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel with-nav-tabs panel-default">
                        <div class="panel-heading">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1default" data-toggle="tab">Info</a></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab1default" style = "font-size: large">
                                    Click on a pin! Information about that place will be displayed here.</div>
                                <div class="tab-pane fade" id="tab2default"></div>
                                <div class="tab-pane fade" id="tab3default"></div>
                                <div class="tab-pane fade" id="tab4default">Most visited locations</div>
                                <div class="tab-pane fade" id="tab5default">Locations you saved for later</div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </br>

</section>
<!-- #end information section -->

<!-- footer area -->
<footer class="background-grey">

    <div id="attribution" class="wrapper clearfix" style="color:#666; font-size:11px;"><p>@Embedded Map 2017</p></div>

</footer>
<!-- #end footer area -->

<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.9.0.min.js">\x3C/script>')</script>
<!--altered this to get jquery from the source online-->
<script defer src="http://code.jquery.com/jquery.flexslider-min.js"></script>

<!-- fire ups  -->
<script src="js/main.js"></script>

<!-- menu scrolling  -->
<script type="text/javascript">
    $('a[href*=#find]').click(function(){
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top -80}, 500);
        return false;
    });

    $('a[href*=#information]').click(function(){
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top -80}, 500);
        return false;
    });
</script>

<!-- load flexslider on larger screens  -->
<script type="text/javascript">/*by J. Hogue https://coderwall.com/p/_ldtkg*/
    /* onresize handler that waits until a window resize event has stopped before firing – doesn't fire extraneously */
    function on_resize(c,t){ onresize=function(){ clearTimeout(t);t = setTimeout(c,100)}; return c };
    /* Check these so we dont load the same things twice */
    addthis_loaded = false;

    /* Load content progressively. Must remember to also load them for IE 7 and 8, since they do not support media queries or the getComputedStyle function */
    on_resize(function() {

        /* "Watch" the content of the body:after element. Will change as media queries fire. */
        mq_tag = window.getComputedStyle(document.body,':after').getPropertyValue('content');
        //console.log( "media query tag=" + mq_tag );

        /* Load AddThis features for larger screens */
        if ( mq_tag.indexOf("large") !=-1 && addthis_loaded == false ) {



            $.getScript('http://s7.addthis.com/js/250/addthis_widget.js#pubid=XXX',
                    function(){
                        addthis.init(); //callback function for script loading
                    });

            addthis_loaded = true;
            //console.log( "! load-addthis has fired" );
        }

    })(); // the magic extra () makes this function fire on page load

    //
    window.onload=function()
    {
        setTimeout(function()
        {
            window.scrollTo(0, 0);
        }, 0);
    };// when page is reload, it scrolles to the top
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">//scrolling to the top arrow</script>
<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow13.js">//scrolling to the top arrow</script>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>


