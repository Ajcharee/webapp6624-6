<?php
if(!isset($_GET['member_id'])){
    header("refresh: 0; url=http://localhost/dvdshop/mainmenu.php");
}
require 'conn.php';
$sql = "SELECT * FROM member WHERE member_id ='$_GET[member_id]'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="editsuccess.php">
        <p>

            <label for="member_id">ID</label>
            <input type="text" name="member_id" id="member_id" value="<?=$row['member_id'];?>" disabled>

        </p>
        <p>

            <label for="fname">ชื่อ</label>
            <input type="text" name="member_id" id="member_id" value="<?=$row['member_id'];?>" hidden>
            <input type="text" name="fname" id="fname" value="<?=$row['fname'];?>" />

        </p>

        <p>

            <label for="lname">นามสกุล</label>

            <input type="text" name="lname" id="lname" value="<?=$row['lname'];?>" />

        </p>

        <p>

            <label for="address">ที่อยู่</label>

            <input type="text" name="address" id="address" value="<?=$row['address'];?>" />

        </p>

        <p>

            <label for="telephone">เบอร์โทร</label>

            <input type="text" name="telephone" id="telephone" value="<?=$row['telephone'];?>" />

        </p>

        
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmenu.php'>Home</a>
    </form>
</body>

</html>