<!DOCTYPE html>
<?php
        require_once("../config/connection.php");
        session_start();
            $error="";
            $nameErr="";
            $passErr="";
            $email="";
            $pass="";
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if(empty($_POST["email"]))
            {
                $nameErr = "email is required";
            }
            else
            {       
                $email_id=$_POST["email"];
            }
            if(empty($_POST["pass"]))
            {
                $passErr = "password is required";
            }
            else
            {
                $password=$_POST["pass"];
            }
            if(isset($_POST["email"]) && isset($_POST["pass"]))
            {
                $email_id = $_POST["email"];
                $password = $_POST["pass"];
                
                if($email_id != '' && $password != '')
                {
                    $query = "select * from admin where email_id='".$email_id."' and password='".$password."'";                    
                    $result = mysqli_query($con,$query);                    
                    if (mysqli_num_rows($result) == 1)
                    {
                        $row = mysqli_fetch_array($result);
                        $_SESSION['email'] = $email_id;
                        $_SESSION['success']="You're Logged in!";
                        header("Location:admin.php");
                    }
                    else
                    {
                        $_SESSION['error']='Invalid username or password';
                        header("Location:index.php");
                    }                    
                }
                else
                {
                    //echo "value is null";
                }
            }
            else
            {
                //echo "null value";
            }
        }
?>
<html>

<!-- Mirrored from demo.admireadmin.com/admire_html/login1.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 14 Dec 2018 11:25:18 GMT -->
<head>
    <title>Admin Site - Online Wedding Planner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="img/logo1.ico"/>
    <!--Global styles -->
    <link rel="stylesheet" href="css/components.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link rel="stylesheet" href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css"/>
    <link rel="stylesheet" href="vendors/wow/css/animate.css"/>
    <!--End of Plugin styles-->
    <link rel="stylesheet" href="css/pages/login1.css"/>
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
<div class="container wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 login_top_bottom">
            <div class="row">
                <div class="col-lg-5  col-md-8  col-sm-12 mx-auto">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-center">
                            <img src="img/logow2.png" alt="josh logo" class="admire_logo"><span class="text-black"> ADMIN &nbsp;<br/>
                                Log In</span>
                        </h3>
                    </div>
                    <div class="bg-white login_content login_border_radius">
                        <form action="" id="login_validator" method="post" class="login_validator">
                            <input type="hidden" name="editID" value="<?php echo $id; ?>"><br>
                            <div class="form-group">
                                <label for="email_id" class="col-form-label">E-mail</label>
                                <div class="input-group">
                                    <span class="input-group-addon input_email"><i
                                            class="fa fa-envelope text-primary"></i></span>
                                    <input type="email" class="form-control  form-control-md" id="email" name="email" placeholder="E-mail">
                                    <span class="error"> * <?php  echo $nameErr;?> </span>
                                </div>
                            </div>
                            <!--</h3>-->
                            <div class="form-group">
                                <label for="password" class="col-form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon addon_password"><i
                                            class="fa fa-lock text-primary"></i></span>
                                    <input type="password" class="form-control form-control-md" id="password"   name="pass" placeholder="Password">
                                    <span class="error"> * <?php  echo $passErr;?> </span>
                                </div>
                            </div>
                            <?php
                                if(isset($_SESSION['error']))
                                {
                                echo "<b style='color:red'>".$_SESSION['error']."</b><br>";
                                unset($_SESSION['error']);
                                }
                                else
                                {
                                    echo "";
                                }
                            ?><br>
                
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="submit" value="Log In" class="btn btn-primary btn-block login_button">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="form-group">
                            <div class="row">
                                <!-- <div class="col-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input form-control">
                                        <span class="custom-control-indicator"></span>
                                        <a class="custom-control-description">Keep me logged in</a>
                                    </label>
                                </div> -->
                                <div class="col-6 forgot_pwd">
                                    <a href="forgot_password1.php" class="custom-control-description forgottxt_clr">Forgot password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- end of global js-->
<!--Plugin js-->
<script src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script src="vendors/wow/js/wow.min.js"></script>
<!--End of plugin js-->
<script src="js/pages/login1.js"></script>

</body>


<!-- Mirrored from demo.admireadmin.com/admire_html/login1.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 14 Dec 2018 11:25:19 GMT -->
</html>