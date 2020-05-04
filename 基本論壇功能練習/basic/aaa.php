<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
帳號註冊
<hr />
<form id="form1" name="form1" method="post" action="doaaa.php">
  <table width="582" border="1">
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
          <td>檔案</td>
      <td><input type="file" name="myfile" id="myfile" /></td>
    </tr>
  </table>
  <p>
    <input type="submit" name="button" id="button" value="確定註冊" />
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