<?php
include 'dbconfig.php';
echo "To Display all data from DB";
$sql = "SELECT * FROM user WHERE `Cname` = 'Balaji'";

// echo $query;
echo "<b> <center>Database Output</center> </b> <br> <br>";

$result = $conn->query($sql);
// echo($result);
// if ($result->num_rows > 0) {

    while ($rows = $result->fetch_assoc() ) {
        $fieldname = $rows['Cdate'];
        $field1name = $rows['Cname'];
        $field2name = $rows['Cpackage'];
        $field3name = $rows['Cclasstype'];
        $field4name = $rows['Ctopics'];
        $field5name = $rows['Cexercise'];
        $field6name = $rows['Cattandance'];

        echo '<b>'.$field1name.$field2name.'</b><br />';
        echo $field3name.'<br />';
        echo $field4name.'<br />';
        echo $field5name.'<br />';
        echo $field6name;
        echo date('d-m-y', strtotime($fieldname));
    }

$conn-> close();
// } else {
// 	echo "No records found";	
// }

$id = isset($_GET["name"]) ? $_GET["name"] : false;
echo ($id);

?>