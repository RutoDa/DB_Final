<?php
// Include config file
session_start();
require_once('../../config.php');

    
    $pid = $_SESSION["provider_id"];
// Define variables and initialize with empty values
$shop_name=$_POST["real_name"];
$phone = $_POST["phone"];
$addr=$_POST["addr"];
$img = $_POST["p_img"];
$category = $_POST["category"];

// Processing form data when form is submitted

    $sql = "UPDATE `provider` SET 
    `shop_name` = '".$shop_name."', `phone` = '".$phone."', `addr` = '".$addr."', `image` = '".$img."', `category` = '".$category."' 
    WHERE `provider`.`provider_id` = ".$pid;
    if (mysqli_query($conn, $sql)){
        echo "<script>alert('更新成功');</script>"; 
        echo "<script>window.location.replace('../p_home.php');</script>"; 
    }
    else{
        echo "<script>alert('something wrong');</script>"; 
    }

    

    // Close connection
    mysqli_close($conn);

?>
