<?php
/*
$servername = "localhost";
$username = "root";
$password = "123456";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("ติดต่อฐานข้อมูลไม่ได้: " . $conn->connect_error);
}
echo "ติดต่อฐานข้อมูลสำเร็จ"; */


$conn= mysqli_connect("localhost","root","","drugdb") or die("Error: " . mysqli_error($conn));
mysqli_query($conn, "SET NAMES 'utf8' ");


?>