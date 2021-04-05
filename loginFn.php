<?php

function checkToken($con,$temp){
    $temp = mysqli_real_escape_string($con,$temp);
    $temp = hash("sha256",$temp);
    $res = mysqli_query($con,"select * from user_token where token = '$temp'");
    $row = mysqli_fetch_assoc($res);
    return [$res,$row];
}

?>