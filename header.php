<?php
require("connection.php");
?>

<head>
    <meta charset="utf-8">
    <title>The Perfect Wedding</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lovus is responsive wedding html website template">
    <meta name="keywords" content="wedding,couple,ceremony,reception,rsvp,gallery,event,countdown">
    <meta name="author" content="">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->

    <!-- <link rel="stylesheet" href="css/bootstrap.css" type="text/css"> -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/jquery.countdown.css" type="text/css">
    <!-- <link rel="stylesheet" href="css/style.css" type="text/css"> -->
    <link rel="stylesheet" href="css/animsition.min.css" type="text/css">
    <!-- <link rel="stylesheet" href="css/style - backup.css" type="text/css"> -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="js/aos/aos.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/new-style.css" type="text/css">

    <!-- custom background -->
    <link rel="stylesheet" href="css/bg.css" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="css/color.css" type="text/css" id="colors">
    <script src="css/bootstrap/js/bootstrap.js"></script>
    <script src="js/aos/aos.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <div class="nav-contact">
        <div class="container d-flex justify-content-between align-items-center p-1">
            <div class="d-flex align-items-center order-2">
                <i class="fa-solid fa-envelope top-icon"></i><a class="icon-text me-3" href="mailto:demo@gmail.com">demo@gmail.com</a>
                <i class="fa-solid fa-phone top-icon"></i><a class="icon-text me-3" href="tel:9898989898">+91 98989
                    89898</a>
                <i class="fa-solid fa-location-dot top-icon"></i><a class="icon-text" href="">Ahmedabad, India</a>
            </div>
            <a href="javascript:void(0)"></a>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand bottom-header-text" href="/the_perfect_wedding">The Perfect Wedding</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav" id="nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" id="home-link" href="/the_perfect_wedding">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php" id="about-link">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" id="service-link">
                            Services
                        </a>
                        <ul class="dropdown-menu header-dropdown">
                            <li><a class="dropdown-item" href="venues.php">Venues</a></li>
                            <li><a class="dropdown-item" href="decoration.php">Decoration</a></li>
                            <li><a class="dropdown-item" href="catering.php">Catering</a></li>
                            <li><a class="dropdown-item" href="sound.php">DJ/Sound</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php" id="gallery-link">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php" id="profile-link">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php" id="contact-link">Contact Us</a>
                    </li>
                    <?php 
            if(isset($_SESSION['email_id']))
            {
        ?>
                    <a class="login-out-btn" href="logout.php"><i
                            class="fa-solid fa-right-from-bracket login-out-icon"></i> Logout</a>
                    <?php    
            }
            else
            {
        ?>
                    <a href="login1.php" class="login-out-btn"><i
                            class="fa-solid fa-right-to-bracket login-out-icon"></i> Login</a>
                    <?php
            }
        ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- header close -->