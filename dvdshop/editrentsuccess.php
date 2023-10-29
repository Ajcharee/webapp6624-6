<?php
require 'conn.php';
$sql_update="UPDATE member_buy SET member_id='$_POST[member_id]',product_id='$_POST[product_id]' WHERE rent_id='$_POST[rent_id]'";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/dvdshop/rent.php");
}

?>