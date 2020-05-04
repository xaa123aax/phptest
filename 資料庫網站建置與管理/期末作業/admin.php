<?php require_once('Connections/conn_basic.php'); 
mysql_select_db($database_conn_basic, $conn_basic);
session_start();  // 啟用交談期
$sql = "SELECT * FROM activity";
$rs_basic = mysql_query($sql, $conn_basic) or die(mysql_error()); //執行SQL指令
$row_rs_basic = mysql_fetch_assoc($rs_basic);    // 抓取資料庫的值
$totalRows_rs_basic = mysql_num_rows($rs_basic); // 抓取資料庫有幾筆
echo $_SESSION["signaaa"];
if($_SESSION["signin"] == false){
	 header("Location: login.php");}
else{
	echo "登入中";
	}
	if( $_SESSION["signaaa"] != 1){ header("Location: logincheck.php");}

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
<table width="1321" height="56" border="1">
  <tr>
    <td width="102">id</td>
    <td width="129">姓名</td>
    <td width="157">產品名稱</td>
    <td width="129">用途</td>
    <td width="114">消費方式</td>
    <td width="106">數量</td>
    <td width="150">日期</td>
    <td width="128">花費</td>
    <td width="124">挪用地方</td>
    <td width="60">編輯</td>
    <td width="52">刪除</td>
  </tr>

 
  <?php do { ?>
    <tr>
    <td> <?php echo $row_rs_basic['id']; ?></td>
    <td> <a href="edit.php?id=<?php echo $row_rs_basic['id']; ?>"><?php echo $row_rs_basic['name']; ?></a></td>
    <td> <?php echo $row_rs_basic['photo_id']; ?></td>
    <td> <?php echo $row_rs_basic['dept']; ?></td>
    <td> <?php echo $row_rs_basic['sex']; ?></td>
    <td> <?php echo $row_rs_basic['tel']; ?></td>
    <td> <?php echo $row_rs_basic['birthday']; ?></td>
    <td> <?php echo $row_rs_basic['email']; ?></td>
    <td><?php echo $row_rs_basic['addr']; ?></td>
    <td><a href="edit.php?id=<?php echo $row_rs_basic['id']; ?>"><img src="images/edit-logo.png" width="55" height="70" /></a></td>
    <td><a href="del.php?id=<?php echo $row_rs_basic['id']; ?>"><img src="images/DEL-logo.png" width="56" height="78" /></a></td>
  </tr>
  
  <?php } while ($row_rs_basic = mysql_fetch_assoc($rs_basic)); ?>
</table> 


<pre><?php echo "總共資料有 " . $totalRows_rs_basic . "筆" ?></pre>
<p>[<a href="index.php">回主畫面</a>]</p>
<p>&nbsp;	 </p>
</body>
</html>