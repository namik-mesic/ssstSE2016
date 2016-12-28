/**
 * Created by Adem on 12/12/2016.
 */
<!-- Function that handles Geolocation Errors -->
function handleLocationError(browserHasGeolocation, infoWindow, pos) {

    alert("Geolcation failed!");
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
        'Error: The Geolocation service failed.' :
        'Error: Your browser doesn\'t support geolocation.');

}

/*
function getJSONData() {

     var xhttp = new XMLHttpRequest();
     var apiPlaces;

     //Http request to get content of api/places page
     xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
     // get content of /api/place (json data) as string
        console.log(JSON.parse(this.responseText),function (key,val) {
            apiPlaces.push(key + ":"+ val);
        });
        return apiPlaces;
     }
     };
     xhttp.open("GET",'/api/place',true);
     xhttp.send();


};
*/

/*
//jQuery variant of the function above^^

function getHTMLData(url) {

    var result = "";
    $.get(url,function (data) {
        result = data;
        return result;
    });

}
*/

function getLatFromObject(obj) {
    var coordinates = obj.coordinates;
    lat = "";
    for(var i = 0; i <coordinates.length;i++){
        if(coordinates[i] == ",");
            lat += coordinates[i]
    }

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

                customPlaces[i].geometry = {
                        "location" : {"lat" :customPlaces[i].lat, "lng" : customPlaces[i].lng},
                        "viewport" : ""};
                console.log(customPlaces[i]);
                createMarker(customPlaces[i]);
            };

        });


        for (var i = 0; i < results.length; i++) {

            createMarker(results[i]);
        }
    }
}

<!-- Creates each marker -->
function createMarker(place) {

     // this var allows you to make custom marker graphics
     // it still needs to be adjusted to work with infowindow properly
     var image = {
     url: "{{URL::asset('graphics/icons/map/map-pin.png')}}",
     size: new google.maps.Size(71, 71),
     origin: new google.maps.Point(0, 0),
     anchor: new google.maps.Point(17, 34),
     scaledSize: new google.maps.Size(25, 25)
     };

    var placeLoc = place.geometry.location;

    var marker = new google.maps.Marker({
        map: map,
        icon:"http://maps.google.com/intl/en_us/mapfiles/ms/micons/blue-dot.png",
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

            "Location: " + place.geometry.location + "<br>" +
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

        displayInfo();

    });
}
