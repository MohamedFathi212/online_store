<?php
include "config.php";

$id = $_GET['id'];
$up = mysqli_query($conn, "SELECT * FROM products WHERE id='$id'");
$data = mysqli_fetch_array($up);
?>

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
    <title>Product Details</title>

    <style>
        input {
            display: none;
        }
    </style>
</head>
<body>
    <center>
        <div class="main">
            <form action="inser_card.php" method="post">
                <h2>هل تريد شراء المنتج</h2>
                <div style="display: flex; flex-direction: row; align-items: center; justify-content: center;">
                    <input type="text" name="id" value="<?php echo $data['id']?>" placeholder="pro_id" style="margin-right: 5px; width:auto; height:30px ">
                    <input type="text" name="name" value="<?php echo $data['name']?>" placeholder="pro_name" style="margin-right: 5px; width: auto;  height:30px ">
                    <input type="text" name="price" value="<?php echo $data['price']?>" placeholder="pro_price" style="margin-right: 5px; width: auto;  height:30px ">
                    <button name="add" type="submit" class="btn btn-warning">تاكيد اضافه المنتج</button>
                </div>
            </form>
            <br><br>
            <a href="shop.php">الرجوع لقائمة المنتجات</a>
        </div>
    </center>
</body>
</html>
