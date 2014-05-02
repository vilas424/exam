<?php
$host = "localhost";
$dbuser = "root";
$dbpass = "root";
$db = "sonia";
mysql_connect($host,$dbuser,$dbpass) or die("Cannot Connect to Database Server");
mysql_select_db($db) or die("database does not exist");
?>