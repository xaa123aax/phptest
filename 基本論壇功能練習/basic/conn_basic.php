<?php

$hostname_conn_basic = "localhost"; //本機
$database_conn_basic = "basic"; // 要連線的資料表名稱
$username_conn_basic = "root"; // 連入的帳號
$password_conn_basic = "1234"; // 連入的密碼


// 方法一
$conn_basic = mysql_pconnect($hostname_conn_basic, $username_conn_basic, $password_conn_basic) or trigger_error(mysql_error(),E_USER_ERROR);  

// 方法二
//$conn_basic  =mysqli_connect($hostname_conn_basic, $username_conn_basic, $password_conn_basic) or die("無法連接" . mysql_error());  // 建立MySQL的資料庫連結

mysql_query("SET NAMES utf8"); // 記得加上這一行，設定資料庫編碼
?>