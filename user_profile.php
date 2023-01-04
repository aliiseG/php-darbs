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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kulinārijas skola</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/98e8ded7b9.js" crossorigin="anonymous"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="styles.css">
    <style>.navbar .flex-1 {
            flex: 1;
            flex-basis: 100%;
        }</style>
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
<!--profila kartina-->
<div class="container py-5 h-100 ">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0">
            <div class="card mb-3 shadow" style="border-radius: .5rem; background-color: #EDE0D0;">
                <div class="row g-0">
                    <div class="col-md-4 text-center "
                         style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                        <img src="<?php echo($row['Tips']);?>.png"
                             alt="Avatar" class="img-fluid mt-5 mb-3 mx-2" style="width: 300px; background-color: floralwhite; border-radius: 20px" />
                        <h5><?php echo $row['Vards']." ".$row['Uzvards'];?></h5>
                        <p><?php
                            if ($row['Tips']=='admin'){
                                echo 'Administrators';
                            }elseif ($row['Tips']=='teacher'){
                                echo 'Pasniedzējs';
                            }elseif ($row['Tips']=='student'){
                                echo 'Students';
                            }
                            ?></p>
                        <a href="logout.php" style="color:black">
                        <i class="fa-solid fa-right-from-bracket mb-3" alt="logout""></i></a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-4">
                            <h6>Profils</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                                <div class="col-6 mb-3">
                                    <h6>Programma</h6>
                                    <p class="text-muted">
                                        <?php if(isset($row['Kvalifikacija'])){
                                            echo $row['Kvalifikacija'];
                                        }else {echo '-';} ?></p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Grupa</h6>
                                    <p class="text-muted"><?php if(isset($row['Nosaukums'])){
                                            echo $row['Nosaukums'];
                                        }else {echo '-';} ?></p>
                                </div>
                            </div>
                            <h6>Dati</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                                <div class="col-6 mb-3">
                                    <h6>E-pasts</h6>
                                    <p class="text-muted"><?php
                                        echo $row['Epasts'];
                                        ?></p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Tel.numurs</h6>
                                    <p class="text-muted"><?php
                                        echo $row['Telefons'];
                                        ?></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-auto mx-auto text-center text-muted">Mācību gads: 2022./23.</div>
        </div>

    </div>
</div>
</body>
</html>
<?php
?>
