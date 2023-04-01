<?php
session_start();
require("connection.php");
if(!isset($_SESSION['email_id']))
{
    header("location:login1.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.themenesia.com/themeforest/lovus/02_contact.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 18 Sep 2018 10:49:22 GMT -->
<?php
include("header.php");
?>

        <!-- subheader -->
        <section id="subheader" class="subheader_02 dark no-top no-bottom" data-stellar-background-ratio=".2">
            <div class="wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center fadeScroll relative" data-scroll-speed="2">
                            <h2 data-scroll-speed="8">Book Details</h2>
							<div class="small-border"></div>
                            <div class="spacer-double"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <div id="content" class="no-top no-bottom">
            
            <!-- section begin -->
            <section id="section-contact">
                <div class="container">
                    <div class="row">
                        <form class="form-underline" method="POST" action="book_controller.php">
                            <div class="row-md-6">
                                Email: <input type='text' name='uemail' id='email' class="form-control" placeholder="Your Email">
                            </div>

                            <div class="row-md-6">
                                Venue: <select name="uvenue">
                                    <option value="NONE">---SELECT---</option>
                                    <?php
                                    $q = "SELECT * from venue";
                                    $data = mysqli_query($con,$q);
                                    while($result = mysqli_fetch_array($data))
                                        {
                                            extract($result);
                                    ?>
                                    <option value="<?php echo $venue_name;?>"><?php echo $venue_name;?></option>
                                    <?php       
                                        }
                                    ?>
                                </select>
                                <a href="venues.php"><input type="button" name="" value="Show Details >>" class="btn btn-primary"></a>
                            </div>

                            <div class="row-md-6">
                                Decor: <select name="udecor">
                                    <option value="NONE">---SELECT---</option>
                                    <?php
                                    $q = "SELECT * from decoration";
                                    $data = mysqli_query($con,$q);
                                    while($result = mysqli_fetch_array($data))
                                        {
                                            extract($result);
                                    ?>
                                    <option value="<?php echo $decor_name;?>"><?php echo $decor_name;?></option>
                                    <?php       
                                        }
                                    ?>
                                </select>
                                <a href="venues.php"><input type="button" name="" value="Show Details >>" class="btn btn-primary"></a>
                            </div>

                            <div class="row-md-6">
                                Cateror: <select name="ucateror">
                                    <option value="NONE">---SELECT---</option>
                                    <?php
                                    $q = "SELECT * from catering";
                                    $data = mysqli_query($con,$q);
                                    while($result = mysqli_fetch_array($data))
                                        {
                                            extract($result);
                                    ?>
                                    <option value="<?php echo $catering_name;?>"><?php echo $catering_name;?></option>
                                    <?php       
                                        }
                                    ?>
                                </select>
                                <a href="venues.php"><input type="button" name="" value="Show Details >>" class="btn btn-primary"></a>
                            </div>

                            <div class="row-md-6">
                                DJ/Music: <select name="usound">
                                    <option value="NONE">---SELECT---</option>
                                    <?php
                                    $q = "SELECT * from sound";
                                    $data = mysqli_query($con,$q);
                                    while($result = mysqli_fetch_array($data))
                                        {
                                            extract($result);
                                    ?>
                                    <option value="<?php echo $name;?>"><?php echo $name;?></option>
                                    <?php       
                                        }
                                    ?>
                                </select>
                                <a href="sound.php"><input type="button" name="" value="Show Details >>" class="btn btn-primary"></a>
                            </div>

                            <div class="row-md-2">
                                Function:   <select name="ufunction">
                                                <option value="Engagement">Engagement</option>
                                                <option value="Mehandi">Mehandi</option>
                                                <option value="Sangeet">Sangeet</option>
                                                <option value="Haldi">Haldi</option>
                                                <option value="Wedding">Wedding</option>
                                                <option value="Reception">Reception</option>
                                            </select>
                            </div>

                            <div class="row-md-2">
                                Date: <input type="Date" name="udate">
                            </div>

                            <div class="spacer-single"></div>

                            <div class="row-md-2">
                                Time:   <select name="utime">
                                            <option value="7:00 AM to 4:00 PM">7:00 AM to 4:00 PM</option>
                                            <option value="5:00 PM to 2:00 AM">5:00 PM to 2:00 AM</option>
                                            <option value="7:00 AM to 4:00 PM">11:00 AM to 3:00 PM</option>
                                            <option value="5:00 PM to 2:00 AM">6:00 PM to 11:00 PM</option>
                                        </select>  
                            </div>

                            <div class="spacer-single"></div>

                            <div class="row-md-2">
                                guests: <input type="number" name="uguests">
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="spacer-single"></div>
                                <input type="submit" value="Submit" class="btn btn-primary" name="btnbook" />
                                <button type="reset" class="btn btn-danger" name="btnreset">Reset</button>
                                <br/>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>

<?php
include("footer.php");      
?>

</body>

<!-- Mirrored from www.themenesia.com/themeforest/lovus/02_contact.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 18 Sep 2018 10:49:22 GMT -->
</html>
