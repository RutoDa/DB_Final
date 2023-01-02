<?php
// Include config file
session_start();
require_once('../../config.php');

    
    $pid = $_SESSION["provider_id"];
// Define variables and initialize with empty values
$product=$_POST["product"];
$price=$_POST["price"];
$description = $_POST["description"];

// Processing form data when form is submitted

    $sql = "INSERT INTO `product` (`product_id`, `product_name`, `provider_id`, `price`, `last_edit_date`, `description`) 
    VALUES (NULL, '".$product."', '".$pid."', '".$price."',now() , '".$description."');";
    if (mysqli_query($conn, $sql)){
        echo "<script>alert('新增成功');</script>"; 
        echo "<script>window.location.replace('../p_home.php');</script>"; 
    }
    else{
        echo "<script>alert('something wrong');</script>"; 
    }

    

    // Close connection
    mysqli_close($conn);

?>
