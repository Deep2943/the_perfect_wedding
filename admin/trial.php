<?php
require("../config/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div class="bg-primary p-d-15 b_r_5">
        <div class="float-right m-t-5">
            <i class="fa fa-users"></i>
        </div>
        <div class="user_font">Customer</div>
        <div id="widget_countup1">
            <?php
                session_start();
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
        <div class="tag-white">
            <span id="percent_count1"></span>%
        </div>
        <div class="previous_font">Yearly Customers stats</div>
    </div>
</body>
</html>  