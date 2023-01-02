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
    <style>
        html,body {
            height: 100%;
        }

        #yellow {
            height: 100%;
            background: yellow;
        }
    </style>
</head>
<body style="height: 100%">
<!--#3A2B1E-->
<div class="container-fluid h-100">
    <div class="row justify-content-center h-100">
        <div class="col-6 m-auto text-center" style="background-color: #3A2B1E; height:100%">
            <div class="mt-5 mx">
            <img src="brand_logo.png" class="brandlogo" alt="Logo" width="65" height="45" class="d-block">
            </div>
            <h1 class="mt-3" style="color:#FFFFEE">PIESLĒGTIES</h1>
                <form action="login_form.php" method="post">
                    <div class="row justify-content-center">
                        <div class="col-6 mr-0 my-2 py-2">
                            <label style="color:white">E-pasts</label>
                            <input type="email" id="loginemail" class="form-control py-2" placeholder="E-pasts" name="loginemail" required>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-6 ml-0 my-2">
                            <label style="color:white">Parole</label>
                            <input type="password" id="password" class="form-control py-2" placeholder="Parole" name="password" required>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-5 my-5">
                        <button class="btn btn-bd-primary px-4">Ienākt</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php
?>
