<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kulinārijas skola</title>
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
<body >
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
                <a class="btn btn-primary2 px-5" type="button" href="login.php">Autorizācija</a>
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
    <div class="col-8  border-bottom border-right border-secondary rounded m-auto shadow" id="anchor-form" style="background-color: #BD5007; color:#FFFAEE; z-index: 2;">
        <p class="mt-5 fs-2 text-center ">AIZPILDIET ANKETU, LAI PIETEIKTOS MĀCĪBĀM!</p>
        <button type="button" class="btn d-block mx-auto mb-3" data-bs-toggle="collapse" data-bs-target="#applyform"><img src="brand_logo.png" class="brandlogo" alt="Logo" width="35" height="24" class="d-inline-block align-text-top"></button>
        <div id="applyform" class="collapse">
            <form action="enroll_data_insert.php" method="post" id="basicform">
                <div class="form-group frm" id="firstpartform">
                    <div class="row justify-content-center">
                        <div class="col-3 mr-0 my-2">
                            <label>Vārds</label>
                            <input type="text" id="vards" class="form-control" placeholder="Vārds" name="name" required>
                        </div>
                        <div class="col-3 ml-0 my-2">
                            <label>Uzvārds</label>
                            <input type="text" id="uzvards" class="form-control" placeholder="Uzvārds" name="surname" required>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-3 mr-0 my-2">
                            <label>Personas kods</label>
                            <input type="text" id="perskods" class="form-control" placeholder="Personas kods" name="pk" required>
                        </div>
                        <div class="col-3 ml-0 my-2">
                            <label>Pases/ID numurs</label>
                            <input type="text" id="pasesnr" class="form-control" placeholder="Pases/ID numurs" name="pasesnr" required>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-3 mr-0 my-2">
                            <label>Pases izdošanas datums</label>
                            <input type="date" id="izddatums" class="form-control" name="pasesdate" required>
                        </div>
                        <div class="col-3 ml-0 my-2">
                            <label>Pases izdošanas nodaļa</label>
                            <input type="text" id="izdnodala" class="form-control" placeholder="Pases izdošanas nodaļa" name="nodala" required>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-6 mr-0 my-2">
                            <label>Deklarētā adrese</label>
                            <input type="text" id="adrese" class="form-control" placeholder="Deklarētā adrese" name="address" required>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-3 ml-0 my-2">
                            <label>Specialitāte</label>
                            <select id="spec" name="spec" class="form-select" required>
                                <option value="" disabled selected hidden>Specialitāte</option>
                                <option value="pavars">Pavārs</option>
                                <option value="konditors">Konditors</option>
                            </select>
                        </div>
                        <div class="col-3 ml-0 my-2">
                            <label>Maksas veids</label>
                            <select id="maksa" name="maksa" class="form-select" required>
                                <option value="" disabled selected hidden>Daļas - summa</option>
                                <option value="1part">1 daļa - 1000</option>
                                <option value="2part">2 daļas - 1200</option>
                                <option value="3part">3 daļas - 1400</option>
                            </select>
                        </div>

                    </div>
                    <div class="row justify-content-center">
                        <div class="col-3 ml-0 mt-2 mb-4">
                            <label>Tel.numurs</label>
                            <input type="text" id="telefons" class="form-control" placeholder="Tel.numurs" name="telefons" required>
                        </div>
                        <div class="col-3 ml-0 mt-2 mb-4">
                            <label>E-pasts</label>
                            <input type="email" id="epasts" class="form-control" placeholder="E-pasts" name="epasts" required>
                        </div>

                    </div>
                    <div class="row justify-content-center">
                        <div class="col-auto my-3 m-auto">
                            <button type="button" class="btn btn-primary2 mb-3 px-5 open1" id="btn-secondary2">Tālāk</button>
                        </div>
                    </div>
                </div>
                    <!--            otra dala ar kalendaru-->
                    <div class="form-group frm" id="sf3" style="display: none;">
                        <div class="row justify-content-center">
                            <div class="col-5 mr-0 my-2">
                                <?php
                                include("db_connect.php");
                                include("pick_meeting.php");
                                ?>
                                <select id="meetdate" name="meetdate" class="form-select" required>
                                    <option value="" disabled selected hidden style="text-align-last:left; !important">Datums</option>
                                    <?php
                                    foreach ($options as $option) {
                                        ?>
                                        <option value="<?php echo $option['date']; ?>,<?php echo $option['time']; ?>"><?php echo $option['date']; ?>&#160;&#160;&#160;&#160;-&#160;&#160;&#160;&#160;<?php echo $option['time']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <div class="row justify-content-center">
                                    <div class="col-auto my-3 m-auto">
                                        <button type="button" class="btn btn-primary mb-3 px-5 back3">Atpakaļ</button>
                                    </div>
                                    <div class="col-auto my-3 m-auto">
                                        <button class="btn btn-primary mb-3 px-5 open3" type="submit">Iesniegt</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                <div class="form-group frm p-3" id="sf3" style="display: none;">
                    <div class="row justify-content-center">
                        <p>Esat veiksmīgi pieteicies mācībām uz nākamo mācību gadu! Gaidīsim Jūs norunātajā laikā, lai pabeigtu uzņemšanas procesu.</p>

                    </div>

                </div>
            </form>
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