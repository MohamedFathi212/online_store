<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="imgs/logo2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;400&display=swap" rel="stylesheet">
    <title>ALL Products</title>

    <style>

    h3 {
        margin-top: 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: bold;
    }

    .card  {
        float: right;
        margin: 30px 10px 0 15px;
    }

    .card img {
        width: 100%;
        height: 200px;
    }

    main {
        width: 50%;
    }


    nav a {
        margin-left: 60px;
        text-decoration: none;
        color: white;
    }

    a:hover {
        color: black;
    }
 

    </style>
</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
        <a href="card.php">MyCard</a>
    </nav>
    <center>
        <h3>All available products </h3>
    </center>

    <?php
    include 'config.php';
    $res =mysqli_query($conn,"SELECT * FROM products");
    while($row =mysqli_fetch_array($res)) 
    {
        echo "
        <center>
        <main>
    <div class='card' style='width: 18rem;'>
        <img src='$row[image]' class='card-img-top'>
        <div class='card-body'>
            <h5 class='card-title'>$row[name]</h5>
            <p class='card-text'>$row[price]</p>
            <a href='val.php?id=$row[id]' class='btn btn-success'>Add product to cart</a>
            </div>
    </div>
    </main>

        <center>
        ";
    }

    ?>

    


</body>
</html>
