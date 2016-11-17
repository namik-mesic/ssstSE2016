<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Group 4: Embedded Map</title>
    <link rel="stylesheet" href="styles/main.css">
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
    <link rel="stylesheet" href="css/core.css">
    <link href="css/blog-post.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JavaScript -->
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
    <style type="text/css">




        body {
            background: #fff;
            font: 13px 'Lucida sans', Arial, Helvetica;
            color: #000000;
            text-align: center;
        }

        a {
            color: #ccc;
        }

        /*-------------------------------------*/

        .cf:before{
            content:"";
            display:table;
        }



        .cf{
            zoom:1;
        }

        /*-------------------------------------*/



        .form-wrapper input {

            width: 330px ;
            height: 20px ;
            padding: 20px 10px;
            margin-top:15px;
            margin-bottom:50px;
            font:  15px 'comic sans', 'trebuchet MS', 'Tahoma';
            border: 0;
            color: #000;
            background: #eee;
            -moz-border-radius: 3px 0 0 3px;
            -webkit-border-radius: 3px 0 0 3px;
            border-radius: 3px 0 0 3px;
        }

        .form-wrapper input:focus {
            outline: 0 ;
            background: #fff;
            -moz-box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
            -webkit-box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
            box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
        }

        .form-wrapper input::-webkit-input-placeholder {
            color: #999 ;
            font-weight: normal;
            font-style: italic;
        }

        .form-wrapper input:-moz-placeholder {
            color: #999 ;
            font-weight: normal;
            font-style: italic;
        }

        .form-wrapper input:-ms-input-placeholder {
            color: #999 ;
            font-weight: normal;
            font-style: italic;
        }

        .form-wrapper button {
            overflow: visible;
            position: relative;

            border: 0;
            padding: 0;
            cursor: pointer;
            height: 40px;
            width: 110px;
            font: bold 15px/40px 'lucida sans', 'trebuchet MS', 'Tahoma';
            color: #fff;
            text-transform: uppercase;
            background: #8875f0;
            -moz-border-radius: 0 3px 3px 0;
            -webkit-border-radius: 0 3px 3px 0;
            border-radius: 0 3px 3px 0;
            text-shadow: 0 -1px 0 rgba(0, 0 ,0, .3);
        }

        .form-wrapper button:hover{
            background: #745eed
        }

        .form-wrapper button:active,
        .form-wrapper button:focus{
            background: #745eed;
        }




        .form-wrapper button::-moz-focus-inner {
            border: 0;
            padding: 0;
        }

        #map {
            height: 55%;
            width: 51%;
            margin-left: 50px;
        }

        html, body {
            height: 100%;
            margin:0;
            padding: 0;
        }


        .animate
        {
            transition: all 0.1s;
            -webkit-transition: all 0.1s;

        }



        .pin {
            margin-right:1090px;
            margin-top: -89px;
            margin-bottom: 60px;
            cursor: pointer;

        }

        .row{  margin: 0px;


        }
        .col-md-6{  margin-left: 790px; margin-top: -524px; width: 530px;

        }


        .panel.with-nav-tabs .panel-heading{
            padding: 5px 5px 0px 5px;
            font-family: rockwell;
            font-size: 16px;


        }
        .panel.with-nav-tabs .nav-tabs{
            border-bottom: none;
        }
        .panel.with-nav-tabs .nav-justified{
            margin-bottom: -1px;
        }
        /********************************************************************/
        /*** PANEL DEFAULT ***/
        .with-nav-tabs.panel-default .nav-tabs > li > a,
        .with-nav-tabs.panel-default .nav-tabs > li > a:hover,
        .with-nav-tabs.panel-default .nav-tabs > li > a:focus {
            color: #777;
        }
        .with-nav-tabs.panel-default .nav-tabs > .open > a,
        .with-nav-tabs.panel-default .nav-tabs > .open > a:hover,
        .with-nav-tabs.panel-default .nav-tabs > .open > a:focus,
        .with-nav-tabs.panel-default .nav-tabs > li > a:hover,
        .with-nav-tabs.panel-default .nav-tabs > li > a:focus {
            color: #777;
            background-color: #ddd;
            border-color: transparent;
        }
        .with-nav-tabs.panel-default .nav-tabs > li.active > a,
        .with-nav-tabs.panel-default .nav-tabs > li.active > a:hover,
        .with-nav-tabs.panel-default .nav-tabs > li.active > a:focus {
            color: #555;
            background-color: #fff;
            border-color: #ddd;
            border-bottom-color: transparent;
        }
        .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu {
            background-color: #f5f5f5;
            border-color: #ddd;
            font-size: 16px;
        }
        .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a {
            color: #777;
        }
        .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
        .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
            background-color: #ddd;
        }
        .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a,
        .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
        .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
            color: #fff;
            background-color: #555;
        }

        .tab-content{ color: #000;
        }


        body {
            font-size: 13px;
            line-height: 20px;

            text-align: center;
        }
        /* -- Circular Work -- */


        .grid_3 {
            display: inline;
            float: left;
            margin-left: 57px;
            margin-top: 30px;
            width: 120px;
        }

        .grid_9 {
            display: inline;
            float: left;
            margin-left: 10px;
            margin-right: 10px;
            width: 700px;
        }

        .fmcircle_out {
            width: 130px;
            height: 130px;
            background: rgba(221,221,221,0.3) url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAJCAYAAADgkQYQAAAAO0lEQVQYV2NkIAIwElKze/fu/3gVgRS4uroyEjQJZBNWRTATYE7BUISuAKdJ6J6Bm4TNBBTr8CkAKQQA02QXOj4w/E8AAAAASUVORK5CYII=);
            text-align: center;
            display: block;
            margin-left: 10px;


            border-radius: 100px;
            -moz-border-radius: 100px;
            -webkit-border-radius: 100px;
            -o-border-radius: 100px;

            -webkit-transition: all 0.2s linear;
            -moz-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }

        .fmcircle_out:hover {
            opacity: 1;

            -webkit-transition: all 0.2s linear;
            -moz-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }





        .fmcircle_in {
            width: 110px;
            height: 110px;
            margin: 10px;
            display: inline-block;
            overflow: hidden;

            border-radius: 85px;
            -moz-border-radius: 85px;
            -webkit-border-radius: 85px;
            -o-border-radius: 85px;
        }

        .fmcircle_in img {
            border: none;
            margin: 23px;
            width: 64px;
            height: 64px;

            -webkit-transition: all 0.2s linear;
            -moz-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }

        .fmcircle_in span {
            margin: 0;
            padding: 0;
            border: 0;
            vertical-align: baseline;
            width: 110px;
            background: #fff;
            color: #666666;
            padding: 5px;
            margin: 40px 0 0 0;
            height: 29px;
            text-align: center;
            font-weight: bold;
            font-family: comic;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            float: left;
            position: absolute;
            opacity: 0;

            border-radius: 2px;
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            -o-border-radius: 2px;

            -webkit-transition: all 0.2s linear;
            -moz-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }

        .fmcircle_out:hover .fmcircle_in span {
            opacity: 1;

            -webkit-transition: all 0.2s linear;
            -moz-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }

        /*** Base64 Patterns ***/

        .fmcircle_blue {
            background:  #3498DB;
        }

        .fmcircle_red {
            background: #82BF56;
        }

        .fmcircle_orange {
            background:  #F2CF66;
        }

        .fmcircle_green {
            background:  #E74C3C;
        }



    </style>


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
                        <span>Food</span><img src="cutlery.png" alt="" />
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
                        <span>Drinks</span><img src="coffee-cup.png" alt="" />
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
                        <span>Rec</span><img src="bench.png" alt="" />
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
                        <span>Hotels</span><img src="hotel.png" alt="" />
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



