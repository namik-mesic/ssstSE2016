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

// for test
var customPlaces = [

    {name: "Sebilj", type: "", vicinity: "Stari Grad", geometry: {location: {lat: 43.860702, lng: 18.429932}} },
    {name: "SSST", type: "", vicinity: "Hrasnicka cesta 3a", geometry: {location:{lat: 43.82382 , lng: 18.308177}}}

];

<!-- Calls the Google API for each marker needed -->
function callback(results, status) {
    if (status === google.maps.places.PlacesServiceStatus.OK) {

        for(var i = 0; i < customPlaces.length; i++){
            createMarker(customPlaces[i]);
        }

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
        icon: image,
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
        var pic = place.photos[0].getUrl({'maxWidth': 200, 'maxHeight': 200});
        var element;
        var tag;

        tag = document.getElementById("tab1default").innerHTML =
            "Place Name: " + place.name + "<br>" +
            "Place ID: " + place.place_id + "<br>" +
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

    <!-- Adds a click listener to do the displayInfo() function -->
    google.maps.event.addListener(marker, 'click', function () {

        displayInfo();

    });
}
