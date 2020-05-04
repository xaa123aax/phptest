<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>index.php</title>
<?php
if (isset($_POST["send"])) { // 判斷是否是表單送回
   $lat = $_POST["lat"];     // 取得欄位值
   $lon = $_POST["lon"];
   $scale = $_POST["scale"];
   if (!empty($lat) && !empty($lon)&& !empty($scale)) {  // 有輸入資料
       $para = "lat=" . $lat . "&lon=" . $lon . "&scale=" . $scale;
       header("Location: showMap.php?" . $para);
   }
   else {
       $result = "輸入的經緯度座標錯誤...";
   }
}
else $result = "請輸入經緯度座標以及放大倍率";   
?>
</head>
<body>
<form method="post" action="">
    <p>緯度: 
    <input type="text" name="lat" id="lat" value="25.0471"/></p>
    <p>經度: 
    <input type="text" name="lon" id="lon" value="121.5165"/></p>
	<p>倍率: 
    <input type="text" name="scale" id="scale" value="15"/></p>
    <input type="submit" name="send" value="顯示地圖"/>
</form><hr/>
<?php echo $result ?>
</body>
</html>
