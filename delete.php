<?php
include 'dbconfig.php';
echo "To Display all data from DB";
$sql = "DELETE FROM user WHERE `Cname` = 'Mathu'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn-> close();

?>