<?php 
require_once("../../config.php");


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $real_name=$_POST["real_name"];
    $phone=$_POST["phone"];
    //檢查帳號是否重複
    $check="SELECT * FROM `deliver_account` WHERE `account`='".$username."'";
    if(mysqli_num_rows(mysqli_query($conn,$check))==0){
        $sql="INSERT INTO `deliver` (`deliver_id`, `real_name`, `phone`)
            VALUES(NULL,'".$real_name."','".$phone."')";
        mysqli_query($conn, $sql);
            $check="SELECT `deliver_id` FROM `deliver` WHERE `real_name`='".$real_name."'";
            $result=mysqli_query($conn, $check);
            $deliver_id= mysqli_fetch_assoc($result)["deliver_id"];
        $sql2 ="INSERT INTO `deliver_account` (`deliver_id`, `account`, `password`)
        VALUES(".$deliver_id.",'".$username."','".$password."')";
        
        // INSERT INTO `deliver` (`deliver_id`, `real_name`, `phone`) VALUES ('1', '李昱佑', '0987878787');
        // INSERT INTO `deliver_account` (`deliver_id`, `account`, `password`) VALUES ('1', 'uu', 'uu');
        if(mysqli_query($conn, $sql2)){
            
            echo "<script>alert('註冊成功');window.location.replace('../d_login.html');</script>";
            exit;
        }else{
            echo "Error creating table: " . mysqli_error($conn);
        }
    }
    else{
        echo "該帳號已有人使用!<br>3秒後將自動跳轉頁面<br>";
        echo "<a href='../d_register.html'>未成功跳轉頁面請點擊此</a>";
        header('HTTP/1.0 302 Found');
        header("refresh:3;url=../d_register.html",true);
        exit;
    }
}


mysqli_close($conn);

function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');
     window.location.href='../d_login.html';
    </script>"; 
    
    return false;
} 
?>