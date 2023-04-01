<head>
    <meta charset="UTF-8">
    <title>Admin Site - The Perfect Wedding</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico"/>

    <!--global styles-->
    <link rel="stylesheet" href="css/components.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <!-- end of global styles-->
    <link rel="stylesheet" href="vendors/chartist/css/chartist.min.css" />
    <link rel="stylesheet" href="vendors/circliful/css/jquery.circliful.css">
    <link rel="stylesheet" href="css/pages/index.css">
    <link rel="stylesheet" href="#" id="skin_change" />
    <a href="lockscreen.php"></a>
</head>

<body>
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
  z-index: 999999">
    <img src="img/loader.gif" style=" width: 40px;" alt="loading...">
</div>
</div>
<div id="wrap">
    <div id="top">
        <!-- .navbar -->
        <nav class="navbar navbar-static-top">
            <div class="container-fluid m-0">
                <a class="navbar-brand mr-0" href="index-2.php">
                    <h4 class="text-white"><img src="img/logow.png" class="admin_img" alt="logo"> ADMIRE ADMIN</h4>
                </a>
                <div class="menu mr-sm-auto">
                        <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars text-white"></i>
                    </span>
                </div>
                <div class="topnav dropdown-menu-right ml-auto">
                    <div class="btn-group">
                        <a class="btn btn-default btn-sm messages toggle-right">
                            &nbsp;
                            <i class="fa fa-cog text-white"></i>
                            &nbsp;
                        </a>
                    </div>
                    <div class="btn-group">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                <img src="img/b.jpg" class="admin_img2 rounded-circle avatar-img" alt="avatar"> <strong>Admin</strong>
                                <span class="fa fa-sort-down white_bg"></span>
                            </button>
                            <div class="dropdown-menu admire_admin">
                                <div class="popover-header">Admire Admin</div>
                                <a class="dropdown-item" href="changepw.php">
                                    <i class="fa fa-password"></i> Change Password
                                </a>
                                <a class="dropdown-item" href="lockscreen.php"><i class="fa fa-lock"></i>
                                    Lock Screen</a>
                                <a class="dropdown-item" href="index.php"><i class="fa fa-sign-out"></i>
                                    Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- /.navbar -->
        <!-- /.head -->
    </div>
    <!-- /#top -->
    <div class="wrapper">
        <div id="left">
            <div class="menu_scroll">
                <div class="media user-media">
                    <div class="user-media-toggleHover">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="user-wrapper">
                        <a class="user-link" href="#">
                            <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture" src="img/b.jpg">
                            <p class="text-white user-info">Welcome Admin</p>
                        </a>
                        <div class="search_bar col-lg-12">
                            <div class="input-group">
                                <input type="search" class="form-control " placeholder="search">
                                <span class="input-group-btn">
                                    <button class="btn" type="button"><span class="fa fa-search" >
                                    </span></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #menu -->
                <ul id="menu">
                    <!-- <li>
                        <a href="login1.php">
                            <i class="fa fa-home"></i>
                            <span class="link-title menu_hide">&nbsp;LOGIN</span>
                        </a>
                    </li> -->
                    <li class="active">
                        <a href="Admin.php">
                            <i class="fa fa-tachometer"></i>
                            <span class="link-title menu_hide">&nbsp;Dashboard </span>
                        </a>
                    </li>
                    <li class="dropdown_menu">
                        <a href="tables.php">
                            <i class="fa fa-th"></i>
                            <span class="link-title menu_hide">&nbsp; Tables</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>  
                        <ul>
                            <li>
                                <a href="booking.php">
                                    <i class="fa fa-angle-right"></i> &nbsp; Booking 
                                </a>
                            </li>
                            <li>
                                <a href="budget.php">
                                    <i class="fa fa-angle-right"></i> &nbsp; Budget 
                                </a>
                            </li>
                            <li>
                                <a href="payment.php">
                                    <i class="fa fa-angle-right"></i> &nbsp;  Payment 
                                </a>
                            </li>
                            <li>
                                <a href="feedback.php">
                                    <i class="fa fa-angle-right"></i> &nbsp; Feedback 
                                </a>
                            </li>
                            <li>
                                <a href="image.php">
                                    <i class="fa fa-angle-right"></i> &nbsp; Image 
                                </a>
                            </li>
                            <li>
                                <a href="catering.php">
                                    <i class="fa fa-angle-right"></i> &nbsp; Catering 
                                </a>
                            </li>
                            <li>
                                <a href="decoration.php">
                                    <i class="fa fa-angle-right"></i> &nbsp; Decoration 
                                </a>
                            </li>
                            <li>
                                <a href="venue.php">
                                    <i class="fa fa-angle-right"></i> &nbsp;  Venue
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-picture-o"></i>
                            <span class="link-title menu_hide">&nbsp; Galleries</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="gallery.php">
                                    <i class="fa fa-angle-right"></i> &nbsp; Gallery
                                </a>
                            </li>
                            <!-- <li>
                                <a href="video_gallery.php">
                                    <i class="fa fa-angle-right"></i> &nbsp; Video Gallery
                                </a>
                            </li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="calendar.php">
                            <i class="fa fa-calendar"></i>
                            <span class="link-title menu_hide">&nbsp; Calendar</span>
                            <span class="badge badge-pill badge-primary float-right calendar_badge menu_hide">7</span>
                        </a>
                    </li>
                    <li>
                        <a href="file_upload.php">
                            <i class="fa fa-file"></i>
                            <span class="link-title menu_hide">&nbsp;File Upload</span>
                        </a>
                    </li>
                    <li class="dropdown_menu">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span class="link-title menu_hide">&nbsp; Customer</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="users.php">
                                    <i class="fa fa-angle-right"></i> &nbsp; Customer 
                                </a>
                            </li>
                            <li>
                                <a href="add_user.php">
                                    <i class="fa fa-angle-right"></i> &nbsp; Add User
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /#left -->