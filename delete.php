<?php

include "config.php";

echo  $id =$_GET['id']; 

$del = mysqli_query($conn,"DELETE FROM products WHERE id =$id");

sleep(2);

header("refresh:0;url=index.php");

if ($del) {
    echo "<script>alert('product is has been deleted')</script>";
}

else{
    echo "<script>alert('product is hasnot been deleted')</script>";

}

?>

