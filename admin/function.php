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
                            <li class="breadcrumb-item">Function Table</li>
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
                                <i class="fa fa-table"> </i> Function Table
                            </div>
                            <div class="table-toolbar">
                                <div class="btn-group">
                                    <a href="add_function.php" id="editable_table_new" class=" btn btn-default">Add Function  <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                                <div class="btn-group float-right users_grid_tools">
                                    <div class="tools"></div>
                                </div>
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
                                    <a class="delete hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="Delete" href="fun_delete.php?id=<?php echo $result['function_id'] ?>">
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