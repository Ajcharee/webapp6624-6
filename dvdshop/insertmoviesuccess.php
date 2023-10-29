<?php
require 'conn.php';
$sql_update="INSERT INTO product(product_id,product_name,detail,duration,date,actor_id) VALUES ('$_POST[product_id]','$_POST[product_name]','$_POST[detail]','$_POST[duration]' ,'$_POST[date]' ,'$_POST[actor_id]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/dvdshop/movie.php");
}

?>