<?php
require("connection.php");
session_start();
require("connection.php");
if(!isset($_SESSION['email_id']))
{
    header("location:login1.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from www.themenesia.com/themeforest/lovus/copytemp.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 18 Sep 2018 10:43:12 GMT -->
<?php
require("header.php");
?>

        <!-- subheader -->
        <section id="subheader" class="subheader_02 dark no-top no-bottom" data-stellar-background-ratio=".2">
            <div class="wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center fadeScroll relative" data-scroll-speed="2">
                            <h2 data-scroll-speed="8">Profile</h2>
                            <div class="small-border"></div>
                            <div class="spacer-doubles"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->
    <section id="section-contact">
        <div class="container">
            <h3>Customer Details</h3>
            <div class="row">
            <?php
                $q = "SELECT * FROM customer"; 
                $data = mysqli_query($con,$q);
                $i = $_SESSION['email_id'];
                $result =mysqli_fetch_array($data);
            ?>
                <table class="table">
                    <tr>
                        <td>Name</td>
                        <td>
                            <span><?php echo $result['name'] ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>
                            <span><?php echo $result['address'] ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Phone No.</td>
                        <td>
                            <span><?php echo $result['phone_no'] ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <span><?php echo $result['email_id'] ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <span><?php echo $result['password'] ?></span>
                        </td>
                    </tr>
                </table>
                <div class="col-md-12 text-center">
                    <div class="spacer-single"></div>
                    <a href="edit_profile.php">
                    <input type="button" value="Edit Profile" class="btn btn-primary" name="edit"/>
                    </a>
                </div>
            </div>
            <h3>Booking Details</h3>
            <div class="row">
            <?php
                $q = "SELECT * FROM booking"; 
                $data = mysqli_query($con,$q);
                $i = $_SESSION['email_id'];
                $result =mysqli_fetch_array($data);
            ?>   
                <table class="table">
                    <tr>
                        <td>Venue</td>
                        <td>
                            <span><?php echo $result['venue'] ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Decoration</td>
                        <td>
                            <span><?php echo $result['decor'] ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>cateror</td>
                        <td>
                            <span><?php echo $result['cateror'] ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>DJ/Music</td>
                        <td>
                            <span><?php echo $result['music'] ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Function</td>
                        <td>
                            <span><?php echo $result['function'] ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Date of Function</td>
                        <td>
                            <span><?php echo $result['date_of'] ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Time Of Function</td>
                        <td>
                            <span><?php echo $result['time_of'] ?></span>
                        </td>
                    </tr>
                </table> 
            </div>
        </div>
    </section>
        
<?php        
require("footer.php");
?>
        
</body>
<!-- Mirrored from www.themenesia.com/themeforest/lovus/copytemp.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 18 Sep 2018 10:44:30 GMT -->
</html>