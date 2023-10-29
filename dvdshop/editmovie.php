<?php
if(!isset($_GET['product_id'])){
    header("refresh: 0; url=http://localhost/dvdshop/movie.php");
}
require 'conn.php';
$sql = "SELECT * FROM product p JOIN actors a ON (a.actor_id = p.actor_id) WHERE product_id ='$_GET[product_id]'";
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
    <form id="form1" name="form1" method="post" action="editmoviesuccess.php">
        <p>

            <label for="product_id">ID</label>
            <input type="text" name="product_id" id="product_id" value="<?=$row['product_id'];?>" disabled>

        </p>
        <p>

            <label for="product_name">ชื่อเรื่อง</label>
            <input type="text" name="product_id" id="product_id" value="<?=$row['product_id'];?>" hidden>
            <input type="text" name="product_name" id="product_name" value="<?=$row['product_name'];?>" />

        </p>

        <p>

            <label for="detail">เรื่องย่อ</label>

            <input type="text" name="detail" id="detail" value="<?=$row['detail'];?>" />

        </p>

        <p>

            <label for="duration">ระยะเวลา</label>

            <input type="text" name="duration" id="duration" value="<?=$row['duration'];?>" />

        </p>

        <p>

            <label for="date">วันที่</label>

            <input type="date" name="date" id="date" value="<?=$row['date'];?>" />

        </p>

        <p>

            <label for="date">นักแสดง</label>
            <input type="text" name="actor_id" id="actor_id" value="<?=$row['actor_id'];?>" hidden>
            <input type="text" name="actor_fname" id="actor_fname" value="<?=$row['actor_fname'];?>" disabled>
            <input type="text" name="actor_lname" id="actor_lname" value="<?=$row['actor_lname'];?>" disabled>

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='movie.php'>Movie</a>
    </form>
</body>

</html>