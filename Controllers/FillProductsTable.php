<?php
$link = mysql_connect("localhost", "root", "qxwcs6RT");
mysql_select_db("entellihelp", $link);

$sql = "SELECT * FROM products";

$result = mysql_query($sql, $link);
echo"<table class='table table-bordered table-hover table-condensed'>";
echo"            <tr>";
echo"                <th>Product ID</th>";
echo"                <th>Product Name</th>";
echo"                <th>Product Type</th>";
echo"            </tr>";


while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
    echo"            <tr>";
    echo"            <td>" .$row['ProductID']   . "</td>";
    echo"            <td>" .$row['ProductName']   . "</td>";
    echo"           <td>" .$row['ProductType']   . "</td>";
    echo"        </tr>";
}

echo "</table>";

