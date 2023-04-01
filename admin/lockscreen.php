<!DOCTYPE html>
<html>

<!-- Mirrored from demo.admireadmin.com/admire_html/lockscreen.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 14 Dec 2018 11:18:40 GMT -->
<head>
    <title>Admin Site - Online Wedding Planner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="img/logo1.ico"/>
    <!-- Global styles -->
    <link rel="stylesheet" href="css/components.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <link rel="stylesheet" href="css/pages/login1.css"/>
    <link rel="stylesheet" href="vendors/wow/css/animate.css"/>
    <!--End of global styles-->
    <link rel="stylesheet" href="css/pages/lockscreen.css"/>
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
<div>
    <div class="login-container  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="row">
            <div class="col-lg-12 login_border_radius1 lockscreen_img">
                <div id="output"></div>
                <div class="avatar"></div>
            </div>
            <div class="col-lg-12 login_border_radius lockscreen_content">
                <div class="form-box">
                    <form method="POST" name="screen">
                        <div class="form">
                            <p class="form-control-static">ADMIN</p>
                            <input type="password" name="user" class="form-control" placeholder="Password">
                            <button class="btn btn-primary btn-block login" id="index_submit" type="submit">GO</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="vendors/wow/js/wow.min.js"></script>
<!-- end of global js-->
<!-- page level js-->
<script src="js/pages/lockscreen.js"></script>
<script>
    new WOW().init();
</script>
</body>


<!-- Mirrored from demo.admireadmin.com/admire_html/lockscreen.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 14 Dec 2018 11:18:44 GMT -->
</html>