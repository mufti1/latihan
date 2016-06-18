<?php
$host = "185.116.214.8";	//nama host
$user = "xrpl1";	//username phpMyAdmin
$pass = "";	//password phpMyAdmin
$name = "dbpenipu";	//nama database

$koneksi = mysql_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>