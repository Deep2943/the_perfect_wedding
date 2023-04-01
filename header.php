<?php
require("connection.php");
?>
<head>
    <meta charset="utf-8">
    <title>The Perfect Wedding - online Wedding Planner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lovus is responsive wedding html website template">
    <meta name="keywords" content="wedding,couple,ceremony,reception,rsvp,gallery,event,countdown">
    <meta name="author" content="">

    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->

    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/jquery.countdown.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/animsition.min.css" type="text/css">
    <link rel="stylesheet" href="css/style - backup.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- custom background -->
    <link rel="stylesheet" href="css/bg.css" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="css/color.css" type="text/css" id="colors">
</head>

<body>
    <div id="wrapper">
        <!-- header begin -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="index.php">
                                <!--<img class="logo" src="images_02/logo-2.png" alt="">
								<img class="logo-2" src="images_02/logo.png" alt="">-->
                                <h2>The Perfect Wedding</h2>
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin
                        <span id="menu-btn"></span>
                        small button close -->

                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="#">Services</a>
                                    <ul>
                                        <li><a href="venues.php">Venues</a></li>
                                        <li><a href="decoration.php">Decoration</a></li>
                                        <li><a href="catering.php">Catering</a></li>
                                        <li><a href="sound.php">DJ/Sound</a></li>
                                    </ul>
                                </li>
                                <li><a href="contactus.php">Contact Us</a></li>
                                <li><a href="aboutus.php">About Us</a></li>
                                <li><a href="profile.php">Profile</a></li>
                                <?php 
                                    if(isset($_SESSION['email_id']))
                                    {
                                ?>
                                <li><a href="logout.php">Logout</a></li>
                                <?php    
                                    }
                                    else
                                    {
                                ?>
                                <li><a href="login1.php">Login</a></li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </div>
        <!-- header close -->       