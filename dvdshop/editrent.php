<?php
if(!isset($_GET['rent_id'])){
    header("refresh: 0; url=http://localhost/dvdshop/rent.php");
}
require 'conn.php';
$sql = "SELECT * FROM member_buy r JOIN product p ON (r.product_id = p.product_id)
                                       JOIN member m ON (r.member_id = m.member_id)
        WHERE rent_id ='$_GET[rent_id]'";
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
    <form id="form1" name="form1" method="post" action="editrentsuccess.php">
        <p>

            <label for="rent_id">Rent ID</label>
            <input type="text" name="rent_id" id="rent_id" value="<?=$row['rent_id'];?>" disabled>

        </p>
        <p>

            <label for="member_id">Member ID</label>
            <input type="text" name="rent_id" id="rent_id" value="<?=$row['rent_id'];?>" hidden>
            <input type="text" name="member_id" id="member_id" value="<?=$row['member_id'];?>" />

        </p>

        <p>

            <label for="product_id">Product ID</label>
            <input type="text" name="product_id" id="product_id" value="<?=$row['product_id'];?>" />

        </p>
        
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='rent.php'>Rent</a>
    </form>
</body>

</html>