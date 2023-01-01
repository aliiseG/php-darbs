<?php
    $query = "SELECT date, time FROM available_times";
    $result = $con->query($query);
    if($result->num_rows> 0){
        $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>
