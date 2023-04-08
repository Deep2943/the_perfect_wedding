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
    <link rel="stylesheet" href="css/new-style.css" type="text/css">
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

    <!-- custom background -->
    <link rel="stylesheet" href="css/bg.css" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="css/color.css" type="text/css" id="colors">
    <script src="css/bootstrap/js/bootstrap.js"></script>
    <script src="js/aos/aos.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<?php
$nav_links = array(
  "index.php" => "Home",
  "about.php" => "About Us",
  "services.php" => "Our Services",
  "contact.php" => "Contact Us"
);
?>

<body>
    <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/the_perfect_wedding">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="venues.php">Venues</a></li>
                            <li><a class="dropdown-item" href="decoration.php">Decoration</a></li>
                            <li><a class="dropdown-item" href="catering.php">Catering</a></li>
                            <li><a class="dropdown-item" href="sound.php">DJ/Sound</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">Contact Us</a>
                    </li>
                    <?php 
            if(isset($_SESSION['email_id']))
            {
        ?>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    <?php    
            }
            else
            {
        ?>
                    <li class="nav-item"><a href="login1.php" class="nav-link">Login</a></li>
                    <?php
            }
        ?>
                </ul>
            </div>
        </div>
    </nav>
    <?php /*  <div id="wrapper">
        <header class="bottom-header">
            <div class="container bottom-header-content">
                <!-- <div id="logo">
                    <a href="index.php">
                        <h2 class="bottom-header-text">The Perfect Wedding</h2>
                    </a>
                </div> -->
                <nav>
                    <ul id="mainmenu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="javascript:void(0)">Services</a>
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
    </header>
    </div> */ ?>
    <!-- header close -->