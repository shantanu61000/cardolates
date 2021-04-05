<?php
session_start();
if(isset($_POST["loginBtn"])){
    require ("../connection.php");
    require ("../loginFn.php");
    $email = mysqli_real_escape_string($con,$_POST["email"]);
    $pass = mysqli_real_escape_string($con,$_POST["pass"]);
    $res = mysqli_query($con,"select * from users where email='$email'");
    if(mysqli_num_rows($res)>0){
        $row = mysqli_fetch_assoc($res);
        if(password_verify($pass,$row["pass"])){
            $_SESSION["cardolates_user_id"] = $row["user_id"];
            $temp = mysqli_query($con,"select name from user_details where user_id =".$_SESSION["cardolates_user_id"]);
            $temp = mysqli_fetch_assoc($temp)["name"];
            $temp = explode(" ",$temp);
            $shortname = substr($temp[0],0,1).substr($temp[1],0,1);
            $_SESSION["cardolates_user_shortname"] = $shortname; 
            echo "1";
            // if(isset($_COOKIE["cardolate_user_token"])){
            //     $validToken = checkToken($con,$_COOKIE["cardolate_user_token"]);
            //     if(mysqli_num_rows($validToken[0]) > 0){
            //         $email = 
            //     }
            // }
            
            // $_COOKIE["cardolate_user_token"] = bin2hex(random_bytes(10));
            // $temp = hash("sha256",$_COOKIE["cardolate-user-token"]);
            // if(mysqli_query($con,"insert into user_token(email,token) values ('$email','$temp')"))
            // echo "1"; //login usscesssful
            // else
            //     echo "2"; //token registration failed
        }
        else    
            echo "0"; //password wrong
    }
    else
        echo "0";
    
    mysqli_close($con);
}
else{
    // header("Location:../");
}