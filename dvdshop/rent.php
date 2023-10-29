<?php
    require 'conn.php';
    $sql = "SELECT * FROM member_buy r JOIN product p ON (r.product_id = p.product_id)
                                       JOIN member m ON (r.member_id = m.member_id)
            order by rent_id";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Movie</title>
</head>

<body>
    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="mainmenu.php" class="nav-link px-2 text-secondary">Home</a></li>
                <li><a href="movie.php" class="nav-link px-2 text-white">Movie</a></li>
                <li><a href="rent.php" class="nav-link px-2 text-white">Rent</a></li>
            </ul>
            </div>
        </div>
    </header>

    <div class="container">
        <h1>Rent</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">เช่า</th>
                    <th scope="col-4">ID</th>
                    <th scope="col-4">ชื่อนามสกุล</th>
                    <th scope="col-4">ID</th>
                    <th scope="col-4">ชื่อเรื่อง</th>
                    <th scope="col-4">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["rent_id"]."</td>"."<td>".$row["member_id"]."</td>"."<td>".$row["fname"]." ".$row["lname"]."</td>"."<td>".$row["product_id"]."<td>".$row["product_name"]."</td>"."<td>"."<a class='btn btn-warning' href='editrent.php? rent_id=".$row["rent_id"]."'>Edit</a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        
        <a class="btn btn-success" href='insertrent.php'>Insert Rent</a>

    </div>
</body>

</html>