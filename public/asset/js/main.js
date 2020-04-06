// MAP

mapboxgl.accessToken = 'pk.eyJ1IjoiZ3JldWdyZXUiLCJhIjoiY2s4Zm92bWNyMDJqODNlbXB5OTN1dHZ3MCJ9.kW-zI5MDfeGM1Bffs1JuiA';
var map = new mapboxgl.Map({
    container: 'map', // Container ID
    style: 'mapbox://styles/mapbox/streets-v11', // Map style to use
    center: [1.0993,49.4431], // Starting position [lng, lat]
    zoom: 12, // Starting zoom level
});

// MAPBOX MARKERS

var marker = new mapboxgl.Marker() // initialize a new marker
    .setLngLat([1.0993,49.4431]) // Marker [lng, lat] coordinates
    .addTo(map); // Add the marker to the map

// MAPBOX GEOCODER

var geocoder = new MapboxGeocoder({ // Initialize the geocoder
    accessToken: mapboxgl.accessToken, // Set the access token
    mapboxgl: mapboxgl, // Set the mapbox-gl instance
  //  marker: false, // Do not use the default marker style
    placeholder: 'Rechercher à Rouen', // Placeholder text for the search bar
    bbox: [0.9847891642578332, 49.37031117247385, 1.1825430705078332, 49.49668368385193], // Boundary for Berkeley
    proximity: {
        longitude: 1.1138785197265832,
        latitude: 49.44626303462789
    } // Coordinates of UC Berkeley
});


// Add the geocoder to the map
map.addControl(geocoder);

// After the map style has loaded on the page,
// add a source layer and default styling for a single point
map.on('load', function() {
    map.addSource('single-point', {
        type: 'geojson',
        data: {
            type: 'FeatureCollection',
            features: []
        }
    });

    map.addLayer({
        id: 'point',
        source: 'single-point',
        type: 'circle',
        paint: {
            'circle-radius': 10,
            'circle-color': '#448ee4'
        }
    });

    // Listen for the `result` event from the Geocoder
    // `result` event is triggered when a user makes a selection
    //  Add a marker at the result's coordinates
    geocoder.on('result', function(e) {
        map.getSource('single-point').setData(e.result.geometry);
    });
});
