<?php
session_start();
    if(isset($_SESSION["cardolates_user_id"]) && isset($_POST["sendBtn"])){
        require("../connection.php");
        $senderID = $_SESSION["cardolates_user_id"];
        $recID = mysqli_real_escape_string($con,$_POST["recID"]);
        $recEmail = mysqli_real_escape_string($con,$_POST["recEmail"]);
        $message = mysqli_real_escape_string($con,$_POST["message"]);
        $song = mysqli_real_escape_string($con,$_POST["song"]);
        $template = mysqli_real_escape_string($con,$_POST["template"]);
        $query = "insert into cards (card_from,card_to,message,song,template,event) values ($senderID,$recID,'$message','$song',$template,1)";
        if(mysqli_query($con,$query)){
            $subject = 'Cardolates '.date("d-m-y");
            $body ="
            <h2 style='padding:20px; background-color:#f6e2ff'>You have received a new Cardolate.</h2>
            <div style='padding:30px;margin-top: 50px;background-image: url(https://cardolates.ml/compose/template/$template.jpg);max-width: 500px;background-size: cover;''>
                <img src='https://cardolates.ml/compose/img/logo.png' style='display: block; margin:0px auto; padding: 10px; height: 70px;' alt='Logo'>
                <p style='padding: 20px; background-color: #ffffffe8; margin-top:10px;margin-bottom:10px;margin-left: 10px;margin-right: 10px; border-radius: 10px;'>Song: $song</p>
                <p style='padding: 20px; background-color: #ffffffe8; margin-top:10px;margin-bottom:10px;margin-left: 10px;margin-right: 10px; border-radius: 10px;'>Message: $message</p>
            </div>";
            $headers = 'From: Cardolates <cardolates@gmail.com>'."\r\n";
            $headers .= 'Reply-To: cardolates@gmail.com'."\r\n" ;
            $headers .= 'X-Mailer: PHP/' . phpversion();
            $headers .= "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";    
            $status = mail($recEmail, $subject, $body, $headers);
            if ($status) {
                echo "1";
            } else {
                echo "0";
            }
        }
        else{
            echo "0";
            echo mysqli_error($con);
        }

        mysqli_close($con);
    }
    else{
        echo "Denied";
    }

    // function sendEmail(){
    //     $email = mysqli_real_escape_string($con, $_POST["email"]);
    
    // }
