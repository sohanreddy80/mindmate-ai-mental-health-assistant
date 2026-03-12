<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "mental_health_ai"; // Change this if your DB name is different

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$doctor = $_POST['doctor'];
$date = $_POST['preferred_date'];
$message = $_POST['message'];

$sql = "INSERT INTO appointments (name, email, phone, doctor, preferred_date, message)
        VALUES ('$name', '$email', '$phone', '$doctor', '$date', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Appointment Booked Successfully!'); window.location.href='index.html';</script>";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
