<?php
require("../config/connection.php");
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.admireadmin.com/admire_html/advanced_tables.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 14 Dec 2018 11:24:19 GMT -->
<?php
include("header.php");
?>

        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-lg-6 col-sm-4">
                        <h4 class="nav_top_align">
                            <i class="fa fa-th"></i>
                            Tables
                        </h4>
                    </div>
                    <div class="col-lg-6 col-sm-8">
                        <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="index-2.php">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Tables</a>
                            </li>
                            <li class="breadcrumb-item">Booking Table</li>

                        </ol>
                        </div>


                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                    <!-- editable data  table starts-->
                    <div class="row">
                        <div class="col">
                        <div class="card">
                            <div class="card-header bg-white">
                                <i class="fa fa-table"> </i> Booking Table
                            </div>
                                 <br>
                            
                            <a href="reports/booking_report.php"> Generate Report </a>
                    
                            <div class="card-body">
                            <div class="m-t-35">
                            <table id="example" class="table display nowrap" >
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Email Id</th>
                                        <th>Venue</th> 
                                        <th>Decor</th>
                                        <th>Cateror</th>
                                        <th>Function</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Guests</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $q = "SELECT * FROM booking"; 
                                $data = mysqli_query($con,$q);
                                $i = 0;
                                while($result =mysqli_fetch_array($data))
                                {
                                    $i++;
                                ?>
                                <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $result['email_id']; ?></td>
                                <td><?php echo $result['venue']; ?></td>
                                <td><?php echo $result['decor']; ?></td>
                                <td><?php echo $result['cateror']; ?></td>
                                <td><?php echo $result['function']; ?></td>
                                <td><?php echo $result['date_of']; ?></td>
                                <td><?php echo $result['time_of']; ?></td>
                                <td><?php echo $result['guests']; ?></td>
                                <td><a class="edit" data-toggle="tooltip" data-placement="top"    title="Edit" href="edit_user.php?id=<?php echo $result['booking_id'] ?>">
                                        <i class="fa fa-pencil text-warning"></i>
                                    </a>&nbsp; &nbsp;
                                    <a class="delete hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="Delete" href="book_delete.php?id=<?php echo $result['booking_id'] ?>">
                                        <i class="fa fa-trash text-danger"></i>
                                    </a>
                                </td>
                                </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- /.inner -->
            </div>
            <!-- /.outer -->
            <!-- /#content -->
        </div>
    </div>
    <!--wrapper-->
<?php
include("footer.php");
?>

</body>

<!-- Mirrored from demo.admireadmin.com/admire_html/advanced_tables.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 14 Dec 2018 11:24:19 GMT -->
</html>