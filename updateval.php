<?php
include 'dbconfig.php';

$Viewurl = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
parse_str($Viewurl, $params);
$test = $params['name'];
echo "<br>";
$Cname = $_POST['Cname'];
$Cpackage = $_POST['Cpackage'];
$Cclasstype = $_POST['Cclasstype'];
$Ctopics = $_POST['Ctopics'];
$Cexercise = $_POST['Cexercise'];
$Cattandance = $_POST['Cattandance'];
$old_date = $_POST['Cdate'];
// echo ();
$Cdate = date('d-m-y', strtotime($old_date));

echo($Cname);
echo($Cpackage);
echo($Cclasstype);
echo($Ctopics);
echo($Cexercise);
echo($Cattandance);
echo($Cdate);

// // Insert Table
$sql = "UPDATE user SET `Cname` = '$Cname' WHERE `Cname` = '$test'";


if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>