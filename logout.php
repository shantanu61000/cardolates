<?php
session_start();
if(!isset($_SESSION["cardolates_user_id"])){
    header("Location:http://$_SERVER[HTTP_HOST]/cardolates");
}
else{
    session_destroy();
    $_SESSION = [];
    header("Location:http://$_SERVER[HTTP_HOST]/cardolates/login");
}