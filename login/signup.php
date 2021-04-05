<?php
 if(isset($_POST["signUpBtn"])){
     include("../connection.php");
    $email= mysqli_real_escape_string($con,$_POST["signUpEmail"]);
    $pass= password_hash( mysqli_real_escape_string($con,$_POST["signUpPass"]),PASSWORD_DEFAULT);
    if(mysqli_query($con,"insert into users(email,pass) values ('$email','$pass')")){
       echo "1";
        // $_COOKIE["cardolate-user-token"] = bin2hex(random_bytes(10));
        // $temp = hash("sha256",$_COOKIE["cardolate-user-token"]);
        // if(mysqli_query($con,"insert into user_token(email,token) values ('$email','$temp')"))
        //     echo "1"; //signup successsful
        // else
        //     echo "2"; //token registration failed
    }
    else if(strpos(mysqli_error($con),"Duplicate entry") == 0){
        echo "2"; //user a;ready registered
    }
    else{
        echo "0";
        echo (mysqli_error($con));
    }
    mysqli_close($con);
 }
 else{
     header("Location:../");
 }
?>