<?php
include 'dbconfig.php';
echo "To Display all data from DB";
$Viewurl = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
parse_str($Viewurl, $params);
$test = $params['name'];
echo "<br>";
$sql = "SELECT * FROM user WHERE `Cname` = '$test'";

// echo $query;
echo "<b> <center>Database Output</center> </b> <br> <br>";

$result = $conn->query($sql);
// echo($result);
if ($result->num_rows > 0) {

    while ($rows = $result->fetch_assoc() ) {
        $fieldname = $rows['Cdate'];
        $field1name = $rows['Cname'];
        $field2name = $rows['Cpackage'];
        $field3name = $rows['Cclasstype'];
        $field4name = $rows['Ctopics'];
        $field5name = $rows['Cexercise'];
        $field6name = $rows['Cattandance'];

        echo '<b>'.$field1name.'</b><br />';
        echo $field2name. '<br />';
        echo $field3name.'<br />';
        echo $field4name.'<br />';
        echo $field5name.'<br />';
        echo $field6name.'<br/>';
        echo date('d-m-y', strtotime($fieldname));
        echo "<br/><br/>";
    }
} else {
    echo "No records Founded";
}
$conn-> close();

// $id = isset($_GET["name"]) ? $_GET["name"] : false;
// echo ($id);

?>