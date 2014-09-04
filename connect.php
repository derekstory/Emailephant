<?php
session_start();
$hostname = "127.0.0.1";
$username = "root";
$dbname = "goals";
$password = "Stop!b4ubmh";

mysqli_connect($hostname, $username, $password) OR DIE ("Unable to
connect to database! Please try again later.");
mysql_select_db($dbname);
?>
       