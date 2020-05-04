<?php require_once('Connections/conn_basic.php'); ?>
<?php
mysql_select_db($database_conn_basic, $conn_basic);
$myid = trim($_GET['id']); // 取得admin.php網頁傳來的id值，並去除前後空白
$query_rsedit_basic = "SELECT * FROM activity where id = '$myid'";
$rsedit_basic = mysql_query($query_rsedit_basic, $conn_basic) or die(mysql_error());
$row_rsedit_basic = mysql_fetch_assoc($rsedit_basic);
$totalRows_rsedit_basic = mysql_num_rows($rsedit_basic);  // 取得資料列數
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<img src="images/edit-logo.png" width="124" height="159" />修改資料
<hr />
<form id="form1" name="form1" method="post" action="doedit.php">
  <table width="582" border="1">
    <tr>
      <td width="170">姓名</td>
      <td width="396"><label for="name"></label>
      <input name="name" type="text" id="name" value="<?php echo $row_rsedit_basic['name']; ?>" /></td>
    </tr>
    <tr>
      <td>身分證字號</td>
      <td><label for="photo_id"></label>
      <input name="photo_id" type="text" id="photo_id" value="<?php echo $row_rsedit_basic['photo_id']; ?>" /></td>
    </tr>
    <tr>
      <td>科系</td>
      <td><label for="dept"></label>
        <select name="dept" id="dept">
          <option value="數位系" <?php if (!(strcmp("數位系", $row_rsedit_basic['name']))) {echo "selected=\"selected\"";} ?>>數位系</option>
          <option value="資工系" <?php if (!(strcmp("資工系", $row_rsedit_basic['name']))) {echo "selected=\"selected\"";} ?>>資工系</option>
          <option value="科教系" <?php if (!(strcmp("科教系", $row_rsedit_basic['name']))) {echo "selected=\"selected\"";} ?>>科教系</option>
          <option value="數教系" <?php if (!(strcmp("數教系", $row_rsedit_basic['name']))) {echo "selected=\"selected\"";} ?>>數教系</option>
      </select></td>
    </tr>
    <tr>
      <td>性別</td>
      <td><p>
        <label>
          <input <?php if (!(strcmp($row_rsedit_basic['sex'],"男"))) {echo "checked=\"checked\"";} ?> name="sex" type="radio" id="sex_0" value="男" checked="checked" />
          男
          <input <?php if (!(strcmp($row_rsedit_basic['sex'],"女"))) {echo "checked=\"checked\"";} ?> type="radio" name="sex" value="女" id="sex_1" />
        </label>
        <label>女</label>
        <br />
      </p></td>
    </tr>
    <tr>
      <td>電話</td>
      <td><label for="tel"></label>
      <input name="tel" type="text" id="tel" value="<?php echo $row_rsedit_basic['tel']; ?>" /></td>
    </tr>
    <tr>
      <td>生日</td>
      <td><input name="birthday" type="date" id="birthday" value="<?php echo date('Y-m-d'); ?>" min="1900-01-01" max="<?php echo $row_rsedit_basic['birthday']; ?>"></td>
    </tr>
    <tr>
      <td>EMAIL</td>
      <td><label for="email"></label>
      <input name="email" type="text" id="email" value="<?php echo $row_rsedit_basic['email']; ?>" /></td>
    </tr>
    <tr>
      <td>地址</td>
      <td><label for="addr"></label>
      <input name="addr" type="text" id="addr" value="<?php echo $row_rsedit_basic['addr']; ?>" /></td>
    </tr>
  </table>
  <p>
    <input type="submit" name="button" id="button"  value="確定修改" />
    <input type="reset" name="button2" id="button2" value="重設" />
    
 
        <input type ="button" onclick="history.back()" value="回到上一頁"></input>


    <input name="id" type="hidden" id="id" value="<?php echo $_GET['id']; ?>" />
  </p>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<hr />
<p>Copyright(C)2018 All rights Reserved ADT105112 邱奕畯 </p>
</body>
</html>