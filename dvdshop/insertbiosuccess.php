<?php
require 'conn.php';
$sql_update="INSERT INTO member(member_id,fname,lname,address,telephone) VALUES ('$_POST[member_id]','$_POST[fname]','$_POST[lname]' ,'$_POST[address]' ,'$_POST[telephone]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/dvdshop/mainmenu.php");
}

?>