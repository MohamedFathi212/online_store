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
    <title>Shop Online</title>
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>Online website for products</h2>
                <img src="imgs/logo.png" alt="logo" width="450px" >
                <input type="text" name="name" placeholder="pro_name" >
                <br>
                <input type="text" name="price" placeholder="pro_price" >
                <br>
                <input type="file" id="file" name="image" style="display: none;">
                <label for="file">Upload img_pro</label>
                <button name="upload">&#9195; Send Product</button>
                <br><br>
                <a href="products.php">Show Products</a>
            </form>
        </div>
        <p>Developed By Mohamed  &#128640;</p>
    </center>
</body>
</html>
