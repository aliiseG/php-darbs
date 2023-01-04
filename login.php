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
<body>
<?php
session_start();
if(isset($_SESSION['user_email'])){
    unset($_SESSION['user_email']);
}
include('db_connect.php');


if (isset($_POST['epasts']) && isset($_POST['password'])){

    function validate ($data){
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }
    $epasts = validate($_POST['epasts']);
    $password = validate($_POST['password']);
    $password = md5($password);
    if (empty($epasts)){
//        header("Location: index.php");
//        exit();
    }else if(empty($password)){
//        header("Location: index.php");
//        exit();
    }else{
        $query = "SELECT * FROM users WHERE Epasts= '$epasts' and Parole = '$password'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result)){
            $row = mysqli_fetch_array($result);
            if($row['Tips'] == 'student'){
                $_SESSION['user_email'] = $row['Epasts'];
                $_SESSION['user_role'] = $row['Tips'];
                header('location:user_profile.php');

            } elseif($row['Tips'] == 'teacher'){
                $_SESSION['user_email'] = $row['Epasts'];
                $_SESSION['user_role'] = $row['Tips'];
                header('location:user_profile.php');
            }elseif($row['Tips'] == 'admin'){
                $_SESSION['user_email'] = $row['Epasts'];
                $_SESSION['user_role'] = $row['Tips'];
                header('location:user_profile.php');
            }
            echo "yo";
        }$error='Nepareiza parole vai e-pasts!';
    }

}else{
//    header("Location: index.php");
//    exit();
}
?>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100 ">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5 ">
                <div class="card text-white shadow" style="border-radius: 1rem; background-color: #3A2B1E">
                    <div class="card-body p-5 text-center">
                        <form method="post" action="" name="loginform">
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <div class="mt-1 mb-3 mx">
                                <img src="brand_logo.png" class="brandlogo" alt="Logo" width="65" height="45" class="d-block">

                            </div>
                            <h2 class="fw-bold mb-2 text-uppercase">Pieslēgties</h2>
                            <p class="text-white-50 mb-4">Lūdzu ievadiet savu e-pastu un paroli!</p>
                            <?php
                            if (isset($error)){
                                echo '<div class="mb-3">
                                       <span class="block p-1 bg-danger form-control text-white" style="border-radius: 5px;">'.$error.'</span>
                                </div>';
                                unset($error);
                            }
                            ?>

                            <div class="form-outline form-white mb-4 mt-1">
                                <label class="form-label" for="epasts">E-pasts</label>
                                <input type="email" id="epasts" class="form-control form-control-lg" name="epasts" required>

                            </div>

                            <div class="form-outline form-white mb-4">
                                <label class="form-label" for="password">Parole</label>
                                <input type="password" id="password" class="form-control form-control-lg"  name="password" required>
                            </div>
                            <button class="btn btn-outline-light btn-lg px-5" type="submit" name="login">Login</button>

                        </div>

                        <div>
                            <p class="mb-0"><a href="index.php" class="text-white-50 fw-bold">Atgriezties uz sākumu</a>
                            </p>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
?>
