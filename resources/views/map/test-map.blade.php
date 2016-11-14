
@extends('layouts.map')

@section('head')
    <script src="http://maps.google.com/maps/api/js?sensor=false"
            type="text/javascript"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-jpP1e6mNwMTQj_6tcR1Okyg4gSczd6w&libraries=places"></script>
    <script type="text/javascript">
        //<![CDATA[
        var map, infowindow, service;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map-canvas'), {
                center: new google.maps.LatLng(-33.8665433, 151.1956316),
                zoom: 15
            });

            var request = {
                placeId: 'ChIJN1t_tDeuEmsRUsoyG83frY4'
            };

            infowindow = new google.maps.InfoWindow();
            service = new google.maps.places.PlacesService(map);

            service.getDetails(request, function(place, status) {
                if (status == google.maps.places.PlacesServiceStatus.OK) {
                    createMarker(place)
                }
            });
        }

        function createMarker(place) {
            var image = 'img/marker.png';
            var placeLoc = place.geometry.location;
            var marker = new google.maps.Marker({
                map: map,
                //icon: image,
                position: place.geometry.location
            });
            var request = {
                reference: place.reference
            };

            service.getDetails(request, function(details, status) {
                google.maps.event.addListener(marker, 'click', function() {

                    if (status == google.maps.places.PlacesServiceStatus.OK) {

                        // Replace empty spaces in navigation link with + symbols
                        var navLink = details.formatted_address;
                        navLink = navLink.replace(/\s/g, "+");
                        $('.navLink').html(navLink);

                        // Match Rating bar width to rating number
                        var ratingWidth = (details.rating * 20) + "px";
                        $('.rating-bar > span').css('width', "'" + ratingWidth + "'");

                        var contentStr = '<h5 class="info-window-title">' + details.name + '</h5><ul class="info-window">';
                        if (!!details.rating) contentStr += '<li>Rating:&nbsp;<div class="rating-bar"><span style=width:' + ratingWidth + '></span></div><strong>' + details.rating + '</strong></li>';
                        if (!!details.open_now) contentStr += '<li class="open-now">' + details.open_now + '</li>';
                        contentStr += '<li>' + details.formatted_address + '</li>';
                        contentStr += '<li class=gray>' + details.types + '</li>';
                        // Check for platform to send appropriate app link
                        if ((navigator.platform.indexOf("iPhone") != -1)) {
                            contentStr += '<li class="link"><a class=navLink href=http://maps.apple.com/?daddr=Current+Location&saddr=' + navLink + '><i class="fa fa-automobile"></i> Get Directions</a></li>';
                        } else {
                            contentStr += '<li class="link"><a class=navLink href=https://www.google.com/maps/dir/Current+Location/' + navLink + '><i class="fa fa-automobile"></i> Get Directions</a></li>';
                        }

                        if (!!details.formatted_phone_number) contentStr += '<li class="link"><a href="tel:' + details.formatted_phone_number + '"><i class="fa fa-phone"></i> ' + details.formatted_phone_number + '</a></li>';
                        if (!!details.reviews && details.reviews.length) {

                            contentStr += '<li>Reviews' +

                                    (function(rs /*reviews-array*/ , fx /*review-parser*/ ) {
                                        var list = document.createElement('ul');
                                        rs.forEach(function(r) {
                                            list.appendChild(fx(r));
                                        });

                                        return '<ul>' + list.innerHTML + '</ul>';
                                        //remove the previous line when you want to return a DOMNode
                                        return list;
                                    }
                                    (details.reviews,
                                            function(r /*single review*/ ) {
                                                console.log(r.aspects)
                                                var item = document.createElement('li'),
                                                        review = item.appendChild(document.createElement('ul'))
                                                props = {
                                                    author_name: 'author',
                                                    rating: 'rating',
                                                    text: 'text'
                                                };
                                                item.appendChild(document.createElement('h6'));
                                                item.lastChild.appendChild(document.createElement('a'));
                                                item.lastChild.lastChild
                                                        .appendChild(document.createTextNode(r.author_name));
                                                if (r.author_url) {
                                                    item.lastChild.lastChild.setAttribute('href', r.author_url);
                                                }
                                                item.lastChild.appendChild(document.createTextNode('(' + r.rating +
                                                        ')'));
                                                if (r.aspects && r.aspects.length) {
                                                    item.appendChild(document.createElement('ul'));
                                                    r.aspects.forEach(function(a) {
                                                        item.lastChild.appendChild(document.createElement(
                                                                'li'));
                                                        item.lastChild.lastChild
                                                                .appendChild(document.createTextNode(a.type +
                                                                        ':' + a.rating))
                                                    });
                                                }
                                                item.appendChild(document.createElement('p'));
                                                item.lastChild.appendChild(document.createTextNode(r.text));
                                                return item;
                                            }
                                    ))



                                    + '</li>';
                        }
                        contentStr += '</ul>';
                        console.log(contentStr)
                        infowindow.setContent(contentStr);
                        infowindow.open(map, marker);
                    } else {
                        var contentStr = "<h5>No Result, status=" + status + "</h5>";
                        infowindow.setContent(contentStr);
                        infowindow.open(map, marker);
                    }

                });

            });

        }
        google.maps.event.addDomListener(window, 'load', initMap());
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-jpP1e6mNwMTQj_6tcR1Okyg4gSczd6w&callback=initMap"
            async defer></script>


@endsection

