<?php
include 'dbconfig.php';
echo "To Display all data from DB";
$sql = "UPDATE user SET `Cname` = 'balaji' WHERE `Cname` = 'Balaji'";


if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn-> close();
?>