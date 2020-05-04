<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>sign_out.php</title>
</head>
<body>
<?php
session_start();  // 啟用交談期
// 檢查Session變數是否存在, 表示是否已成功登入
$_SESSION["signin"] = ture;
header("location:index.php");  	//回index.php

?>
</body>
</html>