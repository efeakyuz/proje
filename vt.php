<?php
error_reporting(0);
$con = new mysqli("localhost","root","","mydb");
if ($con->connect_errno) {
	echo "Bağlantı kurulamadı <br>";
	echo $con->connect_error;
}
$con->set_charset("utf8");
?>