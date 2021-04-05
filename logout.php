<?php
session_start();
if(!isset($_SESSION["cardolates_user_id"])){
    header("Location:https://$_SERVER[HTTP_HOST]");
}
else{
    session_destroy();
    $_SESSION = [];
    header("Location:https://$_SERVER[HTTP_HOST]/login");
}