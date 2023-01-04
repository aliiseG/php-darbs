<?php
session_start();
include('db_connect.php');
if(isset($_SESSION['user_role'])){
    if($_SESSION['user_role']=='student'){
        include('select_student_data.php');
    }else{
        include('select_user_data.php');}
}
if(!isset($_SESSION['user_email'])){
    header('location:login.php');
}
?>
<!doctype html>
<html lang="en" style="height:100%">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pieslēgties</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <!--    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>-->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

    <script src="js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/98e8ded7b9.js" crossorigin="anonymous"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body style="background-color: #FFF9EE">
<nav class="navbar navbar-expand-sm navbar-dark main-nav mt-2" style="background-color: #18130F; color:#FFFFFF">
    <div class="container justify-content-center">
        <ul class="nav navbar-nav w-100 flex-nowrap">
            <li class="nav-item active">
                <a class="nav-link" href="user_profile.php">PROFILS</a>
            </li>
        </ul>
        <ul class="nav navbar-nav justify-content-center">
            <li class="nav-item"><a class="nav-link disabled fs-5"  href="#" style="color:floralwhite; text-transform:uppercase;">Sveiki,&nbsp;<?php echo $row['Vards'];?>!</a></li>
        </ul>
        <ul class="nav navbar-nav w-100 justify-content-end">
            <li class="nav-item">
                <a class="nav-link disabled"  href="#" style="color:floralwhite">
                    <?php
                    setlocale(LC_ALL, 'lv-LV');
                    echo strftime( "%#d. %b, %Y. gads");
                    ?></a>
            </li>
        </ul>
    </div>
</nav>
<nav class="navbar navbar-expand-sm navbar-dark main-nav mt-2 py-0" style="background-color: #BD5007; color:#FFFFFF">
    <div class="container justify-content-center my-0">
        <ul class="nav navbar-nav justify-content-center">
            <li class="nav-item mx-5"><a class="nav-link" href="#">STUNDU&nbsp;SARAKSTI</a></li>
            <li class="nav-item mx-5">
                <a class="nav-link" href="forum.php">PAZIŅOJUMI</a>
            </li>
            <?php
            if ($_SESSION['user_role']=='admin'){
                echo '<li class="nav-item mx-5">
                <a class="nav-link" href="#">PIETEIKUMI</a>
            </li>';
            }?>
        </ul>
    </div>
</nav>
<div class="container pb-5 pt-3 h-100 ">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-10 mb-4 mb-lg-0 ">
            <div class="card mb-3 shadow text-center " style="border-radius: .5rem; background-color: #EDE0D0;">
                <p class="fs-1 my-4" style="color:#18130F">PAZIŅOJUMI</p>
                <?php
                $query="SELECT * FROM `forum` INNER JOIN `users` ON users.user_ID = forum.creator_id";
                $result = mysqli_query($con, $query);
                if (mysqli_num_rows($result)) {
                    while($row2 = mysqli_fetch_array($result)){
                        echo '<div class="row g-0  align-items-center  mb-2 ">
                <div class="col-md-2 text-center  "
                     style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem; ">
                    <img src="'.$row2['Tips'].'.png"
                         alt="Avatar" class="img-fluid mt-5" style="width: 100px; background-color: floralwhite; border-radius: 20px" />
                    <p style="font-size: 12px;">'.$row2['Vards']." ".$row2['Uzvards'].'</p>
                </div>

                    <div class="col-md-8 text-lg-start   ">
                        <div class="m-2 p-2 shadow border-dark" style="background-color: #DAC3A6; border-radius: 5px;"><p style="font-size:14px;">
                                '.$row2['msg'].'
                            </p><p class="p-0 m-0 text-md-end text-muted" style="font-size: 12px;">'.$row2['create_date'].'</p></div>
                    </div>
                    <div class="col-md-2 text-center  "
                         style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem; ">
                </div>
            </div>';
                    }};
                ?>

        </div>
    </div>
</div>

</body>
</html>

