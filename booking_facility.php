<?php
session_start();
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
                            <h2 data-scroll-speed="8">Extra Book Details</h2>
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
                        <form class="form-underline" method="POST" action="facility_controller.php">

                            <div class="row-md-6">
                                Email: <input type='text' name='uemail' id='email' class="form-control" placeholder="Your Email">
                            </div>

                            <div class="row-md-6">
                                Makeup: <select name="umakeup">
                                    <option value="NONE">---SELECT---</option>
                                    <?php
                                    $q = "SELECT * from makeup";
                                    $data = mysqli_query($con,$q);
                                    while($result = mysqli_fetch_array($data))
                                        {
                                            extract($result);
                                    ?>
                                    <option value="<?php echo $makeup_name;?>"><?php echo $makeup_name;?></option>
                                    <?php       
                                        }

                                    ?>
                                </select>
                                <a href="venues.php"><input type="button" name="" value="Show Details >>" class="btn btn-primary"></a>
                            </div>

                            <div class="row-md-6">
                                Photographer/Videographer: <select name="uphoto">
                                    <option value="NONE">---SELECT---</option>
                                    <?php
                                    $q = "SELECT * from photgrapher";
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
                                <a href="venues.php"><input type="button" name="" value="Show Details >>" class="btn btn-primary"></a>
                            </div>

                            <div class="row-md-6">
                                Mehandi: <select name="umehandi">
                                    <option value="NONE">---SELECT---</option>
                                    <?php
                                    $q = "SELECT * from mehandi";
                                    $data = mysqli_query($con,$q);
                                    while($result = mysqli_fetch_array($data))
                                        {
                                            extract($result);
                                    ?>
                                    <option value="<?php echo $mehandi_name;?>">
                                        <?php echo $mehandi_name;?></option>
                                    <?php       
                                        }
                                    ?>
                                </select>
                                <a href="venues.php"><input type="button" name="" value="Show Details >>" class="btn btn-primary"></a>
                            </div>

                            <div class="row-md-6">
                                Cake: <select name="ucake">
                                    <option value="NONE">---SELECT---</option>
                                    <?php
                                    $q = "SELECT * from cake";
                                    $data = mysqli_query($con,$q);
                                    while($result = mysqli_fetch_array($data))
                                        {
                                            extract($result);
                                    ?>
                                    <option value="<?php echo $cake_name;?>"><?php echo $cake_name;?></option>
                                     <?php       
                                        }

                                    ?>
                                </select>
                                <a href="venues.php"><input type="button" name="" value="Show Details >>" class="btn btn-primary"></a>
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

                            <div class="col-md-12 text-center">
                                <div class="spacer-single"></div>
                                <input type="submit" value="Submit" class="btn btn-primary" name="btnfbook" />
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
