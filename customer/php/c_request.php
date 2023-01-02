<?php
// Include config file
session_start();
require_once('../../config.php');


$cid = $_SESSION["customer_id"];
$pid = $_GET["id"];
$memo = $_GET["memo"];
$addr = $_GET["address"];

$sql = "SELECT * FROM `product` WHERE `provider_id` = " . $pid . ";";
$result = mysqli_query($conn, $sql);
$sum = 0;
while ($row = mysqli_fetch_array($result)) {
    $sum += $_GET[$row['product_id']]*$row['price'];
}


$insert = "INSERT INTO `order_` (`order_id`, `customer_id`, `provider_id`,`deliver_id`, `delivery_addr`, `total_price`, `status`, `date`, `memo`) 
    VALUES (NULL, '".$cid."', '".$pid."',NULL, '".$addr."', '".$sum."', '0', CURRENT_TIMESTAMP, '".$memo."');";
mysqli_query($conn, $insert);

$sql = "SELECT * FROM `order_` WHERE customer_id = ".$cid." and status=0;";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$order_id = $row['order_id'];

$sql = "SELECT * FROM `product` WHERE `provider_id` = " . $pid . ";";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
    if ($_GET[$row['product_id']]!=0) {
        $insert = "INSERT INTO `order_detail` (`order_id`, `product_id`, `count`) 
        VALUES ('" . $order_id . "', '" . $row['product_id'] . "', '" . $_GET[$row['product_id']] . "');";
        mysqli_query($conn, $insert);
    }
}


    echo "<script>alert('下單成功');</script>";
    echo "<script>window.location.replace('../c_order.php?oid=".$order_id."&pid=".$pid."');</script>";




// Close connection
mysqli_close($conn);

?>