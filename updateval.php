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
echo '</br>';
echo($Cpackage);
echo '</br>';
echo($Cclasstype);
echo '</br>';
echo($Ctopics);
echo '</br>';
echo($Cexercise);
echo '</br>';
echo($Cattandance);
echo '</br>';
echo($Cdate);
echo '</br>';

// // Insert Table
$sql = "UPDATE user SET Cname = '".$Cname."',Cpackage = '".$Cpackage."',Cclasstype = '".$Cclasstype."',Ctopics = '".$Ctopics."',Cattandance = '".$Cattandance."',Cexercise = '".$Cexercise."' WHERE `Cname` = '$test'";


if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: </br>". $conn->error;
}

$conn->close();

?>