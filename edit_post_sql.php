<?php
session_start();
include('db_connect.php');
include('select_user_data.php');
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url_components = parse_url($url);
parse_str($url_components['query'], $params);
$msg_id=$params['msg'];
//$cr_id = $row['user_id'];
$msg=$_POST['msg'].' (edited by '.$row['Vards'].' '.$row['Uzvards'].')';
//$cr_date=date("Y-m-d H:i:s");

$query = "UPDATE forum
SET msg='$msg' WHERE msg_id='$msg_id'";
mysqli_query($con, $query);
header('location:forum.php');
?>