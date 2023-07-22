<html>
<head>

<title>PETA ULBI WIDYA</title>
    
   <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.js"></script>
    <script src="https://cdn.maptiler.com/mapbox-gl-js/v1.5.1/mapbox-gl.js"></script>
    <script src="https://cdn.maptiler.com/mapbox-gl-leaflet/latest/leaflet-mapbox-gl.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.css" />
    <link rel="stylesheet" href="https://cdn.maptiler.com/mapbox-gl-js/v1.5.1/mapbox-gl.css" />

</head>
<style>
   #map { height: 900px; }
</style>

<body>
<center>
    <div id="map"> </div>
	</center>


    <script>

var data_longitude_ulbi = 107.575763;
var data_latitude_ulbi = -6.873896;

var longitude = [data_longitude_ulbi];
var latitude = [data_latitude_ulbi];


      var map = L.map('map').setView([-6.873951, 107.575859], 6);
      var gl = L.mapboxGL({
        attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
        accessToken: 'not-needed',
        style: 'https://api.maptiler.com/maps/streets/style.json?key=1h7e1Z9S76PGy92uF3c5'
      }).addTo(map);

      var kota = ["ULBI"];

var website_ya = ["'https://www.ulbi.ac.id/'"]
     
      var array_marker = [];

for(i = 0; i < 2; i++)
{
    array_marker[i] = new L.marker([latitude[i], longitude[i]]).
    bindPopup("<center>" +"<a href = " + website_ya[i] + "target = '_blank'>"+  kota[i] +"</a>"+    "</center>" + "<br>" + "<img src ="  + "'" + i + ".png' width = '150px'>").openPopup();

array_marker[i].addTo(map);
}

      </script>

</body>

</html>