<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Enable Mapping
    |--------------------------------------------------------------------------
    |
    | Enable Google mapping.
    |
    */
    'enabled' => true,

    /*
    |--------------------------------------------------------------------------
    | Google API Key
    |--------------------------------------------------------------------------
    |
    | A Google API key to link Googlmapper to Google's API.
    |
    */
    'key' => env('GOOGLE_API_KEY', 'AIzaSyA-jpP1e6mNwMTQj_6tcR1Okyg4gSczd6w'),

    /*
    |--------------------------------------------------------------------------
    | Region
    |--------------------------------------------------------------------------
    |
    | The region Google API should use required in ISO 3166-1 code format.
    |
    */
    'region' => 'GB',

    /*
    |--------------------------------------------------------------------------
    | Language
    |--------------------------------------------------------------------------
    |
    | The Language Google API should use required in ISO 639-1 code format.
    |
    */
    'language' => 'en-gb',

    /*
    |--------------------------------------------------------------------------
    | User Custom Maps
    |--------------------------------------------------------------------------
    |
    | Automatically add the logged in Google user to Googlmapper displayed map.
    |
    */
    'user' => false,

    /*
    |--------------------------------------------------------------------------
    | Location Marker
    |--------------------------------------------------------------------------
    |
    | Automatically add a location marker to the provided location for a
    | Googlmapper displayed map.
    |
    */
    'marker' => true,

    /*
    |--------------------------------------------------------------------------
    | Center Map
    |--------------------------------------------------------------------------
    |
    | Automatically center the Googlmapper displayed map on the provided
    | location.
    |
    */
    'center' => true,

    /*
    |--------------------------------------------------------------------------
    | Locate Users Location
    |--------------------------------------------------------------------------
    |
    | Automatically center the Googlmapper displayed map on the users current
    | location.
    |
    */
    'locate' => true,

    /*
    |--------------------------------------------------------------------------
    | Default Zoom
    |--------------------------------------------------------------------------
    |
    | The default zoom level Googlmapper should use.
    |
    */
    'zoom' => 8,

    /*
    |--------------------------------------------------------------------------
    | Scroll wheel Zoom
    |--------------------------------------------------------------------------
    |
    | Set if scroll wheel zoom should be used by Googlmapper.
    |
    */
    'scrollWheelZoom' => true,

    /*
    |--------------------------------------------------------------------------
    | Fullscreen Control
    |--------------------------------------------------------------------------
    |
    | Set if fullscreen control should be displayed by Googlmapper.
    |
    */
    'fullscreenControl' => true,

    /*
    |--------------------------------------------------------------------------
    | Map Type
    |--------------------------------------------------------------------------
    |
    | Set the default Googlmapper displayed map type. (ROADMAP|SATELLITE|HYBRID|TERRAIN)
    |
    */
    'type' => 'ROADMAP',

    /*
    |--------------------------------------------------------------------------
    | Map UI
    |--------------------------------------------------------------------------
    |
    | Should the default Googlmapper displayed map UI be shown.
    |
    */
    'ui' => true,

    /*
    |--------------------------------------------------------------------------
    | Map Marker
    |--------------------------------------------------------------------------
    |
    | Set the default Googlmapper map marker behaviour.
    |
    */
    'markers' => array(

        /*
        |--------------------------------------------------------------------------
        | Marker Icon
        |--------------------------------------------------------------------------
        |
        | Display a custom icon for markers. (Link to an image)
        |
        */
        'icon' => '',

        /*
        |--------------------------------------------------------------------------
        | Marker Animation
        |--------------------------------------------------------------------------
        |
        | Display an animation effect for markers. (NONE|DROP|BOUNCE)
        |
        */
        'animation' => 'BOUNCE',

    ),

    /*
    |--------------------------------------------------------------------------
    | Map Marker Cluster
    |--------------------------------------------------------------------------
    |
    | Enable default Googlmapper map marker cluster.
    |
    */
    'cluster' => true,

    /*
    |--------------------------------------------------------------------------
    | Map Marker Cluster
    |--------------------------------------------------------------------------
    |
    | Set the default Googlmapper map marker cluster behaviour.
    |
    */
    'clusters' => array (

        /*
        |--------------------------------------------------------------------------
        | Cluster Icon
        |--------------------------------------------------------------------------
        |
        | Display custom images for clusters using icon path. (Link to an image path)
        |
        */
        'icon' => '//googlemaps.github.io/js-marker-clusterer/images/m',

        /*
        |--------------------------------------------------------------------------
        | Cluster Size
        |--------------------------------------------------------------------------
        |
        | The grid size of a cluster in pixels.
        |
        */
        'grid' => 60,

        /*
        |--------------------------------------------------------------------------
        | Cluster Zoom
        |--------------------------------------------------------------------------
        |
        | The maximum zoom level that a marker can be part of a cluster.
        |
        */
        'zoom' => null,

        /*
        |--------------------------------------------------------------------------
        | Cluster Center
        |--------------------------------------------------------------------------
        |
        | Whether the center of each cluster should be the average of all markers
        | in the cluster.
        |
        */
        'center' => false,

        /*
        |--------------------------------------------------------------------------
        | Cluster Size
        |--------------------------------------------------------------------------
        |
        | The minimum number of markers to be in a cluster before the markers are
        | hidden and a count is shown.
        |
        */
        'size' => 2

    ),

);
