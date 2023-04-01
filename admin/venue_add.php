<!doctype html>
<html class="no-js" lang="en">
<!-- Mirrored from demo.admireadmin.com/admire_html/add_user.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 14 Dec 2018 11:24:26 GMT -->
<?php
include("header.php");
?>
        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="nav_top_align">
                                <i class="fa fa-user"></i>
                                Add Venue
                            </h4>
                        </div>
                        <div class="col-lg-6">
                            <div class="float-right">
                                <ol class="breadcrumb nav_breadcrumb_top_align">
                                    <li class="breadcrumb-item">
                                        <a href="index-2.php">
                                            <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">Tables</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">Venue Table</a>
                                    </li>
                                    <li class="breadcrumb-item active">Add Venue</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="outer">
                <div class="inner bg-container">
                    <div class="card">

                        <div class="card-body m-t-35">
                            <div>
                                <h4>Venue Information</h4>
                            </div>
                            <form class="form-horizontal login_validator" id="tryitForm" action="cat_add_con.php" method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">Name *</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                <span class="input-group-addon"> <i class="fa fa-user text-primary"></i></span>
                                                    <input type="text" name="username" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="address" class="col-form-label">Address *</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                                    <input type="text" placeholder=" " name="vaddress"  class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="phone" class="col-form-label">Phone
                                                    *</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-phone text-primary"></i></span>
                                                    <input type="text" placeholder=" " name="vphone" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-9 ml-auto">
                                                <button class="btn btn-primary" type="submit" name="btnsubmit">
                                                    <i class="fa fa-user"></i>
                                                    Add Venue
                                                </button>
                                                <button class="btn btn-warning" type="reset">
                                                    <i class="fa fa-refresh"></i>
                                                    Reset
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.inner -->
            </div>
            <!-- /.outer -->
            <!-- # right side -->
        </div>
        <!-- /#content -->
    </div>
    
<?php
include("footer.php");
?>

</body>

<!-- Mirrored from demo.admireadmin.com/admire_html/add_user.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 14 Dec 2018 11:24:27 GMT -->
</html>