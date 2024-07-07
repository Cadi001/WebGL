<?php 
session_start();
date_default_timezone_set("Asia/Manila");
set_time_limit(0);
$conn = mysqli_connect("localhost", "root", "", "ihopperDB");
mysqli_set_charset( $conn, 'utf8');
mysqli_set_charset( $conn, 'utf8');
if (!$conn) {
	die("connection failed: " . mysqli_connect_errno());
	die("connection failed: " . mysqli_connect_error());
}