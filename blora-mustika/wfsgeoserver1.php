<?php
// $wfsUrl =file_get_contents("http://geoportal.slemankab.go.id/geoserver/geonode/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=geonode:analisis_resiko_bencana_gunung_api&outputFormat=json");

# Ubah URL pada file_get_contents sesuai alamat file pada geoserver
$wfsUrl =
file_get_contents("http://localhost:8080/geoserver/Blora/wms?service=WMS&version=1.1.0&request=GetMap&layers=Blora%3Ablora&bbox=111.1065444870001%2C-7.378121597999911%2C111.62989782200002%2C-6.848866908999931&width=759&height=768&srs=EPSG%3A4326&styles=&format=application/openlayers");

header('Content-type: application/json');
echo ($wfsUrl);
# Jika terdapat &maxFeatures=50 pada url wfs geojson, dihapus supaya jumlah feature tidak dibatasi
?>