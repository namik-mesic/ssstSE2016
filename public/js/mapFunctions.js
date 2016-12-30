/**
 * Created by Adem on 12/12/2016.
 */

//global var for storing the type of search
var type = "";


<!-- Function that handles Geolocation Errors -->
function handleLocationError(browserHasGeolocation, infoWindow, pos) {

    alert("Geolcation failed!");
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
        'Error: The Geolocation service failed.' :
        'Error: Your browser doesn\'t support geolocation.');

}

function setSearchType(searchType) {

    //assign argument to global var type
    type = searchType;
}

<!-- Calls the Google API for each marker needed -->
function callback(results, status) {
    if (status === google.maps.places.PlacesServiceStatus.OK) {


        var customPlaces = [];

        // this is supposed to get json data from function
        // and create the marker in a callback
        $.getJSON("/api/place", function(json){
            customPlaces = json;

            for(var i = 0; i < customPlaces.length; i++){
                //need to fix database attributes to accommodate geometry.location and
                // geometry.viewport
                //customPlaces[i].geometry.location = customPlaces[i].coordinates;

                if(customPlaces[i].type == type) {

                    customPlaces[i].geometry = {"location": "", "viewport": ""};
                    customPlaces[i].geometry.location = {"lat": customPlaces[i].lat, "lng": customPlaces[i].lng};
                }

                console.log(customPlaces[i]);
                createMarker(customPlaces[i]);
            };


        });
        setSearchType("");

        for (var i = 0; i < results.length; i++) {

            createMarker(results[i]);
        }
    }
}

<!-- Creates each marker -->
function createMarker(place) {

    // var for storing the image of the pin to be used
    var icon;

    // switch cases for checking the searchtype to determine which color of pins to display
    switch(type){
        case "food":
            icon = "http://maps.google.com/intl/en_us/mapfiles/ms/micons/blue-dot.png";
            break;
        case "drink":
            icon = "http://maps.google.com/intl/en_us/mapfiles/ms/micons/red-dot.png";
            break;
        case "entertainment":
            icon = "http://maps.google.com/intl/en_us/mapfiles/ms/micons/green-dot.png";
            break;
        case "shopping":
            icon = "http://maps.google.com/intl/en_us/mapfiles/ms/micons/ltblue-dot.png";
            break;
        case "lodging":
            icon = "http://maps.google.com/intl/en_us/mapfiles/ms/micons/yellow-dot.png";
            break;
        case "parking":
            icon = "http://maps.google.com/intl/en_us/mapfiles/ms/micons/pink-dot.png";
            break;
        case "bank":
            icon = "http://maps.google.com/intl/en_us/mapfiles/ms/micons/orange-dot.png";
        case "worship":
            icon = "http://maps.google.com/intl/en_us/mapfiles/ms/micons/purple-dot.png";
        default:
            icon = place.icon;
    }

    var marker = new google.maps.Marker({
        map: map,
        icon: icon,
        position: place.geometry.location


    });


    <!-- Get the image -->
    function getImage(src) {
        var tag = "<img src = src>";
        return tag;

    }

    //this function will return all the parameters
    //available for a place(testing purposes)
    function getPlaceInfo(place) {
        var element;
        var res;
        for(element in place){
            res += place[element] + "<br>";
        }
        return res;
    }


    <!-- Display the information for each marker -->
    function displayInfo() {
        //var pic = place.photos[0].getUrl({'maxWidth': 200, 'maxHeight': 200});
        var element;
        var tag;

        tag = document.getElementById("tab1default").innerHTML =
            "Place Name: " + place.name + "<br>" +

            "Location: " + place.geometry.location.lat + "," + place.geometry.location.lng + "<br>" +
            "Address: " + place.vicinity;

        // scroll down to info panel  upon clicking on a place icon
        //temporary solution for scrolling. need to implement smooth scrolling
        window.scrollTo(0,document.body.scrollHeight);
        return tag;


    }

    <!-- Adds a mouseover listener where it shows the content for each marker  -->
    google.maps.event.addListener(marker, 'mouseover', function() {
        infowindow.setContent(place.name);
        infowindow.open(map, this);
    });

    google.maps.event.addListener(marker, 'mouseout', function() {
        infowindow.setContent(place.name);
        infowindow.close(map, this);
    });
    <!-- Adds a click listener to do the displayInfo() function -->
    google.maps.event.addListener(marker, 'click', function () {

        // invoke displayInfo() function
        displayInfo();

    });
}