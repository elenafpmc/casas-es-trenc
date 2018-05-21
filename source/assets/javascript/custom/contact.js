if ( $('#map').length > 0 ) {
  function initMap() {
    var ventas = {lat: 39.3867945, lng: 2.9422595};
    var urnova = {lat: 39.5625241, lng: 2.6637964};
    var airport = {lat: 39.5551265, lng: 2.7914326};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: {lat: 39.5261095, lng: 2.9138872},
      styles: mapStyle
    });
    var image = {
      url: 'http://development.flyingpigs.es/casas-es-trenc/build/assets/images/content/marker.png',
      size: new google.maps.Size(150, 150),
      origin: new google.maps.Point(0, 0),
      anchor: new google.maps.Point(37, 37),
      scaledSize: new google.maps.Size(75, 75)
    };
    var imageAirport = {
      url: 'http://development.flyingpigs.es/casas-es-trenc/build/assets/images/content/airport-marker.png',
      size: new google.maps.Size(150, 150),
      origin: new google.maps.Point(0, 0),
      anchor: new google.maps.Point(37, 37),
      scaledSize: new google.maps.Size(75, 75)
    };
    var markerVentas = new google.maps.Marker({
      position: ventas,
      map: map,
      icon: image
    });
    var markerUrnova = new google.maps.Marker({
      position: urnova,
      map: map,
      icon: image
    });
    var markerAirport = new google.maps.Marker({
      position: airport,
      map: map,
      icon: imageAirport
    });
  }

  // google.maps.event.addDomListener(window, 'load', initMap);
  
}

var mapStyle = [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
]