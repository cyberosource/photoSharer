<?php
	ob_start();
	session_start();
//$con = mysqli_connect("localhost","my_user","my_password","my_db");
//mysqli_connect(host,username,password,dbname,port,socket);
	date_default_timezone_set(“Europe/London”);
	$connection = mysqli_connect("localhost", "cyberome_photo", "ph0t05har3", "cyberome_xpertmon_photoshare") or die("Error In Connection.");
/*
u:	cyberome_photo
p:	ph0t05har3

*/
?>	