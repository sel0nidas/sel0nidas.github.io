<?php 

$servername = "localhost"; $username = "adminpanelblogtest"; $password = "r83^u1Tz"; $dbname = "panel";
@session_start(); 
error_reporting(E_ALL ^ E_NOTICE);
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); } 
mysqli_query($conn,"SET NAMES UTF8"); 
date_default_timezone_set('Etc/GMT-3');



?>