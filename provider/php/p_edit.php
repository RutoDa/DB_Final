<?php
// Include config file
session_start();
require_once('../../config.php');

    
    $pid = $_SESSION["provider_id"];
// Define variables and initialize with empty values
$product=$_POST["product"];
$price=$_POST["price"];
$description = $_POST["description"];
$id = $_GET["id"];

// Processing form data when form is submitted

    $sql = "UPDATE `product` SET `product_name` = '".$product."', `price` = '".$price."', `description` = '".$description."' WHERE `product`.`product_id` = ".$id.";";
    if (mysqli_query($conn, $sql)){
        echo "<script>alert('修改成功');</script>"; 
        echo "<script>window.location.replace('../p_home.php');</script>"; 
    }
    else{
        echo "<script>alert('something wrong');</script>"; 
    }

    

    // Close connection
    mysqli_close($conn);

?>
