<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/98e8ded7b9.js" crossorigin="anonymous"></script>
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->
<!--    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark mt-2" style="background-color: #18130F; color:#FFFAEE">
    <div class="container-fluid">
        <a class="navbar-brand m-lg- mx-sm-3" href="#">
        <img src="brand_logo.png" class="brandlogo" alt="Logo" width="35" height="24" class="d-inline-block align-text-top">
            <div class="d-inline-block align-text-top">Culinary <br> school</div></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mx-3">
                <li class="nav-item mx-3 px-3">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item mx-3 px-3">
                    <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item mx-3 px-3">
                    <a class="nav-link" href="#">Programmes</a>
                </li>
                <li class="nav-item mx-3 px-3">
                    <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item mx-3 px-3">
                    <a class="nav-link" href="#">Contacts</a>
                </li>
                <button class="btn btn-primary2 px-5" type="loginlink">Log-in</button>
            </ul>
        </div>
    </div>
</nav>
<!--Main body dala ar divam kolonnam-->
<div class = "container-fluid  mt-4 mb-0">
    <div class="row justify-content-center">
<!--        pirma kolonna-->
        <div class="col-md text-center fs-1 fw-bold"><h1 class="fw-bold mb-5 display-3">The culinary arts,<br> reinvented</h1>
<!--            vertikala "tabula" ieks pirmas kolonnas-->
            <div class = "container mt-5">
                <div class="row justify-content-md-center my-5">
                <div class="col-lg-5 fw-bold">
                    <div class="row">
                        <div class="col-md-1">
                    <i class="fa-solid fa-thumbs-up fa-2xl"  style="vertical-align:middle; margin-top: 20px; margin-left: 20px; color:#3A2B1E;" alt="thumbs-up"></i>
                        </div>
                        <div class="col-md-11"><p style="color:#BD5007; margin:2px 2px 2px 2px">100%</p><p class = "mt-0" style="color:#18130F; font-size: medium;">Satisfaction</p></div>
                    </div>
                </div>

                </div>
                <div class="row justify-content-md-center my-5">
                    <div class="col-lg-5 fw-bold ">
                        <div class="row">
                            <div class="col-md-1">
                                <i class="fa-solid fa-user fa-2xl"  style="vertical-align:middle; margin-top: 60px; margin-left: 20px; color:#3A2B1E;" alt="thumbs-up"></i>
                            </div>
                            <div class="col-md-11"><p style="color:#BD5007; margin:2px 2px 2px 2px">&nbsp;&nbsp;2.5K+</p><p class = "mt-0" style="color:#18130F; font-size: medium; ">Successful&nbsp;&nbsp;&nbsp;<br>&nbsp;graduates&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
                        </div>
                    </div>

                </div>
                <div class="row justify-content-md-center my-5">
                    <div class="col-lg-5 fw-bold ">
                        <div class="row">
                            <div class="col-md-1">
                                <i class="fa-solid fa-trophy fa-2xl"  style="vertical-align:middle; margin-top: 30px; margin-left: 10px; color:#3A2B1E;" alt="thumbs-up"></i>
                            </div>
                            <div class="col-md-11"><p style="color:#BD5007; margin:2px 2px 2px 2px">50+&nbsp;&nbsp;</p><p class = "mt-0" style="color:#18130F; font-size: medium;">&nbsp;&nbsp;&nbsp;&nbsp;Awards&nbsp;won&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<!--        otra kolonna-->
        <div class="col-md fs-4 fw-bold left-line"><p class="mx-5 ms-1">Learn all you need to become a proficient chef, from the basics of culinary to advanced, restaurant level skills!</p>
            <button class="btn btn-primary2 px-5 py-2">Get Started</button>
            <div id="carouselExampleIndicators" class="carousel slide mt-4 mx-5 ms-1 data-mdb-ride="carousel">
                <div class="carousel-indicators">
                    <button
                            type="button"
                            data-mdb-target="#carouselExampleIndicators"
                            data-mdb-slide-to="0"
                            class="active"
                            aria-current="true"
                            aria-label="Slide 1"
                    ></button>
                    <button
                            type="button"
                            data-mdb-target="#carouselExampleIndicators"
                            data-mdb-slide-to="1"
                            aria-label="Slide 2"
                    ></button>
                    <button
                            type="button"
                            data-mdb-target="#carouselExampleIndicators"
                            data-mdb-slide-to="2"
                            aria-label="Slide 3"
                    ></button>
                </div>
                <div class="carousel-inner mb-5">
                    <div class="carousel-item active">
                        <img src="kitchen-empty.jpeg" class="d-block w-100" alt="Wild Landscape"/>
                    </div>
                    <div class="carousel-item">
                        <img src="kitchen-person.jpeg" class="d-block w-100" alt="Camera"/>
                    </div>
                    <div class="carousel-item">
                        <img src="kitchen-chefs.jpeg" class="d-block w-100" alt="Exotic Fruits"/>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </div>
<div class = "row justify-content-center">
<div class="col-8 text-center fs-1 border border-secondary rounded m-auto" style="background-color: #BD5007; color:#FFFAEE; z-index: 2;">
    <p class = "my-5">FILL OUT OUR FORM TO APPLY NOW!</p>
    <a href="#">
        <img src="brand_logo.png" class="logo mb-5" alt="form-logo" width="230" height="150" class="d-inline-block align-text-top">
    </a>
</div>
    <div class="col-12 text-center fs-1" style="margin-top:-150px; height:200px;background-color:#C8A98D; z-index: auto  ">
        ejhrkujh
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
                            <small>&copy; 2019</small>
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