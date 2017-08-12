// This example creates circles on the map, representing populations in North
// America.

// First, create an object containing LatLng and population for each city.
var center = {lat: 7.278, lng: 80.629};

function initMap() {
  // Create the map.
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: {lat: 7, lng: 80.0},
    mapTypeId: 'terrain'
  });

  // Construct the circle for each value in citymap.
  // Note: We scale the area of the circle based on the population.
    // Add the circle for this city to the map.
    var cityCircle = new google.maps.Circle({
      strokeColor: '#FF0000',
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: '#FF0000',
      fillOpacity: 0.35,
      map: map,
      center: center,
      radius: 1000
    });
  
}