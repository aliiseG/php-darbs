<?php
include ('db_connect.php');
session_start();
session_unset();
//$_SESSION['user_email']=null;
session_destroy();
//echo "nlern";

header('location:login.php');
//die();
?>