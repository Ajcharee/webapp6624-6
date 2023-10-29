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
    <form id="form1" name="form1" method="post" action="insertrentsuccess.php">
        <p>

            <label for="product_id">Product ID</label>
            <input type="text" name="product_id" id="product_id">

        </p>
        <p>

            <label for="member_id">Member ID</label>
            <input type="" name="member_id" id="member_id">
            

        </p>
        

        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='rent.php'>Rent</a>
    </form>
</body>

</html>