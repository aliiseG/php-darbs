<?php
    $con = mysqli_connect('localhost', 'root');
    if($con){
    }
    else{
        echo "Connection Failed BOOOO";
    }
    mysqli_select_db($con, 'culinaryschool');
    $link = mysqli_connect('localhost', 'root', '', 'culinaryschool');
?>
