<?php
session_start();
include('db_connect.php');
include('select_user_data.php');

$cr_id = $row['user_id'];
$msg=$_POST['msg'];
$cr_date=date("Y-m-d H:i:s");

$query = "INSERT INTO forum ( creator_id , msg, create_date, edit_date)
VALUES ('$cr_id', '$msg', '$cr_date', NULL)";
mysqli_query($con, $query);
header('location:forum.php');
?>