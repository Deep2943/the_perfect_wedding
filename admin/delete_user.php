<!doctype html>
<html class="no-js" lang="en">
<!-- Mirrored from demo.admireadmin.com/admire_html/delete_user.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 14 Dec 2018 11:24:33 GMT -->
<?php
include("header.php");
?>
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row">
                <div class="col-12 col-sm-5">
                    <h4 class="nav_top_align skin_txt">
                        <i class="fa fa-user"></i>
                        Delete User
                    </h4>
                </div>
                <div class="col-sm-7 col-12">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index-2.php">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Users</a>
                        </li>
                        <li class="breadcrumb-item active">Delete User</li>
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
                            <div class="card-header bg-white">
                                <i class="fa fa-user"></i>
                                Deleted Users List
                            </div>
                            <div class="card-body m-t-35 table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Username</th>
                                        <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">E-Mail</th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Gender</th>
                                        <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">City</th>
                                        <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">Status</th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="even">
                                        <td class="sorting_1">Martena</td>
                                        <td>test@mail.com</td>
                                        <td>Male</td>
                                        <td class="center">New Jersy</td>
                                        <td class="center">Approved</td>
                                        <td>
                                            <a href="users.php" data-toggle="tooltip" data-placement="top" title="Restore">
                                                <i class="fa fa-users text-success"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1">Cedric</td>
                                        <td>test@mail.com</td>
                                        <td>Male</td>
                                        <td class="center">New Jersy</td>
                                        <td class="center">Approved</td>
                                        <td>
                                            <a href="users.php" data-toggle="tooltip" data-placement="top" title="Restore">
                                                <i class="fa fa-users text-success"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1">Sonya</td>
                                        <td>test@mail.com</td>
                                        <td>Male</td>
                                        <td class="center">New Jersy</td>
                                        <td class="center">Approved</td>
                                        <td>
                                            <a href="users.php" data-toggle="tooltip" data-placement="top" title="Restore">
                                                <i class="fa fa-users text-success"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1">Gavin</td>
                                        <td>test@mail.com</td>
                                        <td>Male</td>
                                        <td class="center">New Jersy</td>
                                        <td class="center">Approved</td>
                                        <td>
                                            <a href="users.php" data-toggle="tooltip" data-placement="top" title="Restore">
                                                <i class="fa fa-users text-success"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
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
<?php
include("footer.php");
?>

</body>

<!-- Mirrored from demo.admireadmin.com/admire_html/delete_user.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 14 Dec 2018 11:24:33 GMT -->
</html>