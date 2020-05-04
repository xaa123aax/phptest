
<?php 
// 第一種連資料庫寫法
require_once('Connections/conn_basic.php'); ?>
<?php

// 第一種資料庫寫法
//mysql_select_db($database_conn_basic, $conn_basic);

mysql_select_db($database_conn_basic, $conn_basic) or die ("無法選擇資料庫" . mysql_error()); // 選擇basic資料庫

$sql = "UPDATE `activity` SET `name` = '$_POST[name]', `photo_id` = '$_POST[photo_id]', `dept` = '$_POST[dept]', `sex` = '$_POST[sex]', `tel` = '$_POST[tel]', `birthday` = '$_POST[birthday]', `email` = '$_POST[email]', `addr` = '$_POST[addr]' WHERE `activity`.`id` = '$_POST[id]'";


mysql_query($sql, $conn_basic) or die ("無法新增" . mysql_error());  //執行sql語法

mysql_close($conn_basic); 	//關閉資料庫連結
header("location:admin.php");  	//回index.php
?>