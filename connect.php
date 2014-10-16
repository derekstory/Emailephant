<?php
session_start();
$hostname = "127.0.0.1";
$username = "root";
$dbname = "email";
$password = "Stop!b4ubmh";

mysql_connect($hostname, $username, $password) OR DIE ("Unable to
connect to database! Please try again later.");
mysql_select_db($dbname);
?>
       