<?php
include 'config.php';

if (isset($_POST['upload'])) {

    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = 'Uploaded pictures/' . $image_name;

    $add = "INSERT INTO products (name, price, image) VALUES ('$name', '$price', '$image_up')";
    $result = mysqli_query($conn, $add);

    if ($result) {
        if (move_uploaded_file($image_location, 'Uploaded pictures/' . $image_name)) {
            echo "<script>alert('Product is added successfully')</script>";
        } else {
            echo "<script>alert('Failed to move the uploaded file')</script>";
        }
    } else {
        echo "<script>alert('Product is not added')</script>";
    }
    
    header('location:index.php');
}
?>