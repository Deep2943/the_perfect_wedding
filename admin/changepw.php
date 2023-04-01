<?php
    require("../config/connection.php");
?>
<!doctype html>
<html class="no-js" lang="en">
<!-- Mirrored from demo.admireadmin.com/admire_html/edit_user.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 14 Dec 2018 11:18:36 GMT -->
<?php
include("header.php");
?>

            <div id="content" class="bg-container">
                <header class="head">
                    <div class="main-bar">
                        <div class="row">
                        <div class="col-lg">
                            <h4 class="nav_top_align skin_txt">
                            <i class="fa fa-pencil"></i>
                            Change Password
                        </h4>
                        </div>
                        <div class="col-lg">
                            <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <i class="fa fa-home" data-pack="default" data-tags=""></i>Admin
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Change Password</a>
                                </li>
                            </ol>
                        </div>
                        </div>
                    </div>
                </header>
                <div class="outer">
                    <div class="inner bg-container">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body m-t-25">
                                        <div>
                                            <h4>Change Password</h4>
                                        </div>
                                        <form class="form-horizontal login_validator" id="tryitForm" action="pw_controller.php" method="POST">
                                            <div class="row">
                                                <div class="col"> 
                                                    <!--<input type="hidden" name="editID" value="<?php echo $id; ?>"><br>-->
                                                    <div class="form-group row m-t-25">
                                                        <div class="col-12 col-lg-3 text-lg-right">
                                                            <label for="pwd" class="col-form-label">Current Password</label>
                                                        </div>
                                                        <div class="col-12 col-xl-6 col-lg-8">
                                                            <div class="input-group">
                                                        <span class="input-group-addon"> <i class="fa fa-lock text-primary"></i>
                                                        </span>
                                                            <input type="password" name="oldpassword" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-12 col-lg-3 text-lg-right">
                                                            <label for="pwd" class="col-form-label">New Password</label>
                                                        </div>
                                                        <div class="col-12 col-xl-6 col-lg-8">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-lock text-primary"></i></span>
                                                                <input type="password" name="password" id="pwd" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-12 col-lg-3 text-lg-right">
                                                            <label for="pwd" class="col-form-label">Confirm Password</label>
                                                        </div>
                                                        <div class="col-12 col-xl-6 col-lg-8">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-lock text-primary"></i></span>
                                                                <input type="password" name="cpassword" id="pwd" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-12 col-lg-9 ml-auto">
                                                            <input type="submit" class="btn btn-primary" name=changepassword value="Change Password">
                                                            <input type="reset" class="btn btn-warning" value='Reset' id="clear"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.inner -->
                </div>
                <!-- /.outer -->
            </div>
            <!-- /#content -->
        </div>
        <!--wrapper-->
<?php
include("footer.php");
?>
       
</body>
<!-- Mirrored from demo.admireadmin.com/admire_html/edit_user.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 14 Dec 2018 11:18:40 GMT -->
</html>