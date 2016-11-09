(function(window, google, maperizer) {

    maperizer.MAP_OPTIONS = {
        geolocation: true,
        center: {
            lat: 43.860702,
            lng: 18.429932
        },
        zoom: 7,
        searchbox: true,
        cluster: true,
        geocoder: true,
        searchbox: true,
        createSingleMarker: true
    }


}(window, google, window.Maperizer || (window.Maperizer = {})));