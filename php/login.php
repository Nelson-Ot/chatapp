<?php 
 session_start();
 include_once "config.php";

 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $password = mysqli_real_escape_string($conn, $_POST['password']);
 
 if(!empty($email) && !empty($password)){
     $sql = "SELECT * FROM users WHERE email = '$email'";
     $result = mysqli_query($conn, $sql);
     $resultCheck = mysqli_num_rows($result);
     if($resultCheck < 1){
         echo "email not found";
     }else{
         if($row = mysqli_fetch_assoc($result)){
             $hashedPwdCheck = md5($password);
             $enc_pass = $row['password'];
                if($hashedPwdCheck == $enc_pass){
                    $_SESSION['unique_id'] = $row['unique_id'];
                    echo "success";
                }else{
                    echo "password is incorrect";
                }
         }
     }
    }else{
        echo "please fill in all fields";
    }

?>