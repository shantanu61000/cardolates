<?php
session_start();
    if(isset($_SESSION["cardolates_user_id"]) && isset($_GET["cardID"])){
        require("../connection.php");
        $cardID = mysqli_real_escape_string($con,$_GET["cardID"]);
        $res = mysqli_query($con,"select message,song,template from cards where card_id=$cardID");
        $row = mysqli_fetch_assoc($res);
        echo json_encode($row);
        mysqli_close($con);
    }
    else if(isset($_SESSION["cardolates_user_id"]) && isset($_POST["cardID"]) && isset($_POST["updateCardStatus"])){
        require("../connection.php");
        $cardID = mysqli_real_escape_string($con,$_POST["cardID"]);
        if(mysqli_query($con,"update cards set status='seen' where card_id=$cardID")){
            $res = mysqli_query($con,"select count(*) as count from cards where card_to=".$_SESSION["cardolates_user_id"]." and status='delivered'");
             $count = mysqli_fetch_assoc($res)["count"];
             echo "$count";
        }
           
        else 
            echo "-1";
        mysqli_close($con);
    }
    else{
        header("LOcation:../login");
    }
