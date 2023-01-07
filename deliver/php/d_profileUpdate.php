<?php
// Include config file
session_start();
require_once('../../config.php');

    
    $did = $_SESSION["deliver_id"];
// Define variables and initialize with empty values
$real_name=$_POST["real_name"];
$phone = $_POST["phone"];


// Processing form data when form is submitted

$sql = "UPDATE `deliver` SET `real_name` = '".$real_name."', `phone` = '".$phone."' WHERE `deliver`.`deliver_id` = ". $did;

    if (mysqli_query($conn, $sql)){
        echo "<script>alert('更新成功');</script>"; 
        echo "<script>window.location.replace('../d_home.php');</script>"; 
    }
    else{
        echo "<script>alert('something wrong');</script>"; 
    }

    

    // Close connection
    mysqli_close($conn);

?>
