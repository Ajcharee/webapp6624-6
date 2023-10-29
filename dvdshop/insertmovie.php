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
    <form id="form1" name="form1" method="post" action="insertmoviesuccess.php">
        <p>

            <label for="product_id">ID</label>
            <input type="text" name="product_id" id="product_id">

        </p>
        <p>

            <label for="product_name">ชื่อเรื่อง</label>
            <input type="text" name="product_name" id="product_name">

        </p>

        <p>

            <label for="detail">เรื่องย่อ</label>

            <input type="text" name="detail" id="detail">

        </p>

        <p>

            <label for="duration">ระยะเวลา</label>

            <input type="text" name="duration" id="duration">

        </p>

        <p>

            <label for="date">วันที่</label>

            <input type="date" name="date" id="date">

        </p>

        <p>

            <label for="date">รหัสนักแสดง</label>

            <input type="text" name="actor_id" id="actor_id">

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='movie.php'>Movie</a>
    </form>
</body>

</html>