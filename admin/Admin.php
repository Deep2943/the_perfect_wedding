<?php
require("../config/connection.php");
?>
<!doctype html>
<html class="no-js" lang="en">
<!-- Mirrored from demo.admireadmin.com/admire_html/index.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 14 Dec 2018 11:17:25 GMT -->
<?php
include("header.php");
?>
        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="m-t-5">
                                <i class="fa fa-home"></i>
                                Dashboard
                            </h4>
                        </div>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row">
                        <div class="col-sm-6 col-12 col-lg media_max_991">
                            <div class="widget_icon_bgclr icon_align bg-white">
                                <div class="bg_icon bg_icon_warning float-left">
                                    <i class="fa fa-user text-warning" aria-hidden="true"></i>
                                </div>
                                <div class="text-right">
                                    <h3 id="widget_count4">
                                        <?php
                                                $q="SELECT cust_id FROM customer";
                                                if ($result=mysqli_query($con,$q))
                                                {
                                                    // Return the number of rows in result set
                                                    $rowcount=mysqli_num_rows($result);
                                                    printf($rowcount);
                                                    // Free result set
                                                    mysqli_free_result($result);
                                                }
                                        ?> 
                                    </h3>
                                    <p>Customers</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-12 col-lg media_max_991">
                            <div class="widget_icon_bgclr icon_align bg-white">
                                <div class="bg_icon bg_icon_success float-left">
                                    <i class="fa fa-cart-plus text-success" aria-hidden="true"></i>
                                </div>
                                <div class="text-right">
                                    <h3 id="widget_count3">
                                        <?php
                                            $q="SELECT booking_id FROM booking";
                                            if ($result=mysqli_query($con,$q))
                                            {
                                                // Return the number of rows in result set
                                                $rowcount=mysqli_num_rows($result);
                                                printf($rowcount);
                                                // Free result set
                                                mysqli_free_result($result);
                                            }
                                        ?>
                                    </h3>
                                    <p>Orders</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-12 col-lg">
                            <div class="widget_icon_bgclr icon_align bg-white">
                                <div class="bg_icon bg_icon_info float-left">
                                    <i class="fa fa-heart-o text-info" aria-hidden="true"></i>
                                </div>
                                <div class="text-right">
                                    <h3 id="widget_count1">
                                        <?php
                                            $q="SELECT feedback_id FROM feedback";
                                            if ($result=mysqli_query($con,$q))
                                                {
                                                    // Return the number of rows in result set
                                                    $rowcount=mysqli_num_rows($result);
                                                    printf($rowcount);
                                                    // Free result set
                                                    mysqli_free_result($result);
                                                }
                                        ?>
                                    </h3>
                                    <p>Feedback</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <!--top section widgets-->
                    <!-- <div class="row widget_countup">
                        <div class="col-12 col-sm-6 col-xl-3">

                            <div id="top_widget1">
                                <div class="col-12 col-sm-6 col-lg-3">
                            <div class="icon_align bg-white section_border">
                                <div class="float-left progress_icon">
                                    <i class="fa fa-shopping-cart text-success" aria-hidden="true"></i>
                                </div>
                                <div class="text-right">
                                    <h3 id="widget_count5">
                                        <?php
                                                $q="SELECT cust_id FROM customer";
                                                if ($result=mysqli_query($con,$q))
                                                {
                                                    // Return the number of rows in result set
                                                    $rowcount=mysqli_num_rows($result);
                                                    printf($rowcount);
                                                    // Free result set
                                                    mysqli_free_result($result);
                                                }
                                        ?> 
                                    </h3>
                                    <p>Sales</p>
                                </div>
                                <h5>Target <span class="float-right">73%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar progress-striped bg-success" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                                <div class="back">
                                    <div class="bg-white b_r_5 section_border">
                                        <div class="p-t-l-r-15">
                                            <div class="float-right m-t-5">
                                                <i class="fa fa-users text-primary"></i>
                                            </div>
                                            <div id="widget_countup12">
                                            <?php
                                                $q="SELECT cust_id FROM customer";
                                                if ($result=mysqli_query($con,$q))
                                                {
                                                    // Return the number of rows in result set
                                                    $rowcount=mysqli_num_rows($result);
                                                    printf($rowcount);
                                                    // Free result set
                                                    mysqli_free_result($result);
                                                }
                                            ?> 
                                        </div>
                                            <div>Customers</div>
                                        </div>

                                         <div class="row">
                                            <div class="col-lg-12">
                                                <span id="visitsspark-chart" class="spark_line"></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-xl-3 media_max_573">
                            <div id="top_widget2">
                                <div class="front">
                                    <div class="bg-success p-d-15 b_r_5">
                                        <div class="float-right m-t-5">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                        <div class="user_font">Orders</div>
                                        <div id="widget_countup2">
                                        <?php
                                            $q="SELECT booking_id FROM booking";
                                            if ($result=mysqli_query($con,$q))
                                            {
                                                // Return the number of rows in result set
                                                $rowcount=mysqli_num_rows($result);
                                                printf($rowcount);
                                                // Free result set
                                                mysqli_free_result($result);
                                            }
                                        ?>
                                        </div>
                                        <div class="tag-white">
                                            <span id="percent_count2">60</span>%
                                        </div>
                                        <div class="previous_font">Orders per month</div>
                                    </div>
                                </div>

                                <div class="back">
                                    <div class="bg-white b_r_5 section_border">
                                        <div class="p-t-l-r-15">
                                            <div class="float-right m-t-5 text-success">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                            <div id="widget_countup22">
                                            <?php
                                                $q="SELECT booking_id FROM booking";
                                                if ($result=mysqli_query($con,$q))
                                                {
                                                    // Return the number of rows in result set
                                                    $rowcount=mysqli_num_rows($result);
                                                    printf($rowcount);
                                                    // Free result set
                                                    mysqli_free_result($result);
                                                }
                                            ?>
                                            </div>
                                            <div>Orders</div>

                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span id="salesspark-chart" class="spark_line"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-sm-6 col-xl-3 media_max_1199">
                            <div id="top_widget3">
                                <div class="front">
                                    <div class="bg-warning p-d-15 b_r_5">
                                        <div class="float-right m-t-5">
                                            <i class="fa fa-comments-o"></i>
                                        </div>
                                        <div class="user_font">FeedBack</div>
                                        <div id="widget_countup3">
                                            <?php
                                                $q="SELECT feedback_id FROM feedback";
                                                if ($result=mysqli_query($con,$q))
                                                {
                                                    // Return the number of rows in result set
                                                    $rowcount=mysqli_num_rows($result);
                                                    printf($rowcount);
                                                    // Free result set
                                                    mysqli_free_result($result);
                                                }
                                            ?>
                                        </div>
                                        <div class="tag-white ">
                                            <span id="percent_count3">30</span>%
                                        </div>
                                        <div class="previous_font">Monthly Feedback</div>
                                    </div>
                                </div>

                                <div class="back">
                                    <div class="bg-white b_r_5 section_border">
                                        <div class="p-t-l-r-15">
                                            <div class="float-right m-t-5 text-warning">
                                                <i class="fa fa-comments-o"></i>
                                            </div>
                                            <div id="widget_countup32">
                                            <?php
                                                $q="SELECT feedback_id FROM feedback";
                                                if ($result=mysqli_query($con,$q))
                                                {
                                                    // Return the number of rows in result set
                                                    $rowcount=mysqli_num_rows($result);
                                                    printf($rowcount);
                                                    // Free result set
                                                    mysqli_free_result($result);
                                                }
                                            ?>
                                            </div>
                                            <div>Feedback</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span id="mousespeed" class="spark_line"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card m-t-35 real_charts">
                                <div class="card-header bg-white">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-center" href="#orders_section" role="tab" data-toggle="tab">Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#sales_section" role="tab" data-toggle="tab">Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#users_section" role="tab" data-toggle="tab">Customers</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">

                                    <!-- Tab panes --> 
                                    <div class="tab-content m-t-20">
                                        <div role="tabpanel" class="tab-pane fade show active" id="orders_section">
                                            <div id="order_realtime" class="flotChart1">
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="sales_section">
                                            <div id="sale_realtime" class="flotChart1">
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="users_section">
                                            <div id="users_realtime" class="flotChart1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card m-t-35">

                                <div class="card-body m-t-10">
                                    <!-- <svg id="fillgauge1"  width="100%" height="193"></svg> -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Average Monthly Uploads</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div id="test-circle">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <br />
                                            <span id="monthly_upload"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 m-t-35">
                            <div class="social-counter text-center">
                                <ul class="m-b-0">
                                    <li class="facebook">
                                        <a href="#">
                                            <div class="row">
                                                <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-facebook"></i></span></div>
                                                <div class="col-8 text-left social_fa_top"><span class="count"><span id="fb_count">354</span>K</span> Likes</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <div class="row">
                                                <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-twitter"></i></span></div>
                                                <div class="col-8 text-left social_fa_top"><span class="count" id="tw_count">547</span> Followers</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="instagram">
                                        <a href="#">
                                            <div class="row">
                                                <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-instagram"></i></span></div>
                                                <div class="col-8 text-left social_fa_top"><span class="count"><span id="insta_count">20</span>K</span> Followers</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <!-- /#content -->
        </div>
    </div>

<?php
include("footer.php");
?>

</body>

<!-- Mirrored from demo.admireadmin.com/admire_html/index.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 14 Dec 2018 11:17:25 GMT -->
</html>
