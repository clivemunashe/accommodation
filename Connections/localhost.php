<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
error_reporting(0);
$hostname_localhost = "localhost";
$database_localhost = "accommodation";
$username_localhost = "root";
$password_localhost = "";
$localhost = mysql_pconnect($hostname_localhost, $username_localhost, $password_localhost) or trigger_error(mysql_error(),E_USER_ERROR); 
?>