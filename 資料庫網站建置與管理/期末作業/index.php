PHP 線上報帳系統<p align="right"><?php require_once('Connections/conn_basic.php'); 
mysql_select_db($database_conn_basic, $conn_basic);
session_start();  // 啟用交談期
$sql = "SELECT * FROM activity";
$rs_basic = mysql_query($sql, $conn_basic) or die(mysql_error()); //執行SQL指令
$row_rs_basic = mysql_fetch_assoc($rs_basic);    // 抓取資料庫的值
$totalRows_rs_basic = mysql_num_rows($rs_basic); // 抓取資料庫有幾筆
if($_SESSION["signin"] == false){
	echo "未登入"; 
	$img5='887'.'.png';
 }
	
else{
	echo "您好" . $_SESSION['user1'] ;
	 $img5=$_SESSION['user1'].'.png'; 
	
	}
	 

?></p> 
<p align="right"><img src="<?php echo "upload/" . $img5 ?>" width="200" height="200" /></p> 




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<hr />
<p>[<a href="eadd.php">新增帳號</a>]</p>
<p>[<a href="add.php">新增資料</a>]</p>
<p>[<a href="show.php?p=1">查詢資料</a>]</p>
<p>[<a href="admin.php">管理資料</a>]</p>
<p>[<a href="login.php">登入帳號</a>]</p>
<p>[<a href="sign_out.php">登出帳號</a>]</p>
<hr />
<p>Copyright(C)2018 All rights Reserved ADT105112 邱奕畯 </p>
</body>
</html>