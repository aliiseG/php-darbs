<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">

<!--    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>-->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>-->
    <script src="js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/98e8ded7b9.js" crossorigin="anonymous"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->
<!--    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark mt-2" style="background-color: #18130F; color:#FFFAEE">
    <div class="container-fluid">
        <a class="navbar-brand m-lg- mx-sm-3" href="#">
        <img src="brand_logo.png" class="brandlogo" alt="Logo" width="35" height="24" class="d-inline-block align-text-top">
            <div class="d-inline-block align-text-top">Kulinārijas <br> skola</div></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mx-3">
                <li class="nav-item mx-3 px-3">
                    <a class="nav-link active" aria-current="page" href="#">Sākums</a>
                </li>
                <li class="nav-item mx-3 px-3">
                    <a class="nav-link" href="#">Par mums</a>
                </li>
                <li class="nav-item mx-3 px-3">
                    <a class="nav-link" href="#">Programmas</a>
                </li>
                <li class="nav-item mx-3 px-3">
                    <a class="nav-link" href="#">Ziņas</a>
                </li>
                <li class="nav-item mx-3 px-3">
                    <a class="nav-link" href="#">Kontakti</a>
                </li>
                <button class="btn btn-primary2 px-5" type="loginlink">Autorizācija</button>
            </ul>
        </div>
    </div>
</nav>
<!--Main body dala ar divam kolonnam-->
<div class = "container-fluid  mt-4 mb-0">
    <div class="row justify-content-center">
<!--        pirma kolonna-->
        <div class="col-md text-center fs-1 fw-bold"><h1 class="fw-bold mb-5 display-3">Kulinārijas māksla<br> ar jaunu garšu</h1>
<!--            vertikala "tabula" ieks pirmas kolonnas-->
            <div class = "container mt-5">
                <div class="row justify-content-md-center my-5">
                <div class="col-lg-5 fw-bold">
                    <div class="row">
                        <div class="col-md-1" >
                    <i class="fa-solid fa-thumbs-up fa-2xl"  style="vertical-align:middle; margin-top: 20px; margin-left: 20px; color:#3A2B1E;" alt="thumbs-up"></i>
                        </div>
                        <div class="col-md-11" style="cursor:default"><p style="color:#BD5007; margin:2px 2px 2px 2px;">100%</p><p class = "mt-0" style="color:#18130F; font-size: medium;">&nbsp;&nbsp;Apmierinātība</p></div>
                    </div>
                </div>

                </div>
                <div class="row justify-content-md-center my-5">
                    <div class="col-lg-5 fw-bold ">
                        <div class="row">
                            <div class="col-md-1">
                                <i class="fa-solid fa-user fa-2xl"  style="vertical-align:middle; margin-top: 60px; margin-left: 20px; color:#3A2B1E;" alt="thumbs-up"></i>
                            </div>
                            <div class="col-md-11" style="cursor:default"><p style="color:#BD5007; margin:2px 2px 2px 2px">&nbsp;&nbsp;2.5K+</p><p class = "mt-0" style="color:#18130F; font-size: medium; ">Veiksmīgi&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;absolventi&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
                        </div>
                    </div>

                </div>
                <div class="row justify-content-md-center my-5">
                    <div class="col-lg-5 fw-bold ">
                        <div class="row">
                            <div class="col-md-1">
                                <i class="fa-solid fa-trophy fa-2xl"  style="vertical-align:middle; margin-top: 30px; margin-left: 10px; color:#3A2B1E;" alt="thumbs-up"></i>
                            </div>
                            <div class="col-md-11" style="cursor:default"><p style="color:#BD5007; margin:2px 2px 2px 2px">50+&nbsp;&nbsp;</p><p class = "mt-0" style="color:#18130F; font-size: medium;">Godalgas&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<!--        otra kolonna-->
        <div class="col-md fs-4 fw-bold left-line"><p class="mx-5 ms-1">Apgūstiet visu, kas jums nepieciešams, lai kļūtu par prasmīgu šefpavāru, sākot no kulinārijas pamatiem līdz restorāna līmeņa prasmēm!</p>
            <button class="btn btn-primary2 px-5 py-2"><a href="#anchor-form" style="text-decoration: none; color:#FFFFFF">Vēlos pieteikties!</a></button>
            <div id="carouselExampleIndicators" class="carousel slide mt-4 mx-5 ms-1 data-mdb-ride="carousel"">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>

                </div>
                <div class="carousel-inner mb-5">
                    <div class="carousel-item active">
                        <img src="kitchen-empty.jpeg" class="d-block w-100" alt="kitchen"/>
                    </div>
                    <div class="carousel-item">
                        <img src="kitchen-person.jpeg" class="d-block w-100" alt="person"/>
                    </div>
                    <div class="carousel-item">
                        <img src="kitchen-chefs.jpeg" class="d-block w-100" alt="chefs"/>
                    </div>
                </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>

    </div>
<!--Footer/formas dala-->
<div class="row justify-content-center">
    <div class="col-8  border-bottom border-right border-secondary rounded m-auto " id="anchor-form" style="background-color: #BD5007; color:#FFFAEE; z-index: 2;">
        <p class="mt-5 fs-2 text-center ">PALDIES PAR PIETEIKUMU!</p>
        <button type="button" class="btn d-block mx-auto mb-3" data-bs-toggle="collapse" data-bs-target="#applyform" disabled><img src="brand_logo.png" class="brandlogo" alt="Logo" width="35" height="24" class="d-inline-block align-text-top"></button>
        <div id="applyform" class="col-12 p-4 m-auto">
            <p class="fs-3 p-2 m-auto text-center">Esat veiksmīgi pieteicies mācībām uz nākamo mācību gadu! Gaidīsim Jūs izvēlētajā laikā, lai pabeigtu uzņemšanas procesu.</p>
        </div>
    </div>
</div>

        <script type="text/javascript">

            jQuery().ready(function() {

                // validate form on keyup and submit
                var v = jQuery("#basicform").validate({
                    rules: {
                        name: {
                            required: true,
                            minlength: 1,
                            maxlength: 50
                        },
                        surname: {
                            required: true,
                            minlength: 1,
                            maxlength: 50
                        },
                        pk: {
                            required: true,
                            minlength: 12,
                            maxlength: 12,
                        },
                        pasesnr: {
                            required: true,
                            minlength: 9,
                            maxlength: 9,
                        },
                        pasesdate: {
                            required: true,
                            minlength: 6,
                            maxlength: 15,
                        },
                        nodala: {
                            required: true,
                            minlength: 6,
                            maxlength:50,
                        },
                        address: {
                            required: true,
                            minlength: 6,
                            maxlength: 100,
                        },
                        spec: {
                            required: true,
                        },
                        maksa: {
                            required: true,
                        }
                        telefons: {
                            required: true,
                        }
                        epasts: {
                            required: true,
                        }
                    },
                    errorElement: "span",
                    errorClass: "help-inline-error",
                });

                $(".open1").click(function() {
                    if (v.form()) {
                        $(".frm").hide("fast");
                        $("#sf3").show("slow");
                    }
                });
                $(".open3").click(function() {
                    if (v.form()) {
                        $(".frm").hide("fast");
                        $("#sf4").show("slow");
                    }
                });

                $(".open4").click(function() {
                    if (v.form()) {
                        $("#loader").show();
                        setTimeout(function(){
                            $("#basicform").html('<h2>Thanks for your time.</h2>');
                        }, 1000);
                        return false;
                    }
                });

                $(".back3").click(function() {
                    $(".frm").hide("fast");
                    $("#firstpartform").show("slow");
                });

            });
        </script>
<!--        --><?php

//        $con = mysqli_connect('localhost', 'root');
//        if($con){
////        echo "Connection Successful";
//        }
//        else{
//            echo "Connection Failed BOOOO";
//        }
//        mysqli_select_db($con, 'culinaryschool');
//        if(isset($_POST['submit'])) {
//            $name = $_POST['name'];
//            $surname = $_POST['surname'];
//            $pk = $_POST['pk'];
//            $pasesnr = $_POST['pasesnr'];
//            $pasesdate = $_POST['pasesdate'];
//            $nodala= $_POST['nodala'];
//            $address = $_POST['address'];
//            $spec = $_POST['spec'];
//            $maksa = $_POST['maksa'];
//            $tiksanas_dati = $_POST['meetdate'];
//
//            $arr=explode(",", $tiksanas_dati);
//
//            $query = "INSERT INTO applicants ( Vards, Uzvards, Pers_kods, Pases_ID_nr, Izd_datums, Izd_nodala, Dekl_adrese, Specialitate, Maksa, Meet_datums, Meet_laiks) VALUES ('$name', '$surname', '$pk', '$pasesnr', '$pasesdate', '$nodala', '$address', '$spec', '$maksa', '$arr[0]', '$arr[1]')";
//            mysqli_query($con, $query);
//            header('location:index.php');
//        }

//            if($image_type=="image/jpeg" or $image_type=="image/png" or
//                $image_type=="image/gif"){
//
//                if($image_size<=500000){
//                    move_uploaded_file($image_tmp,"images/$image_name");
//                }
//                else{
//                    echo "<script>alert('Image size is larger, only 50kb size is allowed ')</script>";
//                }
//
//
//            }
//            else{
//                echo "<script>alert('Image type is invalid')</script>";
//            }
//
//            $query= "insert into post(name,user_name,mobile,dob,email,password,confirm_password,image)
//			values('$name','$user_name','$mobile','$dob','$email','$pass','$c_pass','$image_name')";
//
//            if(mysql_query($query)){
//
//                echo "<h1 class='center'>Done</h1>";
//
//            }}
        ?>
    </div>
</div>
    <div class="col-12 text-center fs-4" style="margin-top:-100px; height:200px;background-color:#C8A98D; z-index: auto  ">
<!--        ejhrkujh-->
    </div>
    <div class="mb-0" style="background-color:#C8A98D; ">
        <div class="container" >
            <div class="col-9 m-auto border-top border-dark" style="--bs-border-opacity: .2;">
                <div class="row">
                    <div class="col-sm " style="color:#FFF9EE">
                        <p class="mb-2 mt-4 fs-5">KONTAKTI</p>
                        <p class="my-1">Iela Rīgā 31, Rīga, LV-1010</p>
                        <p class="my-1">22332222</p>
                        <p class="my-1">skola@skola.lv</p>
                        <p class="copyright">
                            <small>&copy; 2022</small>
                        </p>
                    </div>
                    <div class="col-sm ">

                    </div>
                    <div class="col-sm ">
                        <i class="fa-solid fa-utensils fa-rotate-by fa-10x fa-pull-right mt-2 mb-0" style="--fa-rotate-angle: -45deg; color:#3A2B1E; opacity: 0.3;"></i>
                    </div>
                    <div class="col-md-3  d-flex align-items-center justify-content-end">
                        <a class="btn " href="#"><i class="fa-brands fa-facebook fa-3x" style="color:#FFFFEF"></i></a>
                        <a class="btn " href="#"><i class="fa-brands fa-instagram fa-3x" style="color:#FFFFEF"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>

</body>
</html>
</html>
<?php
?>