<?php 

include "config.php";

$id =$_GET['id'];

mysqli_query($conn , "DELETE FROM add_card WHERE id = $id");

header('location:card.php');




?>