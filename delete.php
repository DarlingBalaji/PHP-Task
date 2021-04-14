<?php
include 'dbconfig.php';
$Viewurl = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
parse_str($Viewurl, $params);
$test = $params['name'];
echo "<br>";
$sql = "DELETE FROM user WHERE `Cname` = '$test'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn-> close();

?>