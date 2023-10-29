<?php
require 'conn.php';
$sql_update="UPDATE product SET product_name='$_POST[product_name]',detail='$_POST[detail]' ,duration='$_POST[duration]' ,date='$_POST[date]' WHERE product_id='$_POST[product_id]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/dvdshop/movie.php");
}

?>