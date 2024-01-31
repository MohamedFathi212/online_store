<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="icon" href="imgs/logo2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;400&display=swap" rel="stylesheet">
    <title>Products Update</title>
</head>
<body>


<?php
include "config.php";

$id = $_GET['id'];
$up =mysqli_query($conn,"SELECT * FROM products WHERE id =$id");
$data =mysqli_fetch_array($up);



?>
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>Update Product</h2>
                <input type="text" name="id" value="<?php echo $data['id']?>" placeholder="pro_id" >
                <br>
                <input type="text" name="name" value="<?php echo $data['name']?>"  placeholder="pro_name" >
                <br>
                <input type="text" name="price" value="<?php echo $data['price']?>" placeholder="pro_price" >
                <br>
                <input type="file" id="file" name="image" style="display: none;">
                <label for="file">update img_pro</label>
                <button name="update" type="submit">&#9195; update Product</button>
                <br><br>
                <a href="products.php">Show Products</a>
            </form>
        </div>
        <p>Developed By Mohamed  &#128640;</p>
    </center>
</body>
</html>