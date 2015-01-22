<?php
session_start();
$hostname = "97.74.31.80";
$username = "emailephant";
$dbname = "emailephant";
$password = "Stop!b4ubmh";

mysql_connect($hostname, $username, $password) OR DIE ("Unable to
connect to database! Please try again later.");
mysql_select_db($dbname);
?>
      