<?php

$host = "sql108.infinityfree.com";
$user = "if0_41371686";
$pass = "YOUR_DATABASE_PASSWORD";
$db   = "if0_41371686_mindmate_db";

$conn = mysqli_connect($host,$user,$pass,$db,3306);

if(!$conn){
die("Database connection failed: " . mysqli_connect_error());
}

?>