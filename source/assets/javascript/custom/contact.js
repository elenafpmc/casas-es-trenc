if ( $('#map').length > 0 ) {
  function initMap() {
    var ventas = {lat: 39.3867945, lng: 2.9422595};
    var urnova = {lat: 39.5625241, lng: 2.6637964};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: {lat: 39.5261095, lng: 2.9138872}
    });
    var image = {
      url: 'http://development.flyingpigs.es/casas-es-trenc/build/assets/images/content/marker.png',
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
  }

  // google.maps.event.addDomListener(window, 'load', initMap);
  
}