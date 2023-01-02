<?php
session_start();
require_once("../../config.php");
$pid = $_SESSION["provider_id"];
$oid = $_GET['id'];
$update = "UPDATE `order_` SET `status` = '1' WHERE `order_`.`order_id` = " . $oid;
mysqli_query($conn, $update);
echo "<script>alert('訂單完成');</script>";
echo "<script>window.location.replace('../p_order.php');</script>";
?>