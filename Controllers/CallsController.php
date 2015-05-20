<?php

include('mysql_inc.php');

$data = $_POST['data'];



$data = file_get_contents('php://input');
$obj = json_decode($data, TRUE);



$sql = "INSERT INTO calls VALUES('$CustomerID','$ProductID', '$TechnicianID', '$CallDesc', $Date)";

if($result = mysql_query($sql, MYSQL_ASSOC)){
    $msg = "insert successful";
}else{
    $msg = "insert failed";
}

echo $msg;
echo "this is a test";
echo $data;

?>

