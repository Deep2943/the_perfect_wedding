<?php
Require("connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.themenesia.com/themeforest/lovus/02_services.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 18 Sep 2018 10:49:28 GMT -->
<?php
include("header.php");
?>

        <!-- subheader -->
        <section id="subheader" class="subheader_02 dark no-top no-bottom" data-stellar-background-ratio=".2">
            <div class="wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center fadeScroll relative" data-scroll-speed="2">
                            <h2 data-scroll-speed="8">Gallery</h2>
							<div class="small-border"></div>
                            <div class="spacer-doubles"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content">
            <div class="container">
                <!--<div class="row">
					<a href="venues.php">
                    <h3>WEDDING VENUES</h3></a>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/1.jpg" height="200" width="300">
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/2.jpg" height="200" width="300"> 
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/3.jpg" height="200" width="300">
                    </div> -->
                    <?php
                        $q = "SELECT * FROM photo";
                        $data = mysqli_query($con,$q);
                        $i = 0;
                        while($result = mysqli_fetch_array($data))
                        {
                            $i++;
                        ?>
                        <div class="col-md-4 text-center">                               
                            <img src="admin/img/<?php echo $result['name'];?>" height="200" width="300">
                        </div>
                        <?php
                            }
                        ?>
				</div>
                <!-- <div class="spacer-double"></div>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/11.jpg" height="200" width="300">
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/12.jpg" height="200" width="300"> 
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/13.jpg" height="200" width="300">
                    </div>
                </div>
                <div class="spacer-double"></div>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/43.jpg" height="200" width="300">
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/44.jpg" height="200" width="300"> 
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/45.jpg" height="200" width="300">
                    </div>
                </div>

                <div class="spacer-double"></div>

                <div class="row">				
                    <a href="decoration.php">
                    <h3>WEDDING DECORATION</h3></a>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/7.jpg" height="200" width="300">
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/8.jpg" height="200" width="300"> 
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/9.jpg" height="200" width="300">
                    </div>
				</div>
                <div class="spacer-double"></div>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/20.jpg" height="200" width="300">
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/21.jpg" height="200" width="300"> 
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/23.jpg" height="200" width="300">
                    </div>
                </div> 
                <div class="spacer-double"></div>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/23.jpg" height="200" width="300">
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/24.jpg" height="200" width="300"> 
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/37.jpg" height="200" width="300">
                    </div>
                </div>

                <div class="spacer-double"></div>

                <div class="row">			
                    <a href="catering.php">
                    <h3>WEDDING CATERING</h3></a>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/4.jpg" height="200" width="300">
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/5.jpg" height="200" width="300"> 
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/6.jpg" height="200" width="300">
                    </div>
				</div>
                <div class="spacer-double"></div>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/25.jpg" height="200" width="300">
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/26.jpg" height="200" width="300"> 
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/27.jpg" height="200" width="300">
                    </div>
                </div>
                <div class="spacer-double"></div>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/28.jpg" height="200" width="300">
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/29.jpg" height="200" width="300"> 
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/36.jpg" height="200" width="300">
                    </div>
                </div>


                <div class="spacer-double"></div>

                <div class="row">				
                    <a href="sound.php">
                    <h3>WEDDING DJ/MUSIC</h3></a>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/30.jpg" height="200" width="300">
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/31.jpg" height="200" width="300"> 
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/32.jpg" height="200" width="300">
                    </div>
                </div>
                <div class="spacer-double"></div>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/33.jpg" height="200" width="300">
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/34.jpg" height="200" width="300"> 
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/35.jpg" height="200" width="300">
                    </div>
                </div>
                <div class="spacer-double"></div>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/40.jpg" height="200" width="300">
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/41.jpg" height="200" width="300"> 
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="images/gallery/42.jpg" height="200" width="300">
                    </div>
                </div>-->
            </div>
        </div> 

<?php
include("footer.php");      
?>

</body>

<!-- Mirrored from www.themenesia.com/themeforest/lovus/02_services.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 18 Sep 2018 10:49:28 GMT -->
</html>
