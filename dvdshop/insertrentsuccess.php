<?php
require 'conn.php';
$sql_update="INSERT INTO member_buy(product_id,member_id) VALUES ('$_POST[product_id]','$_POST[member_id]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/dvdshop/rent.php");
}

?>