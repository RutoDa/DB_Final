<?php 
require_once("../../config.php");


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $shop_name=$_POST["real_name"];
    $phone=$_POST["phone"];
    $addr = $_POST["addr"];
    $image = $_POST["p_img"];
    $category = $_POST["category"];
    //檢查帳號是否重複
    $check="SELECT * FROM `provider_account` WHERE `account`='".$username."'";
    if(mysqli_num_rows(mysqli_query($conn,$check))==0){
        $sql="INSERT INTO`provider` (`provider_id`, `shop_name`, `phone`, `addr`, `image`, `category`)
            VALUES(NULL,'".$shop_name."','".$phone."','".$addr."','".$image."','".$category."')";
        mysqli_query($conn, $sql);
            $check="SELECT `provider_id` FROM `provider` WHERE `shop_name`='".$shop_name."'";
            $result=mysqli_query($conn, $check);
            $provider_id= mysqli_fetch_assoc($result)["provider_id"];
        $sql2 ="INSERT INTO`provider_account` (`provider_id`, `account`, `password`)
        VALUES(".$provider_id.",'".$username."','".$password."')";
        echo "<script>alert('註冊成功');window.location.replace('../p_login.html');</script>";
        // INSERT INTO `provider` (`provider_id`, `shop_name`, `phone`, `addr`, `image`, `category`) VALUES ('1', '牛肉麵店', '051234567', '嘉大市理工區資工路252號', 'https://fairylolita.com/wp-content/uploads/DSCF3995.jpg', '中式料理');
        // INSERT INTO `customer_account` (`customer_id`, `account`, `password`) VALUES ('1', 'uu', 'uu');
        if(mysqli_query($conn, $sql2)){
    
            exit;
        }else{
            echo "Error creating table: " . mysqli_error($conn);
        }
    }
    else{
        echo "該帳號已有人使用!<br>3秒後將自動跳轉頁面<br>";
        echo "<a href='../p_register.html'>未成功跳轉頁面請點擊此</a>";
        header('HTTP/1.0 302 Found');
        header("refresh:3;url=../p_register.html",true);
        exit;
    }
}


mysqli_close($conn);

function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');
     window.location.href='../p_login.html';
    </script>"; 
    
    return false;
} 
?>
