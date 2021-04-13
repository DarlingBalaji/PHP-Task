<?php
include 'dbconfig.php';
$sql = "DELETE FROM user WHERE `Cname` = 'John'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn-> close();

?>