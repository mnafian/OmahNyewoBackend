<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "yiiproject";
$koneksi = mysql_connect($server, $username, $password) or die("Error mysql said : ".  mysql_errno());
mysql_select_db($database,$koneksi) or die("mysql error said : ".  mysql_error());
?>

