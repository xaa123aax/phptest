<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>login.php</title>
</head>
<body>




<?php


   
session_start();  // 啟用交談期
if ( !isset($_POST["Verif"]) )
{
$_SESSION['verification '] = rand ( 0 , 9 );
$img=$_SESSION['verification '].'.GIF';
}



$username = "";  $password = "";   $verif="";
// 取得表單欄位值
if ( isset($_POST["Username"]) )
   $username = $_POST["Username"];
if ( isset($_POST["Password"]) )
   $password = $_POST["Password"];
if ( isset($_POST["Verif"]) )
   $verif = $_POST["Verif"];


  

// 檢查是否輸入使用者名稱和密碼
if ($username != "" && $password != "") {
   // 建立MySQL的資料庫連接 
   $link = mysqli_connect("localhost","123",
                          "1234","myschool")  
        or die("無法開啟MySQL資料庫連接!<br/>");
   //送出UTF8編碼的MySQL指令
   mysqli_query($link, 'SET NAMES utf8'); 
   
   

   
   // 建立SQL指令字串
$sql="SELECT * FROM students WHERE `password`='$password' AND `username`='$username'";


   // 執行SQL查詢
   $result = mysqli_query($link, $sql);
   $total_records = mysqli_num_rows($result);
   // 是否有查詢到使用者記錄
   


   
   if ( $total_records > 0 && $_SESSION['verification ']==$verif ) {
      // 成功登入, 指定Session變數

      $_SESSION["login_session"] = true;
      header("Location: index.php");
   } else {  // 登入失敗
$_SESSION['verification '] = rand ( 0 , 9 );
$img=$_SESSION['verification '].'.GIF';
      echo "<center><font color='red'>";
      echo "使用者名稱或密碼錯誤!<br/>";echo "使用者名稱或密碼錯誤!<br/>";
      echo "</font>";

      $_SESSION["login_session"] = false;
   }
   mysqli_close($link);  // 關閉資料庫連接  
}



?>






<form action="login.php" method="post">
<table align="center" bgcolor="#FFCC99">
 <tr><td><font size="2">使用者名稱:</font></td>
   <td><input type="text" name="Username" 
             size="15" maxlength="10"/>
   </td></tr>
 <tr><td><font size="2">使用者密碼:</font></td>
   <td><input type="password" name="Password"
              size="15" maxlength="10"/>
   </td>
   <tr><td><font size="2">驗證碼:</font>    <p><img src="<?php echo "images/" . $img ?>" width="50" height="50" /></p></td>

   <td><input type="text" name="Verif"
              size="15" maxlength="10"/>
   </td>
   
   
   
   </tr>
  

  

   
   
 <tr><td colspan="2" align="center">
   <input type="submit" value="登入網站"/>
   </td></tr> 
</table>
</form>
</body>
</html>