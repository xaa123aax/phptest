
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>


<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
</head>

<body>
<p>數位系E-Portfolio 系統 上傳資料</p>
<hr />

<form action="upload.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="446" border="1">
    <tr>
      <td width="170">帳號</td>
      <td width="396"><label for="username"></label>
      <input name="username" type="text" id="username" value="username1" /></td>
    </tr>
    <tr>
      <td>密碼</td>
      <td><label for="password"></label>
      <input name="password" type="text" id="password" value="password1" /></td>
    </tr>

      <td><p>大頭照</p>
        <p>(1*1)</p></td>
      <td><input type="file" name="myfile" id="myfile" /></td>
    </tr>
    <tr>
      <td>備註</td>
      <td><textarea name="content" id="content" cols="45" rows="5"></textarea></td>
    </tr>

    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="送出" />
      <input type="reset" name="button2" id="button2" value="重設" /></td>
    </tr>
  </table>
</form>
<p>[<a href="index.php">回主頁</a>]</p>
<hr />
<p>Copyright(C)2018 All rights Reserved ADT105112 邱奕畯 </p>
<p>&nbsp;</p>
</body>
</html>