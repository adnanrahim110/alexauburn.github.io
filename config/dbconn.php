<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "wendy";

// $host = "localhost:3306";
// $user = "amzpnvbe_alexauburn";
// $pass = "alex_wendy";
// $dbname = "amzpnvbe_alexauburn";

$conn = mysqli_connect($host, $user, $pass, $dbname);
$conn->query("SET time_zone = '+00:00'");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
