<?php 
// 第一種連資料庫寫法
 require_once('Connections/conn_basic.php'); 
 
mysql_select_db($database_conn_basic, $conn_basic) or die ("無法選擇資料庫" . mysql_error()); // 選擇basic資料庫

$sql = "INSERT INTO logins (username, 	password, aaa) VALUES ( '$_POST[username]','$_POST[password]', '$_POST[aaa]')";  //新增資料


mysql_query($sql, $conn_basic) or die ("無法新增" . mysql_error());  //執行sql語法 

mysql_close($conn_basic); 		//關閉資料庫連結

header("location:index.php");  	//回index.php
?>