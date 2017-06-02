<?php
$host="localhost";
$user="root";
$password="";
$database="bd";

$con= mysqli_connect($host, $user, $password, $database) or die("can not connect");
mysqli_select_db($con, $database) or die("DB not selected");

?>