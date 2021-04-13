<?php
include 'dbconfig.php';
 



$Cname = $_POST['Cname'];
$Cpackage = $_POST['Cpackage'];
$Cclasstype = $_POST['Cclasstype'];
$Ctopics = $_POST['Ctopics'];
$Cexercise = $_POST['Cexercise'];
$Cattandance = $_POST['Cattandance'];
$Cdate = $_POST['Cdate'];

echo($Cname);
echo($Cpackage);
echo($Cclasstype);
echo($Ctopics);
echo($Cexercise);
echo($Cattandance);
echo($Cdate);



// // Insert Table
$sql = "INSERT INTO user (Cdate, Cname, Cpackage, Cclasstype, Ctopics, Cexercise, Cattandance)
VALUES ('$Cdate', '$Cname', '$Cpackage', '$Cclasstype', '$Ctopics', '$Cexercise', '$Cattandance')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  echo "<br>";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>