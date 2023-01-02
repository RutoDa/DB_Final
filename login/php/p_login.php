<?php
// Include config file
require_once('../../config.php');
 
// Define variables and initialize with empty values
$username=$_POST["username"];
$password=$_POST["password"];
//

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql = "SELECT * FROM provider_account WHERE account='".$username."'";
    $result=mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)==1 && $password==$row["password"]){
        session_start();
        // Store data in session variables
        $_SESSION["loggedin"] = true;
        //這些是之後可以用到的變數
        $_SESSION["provider_id"] = $row["provider_id"];
        header("location:../../provider/p_home.php");
    }else{
            function_alert("帳號或密碼錯誤"); 
        }
}
    else{
        function_alert("Something wrong"); 
    }

    // Close connection
    mysqli_close($conn);

function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');
     window.location.href='../p_login.html';
    </script>"; 
    return false;
} 
?>
?>