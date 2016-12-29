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

                customPlaces[i].geometry = {"location":"","viewport":""};
                customPlaces[i].geometry.location = {"lat" : customPlaces[i].lat, "lng" : customPlaces[i].lng};

                console.log(customPlaces[i]);
                createMarker(customPlaces[i]);
            };

        });


        for (var i = 0; i < results.length; i++) {

            createMarker(results[i]);
        }
    }
}

