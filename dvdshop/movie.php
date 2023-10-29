<?php
    require 'conn.php';
    $sql = "SELECT * FROM product p JOIN actors a ON (a.actor_id = p.actor_id)";
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
        <h1>Movie</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col-4">ชื่อเรื่อง</th>
                    <th scope="col-4">เรื่องย่อ</th>
                    <th scope="col-4">ระยะเวลา</th>
                    <th scope="col-4">วันที่</th>
                    <th scope="col-4">นักแสดง</th>
                    <th scope="col-4">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["product_id"]."</td>"."<td>".$row["product_name"]."</td>"."<td>".$row["detail"]."</td>"."<td>".$row["duration"]."</td>"."<td>".$row["date"]."<td>".$row["actor_fname"]." ".$row["actor_lname"]."</td>"."<td>"."<a class='btn btn-warning' href='editmovie.php? product_id=".$row["product_id"]."'>Edit</a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        
        <a class="btn btn-success" href='insertmovie.php'>Insert Movie</a>

    </div>
</body>

</html>