<?php
    require("../config/connection.php");
    $sql = "SELECT * FROM `customer` u JOIN area a where u.area_id=a.area_id";
    $result = mysqli_query($con,$sql);
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
                            <div class="card-body">
                            <div class="m-t-35">
                            <table id="example" class="table display nowrap" >
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Customer Id</th>
                                        <th>Function Id</th> 
                                        <th>Date</th>
                                        <th>Venue Id</th>
                                        <th>Decor Id</th>
                                        <th>Catering Id</th>
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
                                <td><?php echo $result['cust_id']; ?></td>
                                <td><?php echo $result['function_id']; ?></td>
                                <td><?php echo $result['date']; ?></td>
                                <td><?php echo $result['venue_id']; ?></td>
                                <td><?php echo $result['decor_id']; ?></td>
                                <td><?php echo $result['catering_id']; ?></td>
                                <td><a class="edit" data-toggle="tooltip" data-placement="top"    title="Edit" href="edit_user.php?id=<?php echo $result['booking_id'] ?>">
                                        <i class="fa fa-pencil text-warning"></i>
                                    </a>&nbsp; &nbsp;
                                    <a class="delete hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="Delete" href="delete.php?id=<?php echo $result['booking_id'] ?>">
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

                    <div class="row">
                        <div class="col">
                        <div class="card">
                            <div class="card-header bg-white">
                                <i class="fa fa-table"> </i> Budget Table
                            </div>
                            <div class="card-body">
                            <div class="m-t-35">
                            <table id="example" class="table display nowrap" >
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Budget Type</th>
                                        <th>Customer Id</th> 
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $q = "SELECT * FROM budget"; 
                                $data = mysqli_query($con,$q);
                                $i = 0;
                                while($result =mysqli_fetch_array($data))
                                {
                                    $i++;
                                ?>
                                <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $result['budget_type']; ?></td>
                                <td><?php echo $result['cust_id']; ?></td>
                                <td><a class="edit" data-toggle="tooltip" data-placement="top"    title="Edit" href="edit_user.php?id=<?php echo $result['budget_id'] ?>">
                                        <i class="fa fa-pencil text-warning"></i>
                                    </a>&nbsp; &nbsp;
                                    <a class="delete hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="Delete" href="delete.php?id=<?php echo $result['budget_id'] ?>">
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

                    <div class="row">
                        <div class="col">
                        <div class="card">
                            <div class="card-header bg-white">
                                <i class="fa fa-table"> </i> Payment Table
                            </div>
                            <div class="card-body">
                            <div class="m-t-35">
                            <table id="example" class="table display nowrap" >
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Payment Type</th>
                                        <th>Payment Date</th>
                                        <th>Payment amount</th> 
                                        <th>Customer Id</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $q = "SELECT * FROM payment"; 
                                $data = mysqli_query($con,$q);
                                $i = 0;
                                while($result =mysqli_fetch_array($data))
                                {
                                    $i++;
                                ?>
                                <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $result['pay_type']; ?></td>
                                <td><?php echo $result['pay_date']; ?></td>
                                <td><?php echo $result['pay_amount']; ?></td>
                                <td><?php echo $result['cust_id']; ?></td>
                                <td><a class="edit" data-toggle="tooltip" data-placement="top"    title="Edit" href="edit_user.php?id=<?php echo $result['pay_id'] ?>">
                                        <i class="fa fa-pencil text-warning"></i>
                                    </a>&nbsp; &nbsp;
                                    <a class="delete hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="Delete" href="delete.php?id=<?php echo $result['pay_id'] ?>">
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

                    <div class="row">
                        <div class="col">
                        <div class="card">
                            <div class="card-header bg-white">
                                <i class="fa fa-table"> </i> Feedback Table
                            </div>
                            <div class="card-body">
                            <div class="m-t-35">
                            <table id="example" class="table display nowrap" >
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Feedback</th>
                                        <th>Customer Name</th> 
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $q = "SELECT * FROM feedback"; 
                                $data = mysqli_query($con,$q);
                                $i = 0;
                                while($result =mysqli_fetch_array($data))
                                {
                                    $i++;
                                ?>
                                <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $result['fb_details']; ?></td>
                                <td><?php echo $result['cust_name']; ?></td>
                                <td><a class="edit" data-toggle="tooltip" data-placement="top"    title="Edit" href="edit_user.php?id=<?php echo $result['feedback_id'] ?>">
                                        <i class="fa fa-pencil text-warning"></i>
                                    </a>&nbsp; &nbsp;
                                    <a class="delete hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="Delete" href="delete.php?id=<?php echo $result['feedback_id'] ?>">
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

                    <div class="row">
                        <div class="col">
                        <div class="card">
                            <div class="card-header bg-white">
                                <i class="fa fa-table"> </i> Image Table
                            </div>
                            <div class="card-body">
                            <div class="m-t-35">
                            <table id="example" class="table display nowrap" >
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image Name</th>
                                        <th>Venue Id</th> 
                                        <th>Function Id</th>
                                        <th>Decor Id</th>
                                        <th>Catering Id</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $q = "SELECT * FROM image"; 
                                $data = mysqli_query($con,$q);
                                $i = 0;
                                while($result =mysqli_fetch_array($data))
                                {
                                    $i++;
                                ?>
                                <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $result['image_name']; ?></td>
                                <td><?php echo $result['venue_id']; ?></td>
                                <td><?php echo $result['function_id']; ?></td>
                                <td><?php echo $result['decor_id']; ?></td>
                                <td><?php echo $result['catering_id']; ?></td>
                                <td><a class="edit" data-toggle="tooltip" data-placement="top"    title="Edit" href="edit_user.php?id=<?php echo $result['image_id'] ?>">
                                        <i class="fa fa-pencil text-warning"></i>
                                    </a>&nbsp; &nbsp;
                                    <a class="delete hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="Delete" href="delete.php?id=<?php echo $result['image_id'] ?>">
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

                    <div class="row">
                        <div class="col">
                        <div class="card">
                            <div class="card-header bg-white">
                                <i class="fa fa-table"> </i> Catering Table
                            </div>
                            <div class="card-body">
                            <div class="m-t-35">
                            <table id="example" class="table display nowrap" >
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Cateror name</th>
                                        <th>Area Id</th> 
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $q = "SELECT * FROM catering"; 
                                $data = mysqli_query($con,$q);
                                $i = 0;
                                while($result =mysqli_fetch_array($data))
                                {
                                    $i++;
                                ?>
                                <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $result['catering_name']; ?></td>
                                <td><?php echo $result['area_id']; ?></td>
                                <td><a class="edit" data-toggle="tooltip" data-placement="top"    title="Edit" href="edit_user.php?id=<?php echo $result['catering_id'] ?>">
                                        <i class="fa fa-pencil text-warning"></i>
                                    </a>&nbsp; &nbsp;
                                    <a class="delete hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="Delete" href="delete.php?id=<?php echo $result['catering_id'] ?>">
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

                    <div class="row">
                        <div class="col">
                        <div class="card">
                            <div class="card-header bg-white">
                                <i class="fa fa-table"> </i> Decoration Table
                            </div>
                            <div class="card-body">
                            <div class="m-t-35">
                            <table id="example" class="table display nowrap" >
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Decor Name</th>
                                        <th>Area Id</th> 
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $q = "SELECT * FROM decoration"; 
                                $data = mysqli_query($con,$q);
                                $i = 0;
                                while($result =mysqli_fetch_array($data))
                                {
                                    $i++;
                                ?>
                                <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $result['decor_name']; ?></td>
                                <td><?php echo $result['area_id']; ?></td>
                                <td><a class="edit" data-toggle="tooltip" data-placement="top"    title="Edit" href="edit_user.php?id=<?php echo $result['decor_id'] ?>">
                                        <i class="fa fa-pencil text-warning"></i>
                                    </a>&nbsp; &nbsp;
                                    <a class="delete hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="Delete" href="delete.php?id=<?php echo $result['decor_id'] ?>">
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

                    <div class="row">
                        <div class="col">
                        <div class="card">
                            <div class="card-header bg-white">
                                <i class="fa fa-table"> </i> Function Table
                            </div>
                            <div class="card-body">
                            <div class="m-t-35">
                            <table id="example" class="table display nowrap" >
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Function Type</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $q = "SELECT * FROM function"; 
                                $data = mysqli_query($con,$q);
                                $i = 0;
                                while($result =mysqli_fetch_array($data))
                                {
                                    $i++;
                                ?>
                                <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $result['fun_type']; ?></td>
                                <td><a class="edit" data-toggle="tooltip" data-placement="top"    title="Edit" href="edit_user.php?id=<?php echo $result['function_id'] ?>">
                                        <i class="fa fa-pencil text-warning"></i>
                                    </a>&nbsp; &nbsp;
                                    <a class="delete hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="Delete" href="delete.php?id=<?php echo $result['function_id'] ?>">
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

                    <div class="row">
                        <div class="col">
                        <div class="card">
                            <div class="card-header bg-white">
                                <i class="fa fa-table"> </i> Venue Table
                            </div>
                            <div class="card-body">
                            <div class="m-t-35">
                            <table id="example" class="table display nowrap" >
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Venue Name</th>
                                        <th>Area Id</th> 
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $q = "SELECT * FROM venue"; 
                                $data = mysqli_query($con,$q);
                                $i = 0;
                                while($result =mysqli_fetch_array($data))
                                {
                                    $i++;
                                ?>
                                <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $result['venue_name']; ?></td>
                                <td><?php echo $result['area_id']; ?></td>
                                <td><a class="edit" data-toggle="tooltip" data-placement="top"    title="Edit" href="edit_user.php?id=<?php echo $result['venue_id'] ?>">
                                        <i class="fa fa-pencil text-warning"></i>
                                    </a>&nbsp; &nbsp;
                                    <a class="delete hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="Delete" href="delete.php?id=<?php echo $result['venue_id'] ?>">
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

                    <div class="row">
                        <div class="col">
                        <div class="card">
                            <div class="card-header bg-white">
                                <i class="fa fa-table"> </i> Area Table
                            </div>
                            <div class="card-body">
                            <div class="m-t-35">
                            <table id="example" class="table display nowrap" >
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Area Name</th>
                                        <th>City Id</th> 
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $q = "SELECT * FROM area"; 
                                $data = mysqli_query($con,$q);
                                $i = 0;
                                while($result =mysqli_fetch_array($data))
                                {
                                    $i++;
                                ?>
                                <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $result['area_name']; ?></td>
                                <td><?php echo $result['city_id']; ?></td>
                                <td><a class="edit" data-toggle="tooltip" data-placement="top"    title="Edit" href="edit_user.php?id=<?php echo $result['area_id'] ?>">
                                        <i class="fa fa-pencil text-warning"></i>
                                    </a>&nbsp; &nbsp;
                                    <a class="delete hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="Delete" href="delete.php?id=<?php echo $result['area_id'] ?>">
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