<?php if($_SESSION["signin"] == false){
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
新增花費資料
<hr />
<form id="form1" name="form1" method="post" action="doadd.php">
  <table width="582" border="1">
    <tr>
      <td width="170">姓名</td>
      <td width="396"><label for="name"></label>
      <input name="name" type="text" id="name" value="我" /></td>
    </tr>
    <tr>
      <td>產品名稱</td>
      <td><label for="photo_id"></label>
      <input name="photo_id" type="text" id="photo_id" value="飲料" /></td>
    </tr>
    <tr>
      <td>用途</td>
      <td><label for="dept"></label>
        <select name="dept" id="dept">
          <option value="飲食">飲食</option>
          <option value="衣服">衣服</option>
          <option value="住宿">住宿</option>
          <option value="行">行</option>
           <option value="娛樂">娛樂</option>

      </select></td>
    </tr>
    <tr>
      <td>消費方式</td>
      <td><p>
        <label>
          <input name="sex" type="radio" id="sex_0" value="付現" checked="checked" />
          付現</label>
        <br />
        <label>
          <input type="radio" name="sex" value="刷卡" id="sex_1" />
          刷卡</label>
        <br />
      </p></td>
    </tr>
    <tr>
      <td>數量</td>
      <td><label for="tel"></label>
      <input name="tel" type="text" id="tel" value="1" /></td>
    </tr>
    <tr>
      <td>日期</td>
      <td><label for="birthday"></label>
        <input name="birthday" type="date" id="birthday" value="<?php echo date('Y-m-d'); ?>" min="1900-01-01" max="<?php echo $row_rsedit_basic['birthday']; ?>" />
      </td>
    </tr>
    <tr>
      <td>花費</td>
      <td><label for="email"></label>
      <input name="email" type="text" id="email" value="35" /></td>
    </tr>
    <tr>
      <td>挪用地方</td>
      <td><label for="addr"></label>
      <input name="addr" type="text" id="addr" value="生活費" /></td>
    </tr>
    
  </table>
  <p>
    <input type="submit" name="button" id="button" value="確定新增" />
    <input type="reset" name="button2" id="button2" value="重設" />
    <input type ="button" onclick="history.back()" value="回到上一頁">
    <input type="hidden" name="id" id="id" />
  </p>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<hr />
<p>Copyright(C)2018 All rights Reserved ADT105112 邱奕畯 </p>
</body>
</html>