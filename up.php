<?php
include 'config.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = 'Uploaded pictures/' . $image_name;
    $update = "UPDATE products SET name='$name', price='$price', image='$image_up' WHERE id=$id";

    if (mysqli_query($conn, $update)) {
        if (move_uploaded_file($image_location, 'Uploaded pictures/' . $image_name)) {
            echo "<script>alert('Product is Updated successfully')</script>";

        } else {
            echo "<script>alert('Error uploading image')</script>";
        }
    } else {
        echo "<script>alert('Error updating product: " . mysqli_error($conn) . "')</script>";
    }
} else {
    echo "<script>alert('Product is not Updated')</script>";
}

echo "<script>alert('Product is Updated successfully')</script>";

header('location:index.php');

?>