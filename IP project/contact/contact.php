<!DOCTYPE html>
<html>

<head>

    <head>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />

        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
        <link rel="stylesheet" href="main.css" type="text/css">

        <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
        <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet' />
    </head>
<style>
body {
    background-color:black;
}
</style>
<body>


    <div id='map' style="margin:5% 0 0 25%; width: 500px; height: 500px;"></div>

    <script>
        var map = L.map('map');

        map.addControl(new L.Control.Fullscreen({
            title: {
                'false': 'View Fullscreen',
                'true': 'Exit Fullscreen'
            }
        }));

        map.setView([19.15244092423333, 72.98859716429641], 16);

        const myBasemap = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
            opacity: 0.5,
        });
        myBasemap.addTo(map);
            address = L.marker([19.15244092423333, 72.98859716429641]).bindPopup('homes');
            address.addTo(map);
      
        var baseLayer = {
            "OpenStreetMap": myBasemap,
        };

        L.control.layers(baseLayer).addTo(map);
     
    </script>
</div>
</body>

</html>
