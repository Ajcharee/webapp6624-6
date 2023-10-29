<?php
require 'conn.php';
$sql_update="UPDATE member SET fname='$_POST[fname]',lname='$_POST[lname]' ,address='$_POST[address]' ,telephone='$_POST[telephone]' WHERE member_id='$_POST[member_id]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/dvdshop/mainmenu.php");
}

?>