


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="estilo.css">
<script src="https://kit.fontawesome.com/9a366bdc23.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planeador De Viajes</title>
</head>
<body>

<div class="CONTAINER" style="width: 1250px; height: 600px; position: relative; background: white">
  <div class="NavHeader" style="width: 1250px; height: 52px; left: 0px; top: 0px; position: absolute; background: #1188FF"></div>
  <div class="ConteneInfo" style="width: 1250px; height: 548px; left: 0px; top: 52px; position: absolute; background: #ACE1FF"></div>
  <div class="Group" style="width: 24px; height: 24px; left: 754px; top: 14px; position: absolute">    
    <a class="fa-solid fa-bars fa-2xl" style="width: 19px; height: 17px; left: 450px; top: 12px; position: absolute"></a>
    
  </div>
  
  <div class="infoMaps" style="width: 236px; height: 511px; left: 10px; top: 71px; position: absolute; background: linear-gradient(180deg, #D4E9F4 82%, rgba(208.84, 235.60, 250.75, 0) 100%); border: 1px black solid">
  <div class="Inventario" style="width: 220px; height: 29px; left: 10px; top: 27px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word; background: white; border: 1px black solid">inventario</div>
  <div class="Inventario" style="width: 220px; height: 29px; left: 10px; top: 101px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word; background: white; border: 1px black solid">inventario</div>
  <div class="Inventario" style="width: 220px; height: 29px; left: 10px; top: 323px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word; background: white; border: 1px black solid">inventario</div>
  <div class="Inventario" style="width: 220px; height: 29px; left: 10px; top: 397px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word; background: white; border: 1px black solid">inventario</div>
  <div class="Inventario" style="width: 220px; height: 29px; left: 10px; top: 471px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word; background: white; border: 1px black solid">inventario</div>
  <div class="Inventario" style="width: 220px; height: 29px; left: 10px; top: 175px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word; background: white; border: 1px black solid">inventario</div>
  <div class="Inventario" style="width: 220px; height: 29px; left: 10px; top: 249px; position: absolute; color: black; font-size: 12px; font-family: Inter; font-weight: 400; word-wrap: break-word; background: white; border: 1px black solid">inventario</div>
  
  </div>
  
  <div class="infoMaps" style="width: 236px; height: 511px; left: 992px; top: 71px; position: absolute; background: linear-gradient(180deg, #D4E9F4 82%, rgba(208.84, 235.60, 250.75, 0) 100%); border: 1px black solid">
  <ul class="geo-data">
    <li>Direccion: <span id="location"></span></li>
    <li>Codigo Postal: <span id="postal_code"></span></li>
    <li>Pais: <span id="country"></span></li>
    <li>Latitude: <span id="lat"></span></li>
    <li>Longitude: <span id="lon"></span></li>
</ul>    
  </div>
  
  
  
  <div id="map" class="GoogleMaps" style="width: 703px; height: 520px; left: 272px; top: 73px;  color: black; font-size: 12px; font-family: Inter; font-weight: 400; border: 1px black solid"></div>
  
  
  <input id="searchInput" class="controls" type="text" placeholder="Lugar de interes..." style="width: 500px; height: 37px; left: 516px; top: 4px; position: absolute; background: white"></div>
  <div class="Group" style="width: 17.25px; height: 17.25px; left: 703px; top: 17px; position: absolute">
    <div class="fa-solid fa-magnifying-glass fa-lg" style="width: 4.50px; height: 4.50px; left: 300px; top: 16px; position: absolute"></div>
    
    
  </div>
  <div class="SolarCalendarBroken" style="width: 44px; height: 37px; left: 27px; top: 6px; position: absolute">
    <div class="Group" style="width: 36.67px; height: 30.06px; left: 3.67px; top: 3.85px; position: absolute">
    <a class="fa-solid fa-calendar-days fa-2xl" style="width: 36.67px; height: 30.06px; left: 0px; top: 21px; position: absolute"></a>
      
    </div>
  </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDmcy7cr0sz1RuUMvGCQP2JdcotmBLxx4c&callback=initMap" async defer></script>
<script>
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 18.8126047, lng: -98.9548261},
    zoom: 13
  });
  var input = document.getElementById('searchInput');
  

  var autocomplete = new google.maps.places.Autocomplete(input);
  autocomplete.bindTo('bounds', map);

  var infowindow = new google.maps.InfoWindow();
  var marker = new google.maps.Marker({
      map: map,
      anchorPoint: new google.maps.Point(0, -29)
  });

  autocomplete.addListener('place_changed', function() {
      infowindow.close();
      marker.setVisible(false);
      var place = autocomplete.getPlace();
      if (!place.geometry) {
          window.alert("Autocomplete's returned place contains no geometry");
          return;
      }

      // If the place has a geometry, then present it on a map.
      if (place.geometry.viewport) {
          map.fitBounds(place.geometry.viewport);
      } else {
          map.setCenter(place.geometry.location);
          map.setZoom(17);
      }
      marker.setIcon(({
          url: place.icon,
          size: new google.maps.Size(71, 71),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(17, 34),
          scaledSize: new google.maps.Size(35, 35)
      }));
      marker.setPosition(place.geometry.location);
      marker.setVisible(true);
  
      var address = '';
      if (place.address_components) {
          address = [
            (place.address_components[0] && place.address_components[0].short_name || ''),
            (place.address_components[1] && place.address_components[1].short_name || ''),
            (place.address_components[2] && place.address_components[2].short_name || '')
          ].join(' ');
      }
  
      infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
      infowindow.open(map, marker);
    
      // Location details
      for (var i = 0; i < place.address_components.length; i++) {
          if(place.address_components[i].types[0] == 'postal_code'){
              document.getElementById('postal_code').innerHTML = place.address_components[i].long_name;
          }
          if(place.address_components[i].types[0] == 'country'){
              document.getElementById('country').innerHTML = place.address_components[i].long_name;
          }
      }
      document.getElementById('location').innerHTML = place.formatted_address;
      document.getElementById('lat').innerHTML = place.geometry.location.lat();
      document.getElementById('lon').innerHTML = place.geometry.location.lng();
  });
}
</script>

</body>
</html>