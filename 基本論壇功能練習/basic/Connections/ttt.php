<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_ttt = "localhost";
$database_ttt = "basic";
$username_ttt = "root";
$password_ttt = "1234";
$ttt = mysql_pconnect($hostname_ttt, $username_ttt, $password_ttt) or trigger_error(mysql_error(),E_USER_ERROR); 
?>