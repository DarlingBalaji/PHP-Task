<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task_curd";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
// echo "<br>";

?>