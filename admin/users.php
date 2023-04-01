<!doctype html>
<?php
require("../config/connection.php");
?>
<html class="no-js" lang="en">
<!-- Mirrored from demo.admireadmin.com/admire_html/users.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 14 Dec 2018 11:24:26 GMT -->
<?php
include("header.php");
?>
            <div id="content" class="bg-container">
                <header class="head">
                    <div class="main-bar">
                        <div class="row">
                        <div class="col-lg-6 col-sm-4">
                            <h4 class="nav_top_align">
                            <i class="fa fa-user"></i>
                            Customer Table
                        </h4>
                        </div>
                        <div class="col-lg-6 col-sm-8 col-12">
                            <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
                                <li class="breadcrumb-item">
                                    <a href="index-2.php">
                                        <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Customer</a>
                                </li>
                                <li class="active breadcrumb-item">Customer Table</li>
                            </ol>
                        </div>
                        </div>
                    </div>
                </header>
                <div class="outer">
                    <div class="inner bg-container">
                        <div class="card">
                            <div class="card-header bg-white">
                                Customer Table
                            </div>
                            <div class="card-body m-t-35" id="user_body">
                                <div class="table-toolbar">
                                    <div class="btn-group">
                                        <a href="add_user.php" id="editable_table_new" class=" btn btn-default">
                                        Add User &nbsp;&nbsp;&nbsp;&nbsp;
                                        <i class="fa fa-plus"></i>
                                        <a href="reports/index.php"> Generate Report </a>
                                          
                                    </a>
                                    </div>
                                    <div class="btn-group float-right users_grid_tools">
                                        <div class="tools"></div>
                                    </div>
                                </div>
                                <div class="outer">
                                <div class="inner bg-container">
                                    <!-- editable data  table starts-->
                                    <div class="row">
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <i class="fa fa-table"> </i> Customer Table
                                            </div>
                                            <div class="card-body">
                                            <div class="m-t-35">
                                                <table id="example" class="table display nowrap" >
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Customer Name</th>
                                                    <th>Address</th> 
                                                    <th>Phone No.</th>
                                                    <th>Email Id</th>
                                                    <th>Password</th>
                                                    <th>Options</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $q = "SELECT * FROM customer"; 
                                                    $data = mysqli_query($con,$q);
                                                    $i = 0;
                                                    while($result =mysqli_fetch_array($data))
                                                    {
                                                        $i++;
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $result['name']; ?></td>
                                                    <td><?php echo $result['address']; ?></td>
                                                    <td><?php echo $result['phone_no']; ?></td>
                                                    <td><?php echo $result['email_id']; ?></td>
                                                    <td><?php echo $result['password']; ?></td>
                                                    <td><a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="edit_user.php?id=<?php echo $result['cust_id'] ?>">
                                                    <i class="fa fa-pencil text-warning"></i></a>&nbsp; &nbsp;
                                                    <a class="delete hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="Delete" href="delete.php?id=<?php echo $result['cust_id'] ?>">
                                                    <i class="fa fa-trash text-danger"></i></a></td>
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
<!-- Mirrored from demo.admireadmin.com/admire_html/users.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 14 Dec 2018 11:24:26 GMT -->
</html>