<?php
session_start();
$user = "root";
$pass = "";
$host = "localhost";
$db = "git";

$connect = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($db, $connect) or die(mysql_error());
?>