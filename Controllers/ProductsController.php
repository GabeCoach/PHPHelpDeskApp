<?php

$link = mysql_connect("localhost", "root", "qxwcs6RT");
mysql_select_db("entellihelp", $link);

$data = $_POST['ProdData'];




$data = file_get_contents('php://input');
$obj = json_decode($data);
echo $data;

$productname = $obj->{'ProductName'};
$producttype = $obj->{'ProductType'};

$sql = "INSERT INTO products ( ProductName, ProductType) VALUES('$productname', '$producttype')";
echo $sql;
if($result = mysql_query($sql, $link)){
    $msg = "insert successful...";
}else{
    $msg = "insert failed...";
}

//echo $msg;
//echo "this is a test";
//echo $data;

?>