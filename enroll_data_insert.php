<?php
$con = mysqli_connect('localhost', 'root');
if($con){
//        echo "Connection Successful";
}
else{
    echo "Connection Failed BOOOO";
}
mysqli_select_db($con, 'culinaryschool');
//if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $pk = $_POST['pk'];
    $pasesnr = $_POST['pasesnr'];
    $pasesdate = $_POST['pasesdate'];
    $nodala= $_POST['nodala'];
    $address = $_POST['address'];
    $spec = $_POST['spec'];
    $maksa = $_POST['maksa'];
    $tel = $_POST['telefons'];
    $epasts = $_POST['epasts'];
    $tiksanas_dati = $_POST['meetdate'];

    $arr=explode(",", $tiksanas_dati);

    $query = "INSERT INTO applicants ( Vards, Uzvards, Pers_kods, Pases_ID_nr, Izd_datums, Izd_nodala, Dekl_adrese, Specialitate, Maksa, Telefons, Epasts, Meet_datums, Meet_laiks) 
            VALUES ('$name', '$surname', '$pk', '$pasesnr', '$pasesdate', '$nodala', '$address', '$spec', '$maksa','$tel','$epasts', '$arr[0]', '$arr[1]')";
    mysqli_query($con, $query);
    header('location:index-form.php');
//}

?>