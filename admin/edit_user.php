<?php
    require("../config/connection.php");
    extract($_GET);
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
                            Edit User
                        </h4>
                        </div>
                        <div class="col-lg">
                            <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Customer</a>
                                </li>
                                <li class="breadcrumb-item active">Edit User</li>
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
                                            <h4>Personal Information</h4>
                                        </div>
                                        <?php
                                        $sql = "SELECT * FROM customer WHERE cust_id = '$id'";
                                        $q1 = mysqli_query($con, $sql);
                                        $data = mysqli_fetch_array($q1);
                                        ?>
                                        <form class="form-horizontal login_validator" id="tryitForm" action="update.php" method="POST">
                                            <div class="row">
                                                <div class="col"> 
                                                    <input type="hidden" name="editID" value="<?php echo $id; ?>"><br>  
                                                    <div class="form-group row m-t-25">
                                                        <div class="col-12 col-lg-3 text-lg-right">
                                                            <label for="u-name" class="col-form-label">Name *</label>
                                                        </div>
                                                        <div class="col-12 col-xl-6 col-lg-8">
                                                            <div class="input-group">
                                                        <span class="input-group-addon"> <i class="fa fa-user text-primary"></i>
                                                        </span>
                                                            <input type="text" name="username" id="username" class="form-control" value="<?php echo $data['name']; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-12 col-lg-3 text-lg-right">
                                                            <label for="address" class="col-form-label">Address *
                                                            </label>
                                                        </div>
                                                        <div class="col-12 col-xl-6 col-lg-8">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                                                <textarea type="text" id="address" name="uaddress" class="form-control">
                                                                    <?php echo trim($data['address']);?>
                                                                </textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-12 col-lg-3 text-lg-right">
                                                            <label for="phone" class="col-form-label">Phone *</label>
                                                        </div>
                                                        <div class="col-12 col-xl-6 col-lg-8">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-phone text-primary"></i></span>
                                                                <input type="text" id="phone" name="uphone" class="form-control" value="<?php echo $data['phone_no'];?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-12 col-lg-3 text-lg-right">
                                                            <label for="email" class="col-form-label">Email *
                                                            </label>
                                                        </div>
                                                        <div class="col-12 col-xl-6 col-lg-8">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-envelope text-primary"></i></span>
                                                                <input type="text" id="email" name="uemail" class="form-control" value="<?php echo $data['email_id'];?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-12 col-lg-3 text-lg-right">
                                                            <label for="pwd" class="col-form-label">Password *</label>
                                                        </div>
                                                        <div class="col-12 col-xl-6 col-lg-8">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-lock text-primary"></i></span>
                                                                <input type="password" name="upassword" id="pwd" class="form-control" value="<?php echo $data['password'];?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-12 col-lg-9 ml-auto">
                                                            <button class="btn btn-primary" name=btnupdate type="submit">
                                                            Update
                                                            </button>
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