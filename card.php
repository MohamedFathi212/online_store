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
    <title>My Products</title>

    <style>

        .hh {
            font-family:Arial, Helvetica, sans-serif;
            margin-top: 20px;
            font-weight: bold;
        }

        main {
            width: 50%;
            margin-top: 20px;
        }
        
        table {
            box-shadow:  2px 2px 2px silver;
        }

        thead {

            color: white;
            text-align: center;
        }

        tbody {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }

        tbody td a {
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
        }

         a:hover {
            text-decoration: none;
            color: red;
        }

    </style>

</head>
<body>

    <center>
        <h3 class="hh">
        My reserved products
        </h3>
    </center>

    <?php  
    include "config.php";

    $res =mysqli_query($conn , "SELECT * FROM  add_card");

    while ($row =mysqli_fetch_array($res)){
        echo "
        
        <center>
        <main>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'class='bg-primary'>product name</th>
                    <th scope='col'class='bg-primary'>product price</th>
                    <th scope='col'class='bg-primary'>Delete product</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>$row[name]</td>
                    <td>$row[price]</td>
                    <td><a href='del_card.php? id=$row[id]' class='btn btn-danger'>delete</a></td>
                </tr>
            </tbody>
        </table>
        </main>
    </center>
        
        ";
    }
    ?>

    <center>
        <a class="link" href="shop.php">Back to the list of products</a>
    </center>
    
</body>
</html>