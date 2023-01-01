<?php
    $con = mysqli_connect('localhost', 'root');
    if($con){
//        echo "Connection Successful";
    }
    else{
        echo "Connection Failed BOOOO";
    }
    mysqli_select_db($con, 'culinaryschool');
//    $name = $_POST['name'];
//    $surname = $_POST['surname'];
//    $pk = $_POST['pk'];
//    $pasesnr = $_POST['pasesnr'];
//    $pasesdate = $_POST['pasesdate'];
//    $nodala= $_POST['nodala'];
//    $address = $_POST['address'];
//    $spec = $_POST['spec'];
//    $maksa = $_POST['maksa'];
//
//    $query = "INSERT INTO applicants ( Vards, Uzvards, Pers_kods, Pases_ID_nr, Izd_datums, Izd_nodala, Dekl_adrese, Specialitate, Maksa) VALUES ('$name', '$surname', '$pk', '$pasesnr', '$pasesdate', '$nodala', '$address', '$spec', '$maksa')";
//    mysqli_query($con, $query);
//    header('location:index.php');
?>
<!--    if(mysql_query($query)){-->
<!---->
<!--    echo "<h1 class='center'>Done</h1>";-->
<!---->
<!--    }}-->