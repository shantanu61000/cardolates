<?php
session_start();
if(isset($_SESSION["cardolates_user_id"]) && (isset($_POST["updateProfile"]) || isset($_POST["addProfile"]))){
   require ("../connection.php");
   $name = mysqli_real_escape_string($con,$_POST["name"]);
   $uid = mysqli_real_escape_string($con,$_POST["uid"]);
   $year = mysqli_real_escape_string($con,$_POST["year"]);
   $course = mysqli_real_escape_string($con,$_POST["course"]);
   $gender = mysqli_real_escape_string($con,$_POST["gender"]);
   $college = mysqli_real_escape_string($con,$_POST["college"]);
   $dept = mysqli_real_escape_string($con,$_POST["dept"]);
    $user_id = $_SESSION["cardolates_user_id"];
    if(isset($_POST["addProfile"])){
        $query = "insert into user_details (user_id,name,gender,clg_UID,college,year,course,dept,plan)values($user_id,'$name','$gender',$uid,$college,'$year','$course',$dept,4)";
    }
    else{
        $query = "update user_details set name = '$name', gender = '$gender', clg_UID = $uid, college =$college, year = '$year', course ='$course',dept=$dept where user_id=$user_id";
    }
    if(mysqli_query($con,$query)){
        echo "1";
    }
    else{
        echo "0";
        echo mysqli_error($con);
    }
}
else{
    echo "denied";
    // header("Location:../login");
}

?>