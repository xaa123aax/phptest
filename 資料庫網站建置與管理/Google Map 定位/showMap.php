<?php
$lat = $_GET["lat"];  // 取得URL參數值
$lon = $_GET["lon"];    
$scale = $_GET["scale"];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>showMap.php</title>
<style type="text/css">
html { height: 100% }
body { height: 100%; margin: 0px; padding: 0px }
#map_canvas { height: 100% }
</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1CzW-NNin88Egt6i7vyeIAOl4650btn0&callback=initMap"></script>
<script src="jquery-2.2.0.min.js"></script>
<script>
var map;
$(document).ready(function () {
    // 取得地圖的div標籤物件
    var myCanvas = document.getElementById("map_canvas");
    // 建立座標物件
    var myLatlng = new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $lon; ?>);
    // 建立地圖參數
    var myOptions = {
        zoom: <?php echo $scale; ?>,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    // 建立地圖物件
    map = new google.maps.Map(myCanvas, myOptions);
    var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
	  
      title: '在這裡!'
	  
    });
});
</script>

</head>
<body>
<div id="map_canvas" style="width:100%; height:100%"></div>
</body>
</html>