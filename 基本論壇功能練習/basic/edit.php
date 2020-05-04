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
      <td>產品名稱</td>
      <td><label for="photo_id"></label>
      <input name="photo_id" type="text" id="photo_id" value="<?php echo $row_rsedit_basic['photo_id']; ?>" /></td>
    </tr>
    <tr>
      <td>用途</td>
      <td><label for="dept"></label>
        <select name="dept" id="dept">
          <option value="飲食" <?php if (!(strcmp("飲食", $row_rsedit_basic['name']))) {echo "selected=\"selected\"";} ?>>飲食</option>
          <option value="衣服" <?php if (!(strcmp("衣服", $row_rsedit_basic['name']))) {echo "selected=\"selected\"";} ?>>衣服</option>
          <option value="住宿" <?php if (!(strcmp("住宿", $row_rsedit_basic['name']))) {echo "selected=\"selected\"";} ?>>住宿</option>
          <option value="行" <?php if (!(strcmp("行", $row_rsedit_basic['name']))) {echo "selected=\"selected\"";} ?>>行</option>
          <option value="娛樂" <?php if (!(strcmp("娛樂", $row_rsedit_basic['name']))) {echo "selected=\"selected\"";} ?>>娛樂</option>
      </select></td>
    </tr>
    <tr>
      <td>消費方式</td>
      <td><p>
        <label>
          <input <?php if (!(strcmp($row_rsedit_basic['sex'],"付現 "))) {echo "checked=\"checked\"";} ?> name="sex" type="radio" id="sex_0" value="付現 " checked="checked" />
          付現 
          <input <?php if (!(strcmp($row_rsedit_basic['sex'],"刷卡 "))) {echo "checked=\"checked\"";} ?> type="radio" name="sex" value="刷卡" id="sex_1" />
        </label>
        <label>刷卡</label>
        <br />
      </p></td>
    </tr>
    <tr>
      <td>數量</td>
      <td><label for="tel"></label>
      <input name="tel" type="text" id="tel" value="<?php echo $row_rsedit_basic['tel']; ?>" /></td>
    </tr>
    <tr>
      <td>日期</td>
      <td><input name="birthday" type="date" id="birthday" value="<?php echo date('Y-m-d'); ?>" min="1900-01-01" max="<?php echo $row_rsedit_basic['birthday']; ?>"></td>
    </tr>
    <tr>
      <td>花費</td>
      <td><label for="email"></label>
      <input name="email" type="text" id="email" value="<?php echo $row_rsedit_basic['email']; ?>" /></td>
    </tr>
    <tr>
      <td>挪用地方</td>
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