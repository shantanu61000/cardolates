<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "cardolates";    
$con = mysqli_connect($host,$username,$password,$database);
if(mysqli_connect_error())
{
    die ("Connection Error");
}

?>