<?php
session_start();
if(isset($_SESSION["cardolates_user_id"]) && isset($_GET["getPorfile"])){
    require ("../connection.php");
    $id = $_SESSION["cardolates_user_id"];
    $query = "select email, name,gender, clg_UID as uid, college, year, course, dept , plan_type as plan from user_details,users,plans where user_details.user_id = users.user_id and user_details.plan = plans.plan_id and user_details.user_id=$id";
    $res = mysqli_query($con,$query);
    if(mysqli_num_rows($res) > 0){
        $row = mysqli_fetch_assoc($res);
        echo json_encode($row);
    }
    else{
        $query = "select email from users where user_id=$id";
        $res = mysqli_query($con,$query);
        if(mysqli_num_rows($res) > 0){
            $row = mysqli_fetch_assoc($res);
            echo json_encode($row);
        }
    }
    
    mysqli_close($con);
}
else{
    echo "Access Denied";
}
