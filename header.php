<!DOCTYPE html>

<html lang="en">

<head>

<style>
    .dropbtn {
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content img{
        width: 30px;
    }

    .dropdown-content {
      border-radius: 20px;
      background-color: #ffff;
      display: none;
      position: absolute;
      width: 350px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2) !important;
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover 
    {
        background-color: transparent;
    }

    .dropdown-content a{
        float: left;
    }

    .dropdown:hover .dropdown-content 
    {
        display: block;
    }

</style>

  <title>UBank Connect - Online Payment Gateway for local payments</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="icon" type="image/favicon" href="img/fav.png">

<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="css/responsive.css">

<link rel="stylesheet" href="css/infinite-slider.css">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"

    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



    <script src="js/script.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body  data-aos="zoom-in-down">



<!--Header Section Start-->

<section id="myHeader" class="header HeaderSection">

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-3">

                <div class="logo">

                    <img src="img/logo.png" alt="Logo">

                </div>

            </div>

            <div class="col-md-6">

                <nav class="navbar navbar-expand-sm text-right">

                    <button type="button" class="NavButton btn">&#9776;</button>

                    <div class="NavSection">

                        <ul class="navbar-nav">

                            <li class="nav-item">

                                <a class="nav-link" href="index.php">Home</a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link" href="#service">Service</a>

                            </li>

                            <li class="nav-item dropdown">

                                <a class="nav-link dropbtn" href="#countries">Countries
                                <i class="jet-dropdown-arrow fa fa-angle-down"></i>
                                </a>

                                <div class="dropdown-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="#"><img src="./img/india.png"> India</a>
                                            <a href="#"><img src="./img/usa.png"> USA</a>
                                            <a href="#"><img src="./img/china.png"> China</a>
                                            <a href="#"><img src="./img/indonesia.png"> Indonesia</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="#"><img src="./img/thailand.png"> Thailand</a>
                                            <a href="#"><img src="./img/vietnam.png"> Vietnam</a>
                                            <a href="#"><img src="./img/philippine.png"> Philippines</a>
                                            <a href="#"><img src="./img/malaysia.png"> Malaysia</a>
                                        </div>
                                    </div>
                                </div>
                                
                            </li>

                            <li class="nav-item">

                                <a class="nav-link" href="#methods">Payment Method</a>

                            </li>

                            <li class="nav-item dropdown">

                                <a class="nav-link" href="#developer">Developer<i class="jet-dropdown-arrow fa fa-angle-down" style="margin-left: 2px;"></i></a>

                                <div class="dropdown-content" style="width: 230px !important;">
                                    <!-- <div class="row"> -->
                                        <!-- <div class="col-md-6"> -->
                                            <a href="#doc">Doc</a>
                                            <a href="#">Integration</a>
                                            <a href="#">API</a>
                                        <!-- </div>
                                    </div> -->
                                </div>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link" href="#contact">Contact Us</a>

                            </li>

                        </ul>

                        <div class="btnSection">

                            <div class="Bannerbutton">

                                <a href="https://bankconnect.online/" target="_blank"  class="btn blue">Login</a>

                                <a href="https://bankconnect.online/" target="_blank" class="btn blue2">Sign Up</a>

                            </div>

                        </div>

                    </div>

                </nav>

            </div>

            <div class="col-md-3">

                <div class="btnSection" style="
                text-align: center;
                margin-left: 10px;
                ">

                    <div class="Bannerbutton">

                        <a href="https://bankconnect.online/" target="_blank" class="btn blue">Login</a>

                        <a href="https://bankconnect.online/" target="_blank" class="btn blue2">Sign Up</a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!--Header Section End-->



