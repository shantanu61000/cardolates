<?php
session_start();
// 
if (!isset($_SESSION["cardolates_user_id"]) || !isset($_POST["searchBtn"])) {
    // 
    echo "Please set post data";
} 
else {
    require ("../connection.php");
    $text = mysqli_real_escape_string($con,$_POST["text"]);
    // $text = "vivek";
    $query = "select * from profileView where name like '%$text%' or email like '%$text%' or col_name like '%$text%' or dept_name like '%$text%'";
    $res = mysqli_query($con,$query);
    $output = "{";
    $i = 1;
    while($row = mysqli_fetch_assoc($res)){
        if($i < mysqli_num_rows($res)){
            $output .= '"'.$i.'":'.json_encode($row).",";
        }
        else{
            $output .= '"'.$i.'":'.json_encode($row);
        }
        $i++;
    }
    $output .= "}";
    echo $output;
}
?>