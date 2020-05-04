<?php require_once('Connections/conn_basic.php'); 
mysql_select_db($database_conn_basic, $conn_basic);
session_start();  // 啟用交談期	
$sql = "SELECT * from activity";
$rs_basic = mysql_query($sql, $conn_basic) or die(mysql_error()); //執行SQL指

$totalRows_rs_basic = mysql_num_rows($rs_basic); // 抓取資料庫有幾
$number=4;

$p=$_GET['p'];
if($p == ''){
 $p=1;
}
	   
$start=($p-1)*$number;

$rs_basic=mysql_query("select * from activity limit $start, $number");
$row_rs_basic = mysql_fetch_assoc($rs_basic);    // 抓取資料庫的值
$pages=ceil($totalRows_rs_basic/$number);

if($_SESSION["signin"] == false){
	echo "未登入"; 
	 header("Location: logincheck.php");}
else{
	echo "登入中";
	}
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<table width="521" border="0">
  <tr>
    <td width="231"><img src="images/LOGO.jpg" width="231" height="126" /></td>
    <td width="280">PHP報名系統</td>
  </tr>
</table>
<hr />
<table width="1357" height="56" border="1">
  <tr>
    <td>id</td>
    <td>姓名</td>
    <td>產品名稱</td>
    <td>用途</td>
    <td>消費方式</td>
    <td>數量</td>
    <td>日期</td>
    <td>花費</td>
    <td>挪用地方</td>
  </tr>
  
  


  
  <?php do { ?>
  
  
    <tr> 
 
    <td> <?php echo $row_rs_basic['id']; ?></td>
    <td> <?php echo $row_rs_basic['name']; ?></td>
    <td> <?php echo $row_rs_basic['photo_id']; ?></td>
    <td> <?php echo $row_rs_basic['dept']; ?></td>
    <td> <?php echo $row_rs_basic['sex']; ?></td>
    <td> <?php echo $row_rs_basic['tel']; ?></td>
    <td> <?php echo $row_rs_basic['birthday']; ?></td>
    <td> <?php echo $row_rs_basic['email']; ?></td>
    <td> <?php echo $row_rs_basic['addr']; ?></td>
  </tr>
  
  <?php } while ($row_rs_basic = mysql_fetch_assoc($rs_basic)); ?>
</table>

<p align="center">
<?php
for($i=1;$i<=$pages;$i++){
	
 echo "<a href=show.php?p=$i>$i</a>";
}
?>
</p>

<p align="center">第<?php echo $p?>頁/共有<?php echo $pages?>頁</p>
<p align="center"><?php echo "總共資料有 " . $totalRows_rs_basic . "筆" ?></p>
<p>[<a href="index.php">回主頁</a>]</p>

<p>&nbsp; </p>
</body>
</html>