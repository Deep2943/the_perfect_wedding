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
                            <h2 data-scroll-speed="8">Register</h2>
							<div class="small-border"></div>
                            <div class="spacer-double"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content" class="no-top no-bottom">
			
            <!-- section begin -->
            <section id="section-contact">
				<div class="container">
					<div class="row">
                        <form class="form-underline" method="POST" action="register.php">
                            <div class="row-md-2">
                                Name: <input type="text" class="form-control" name="username" placeholder="Name">
                            </div>

                            <div class="row-md-2">
                                Address: <textarea name="uaddress" placeholder="Address" class="form-control"></textarea>
                            </div>

                            <div class="row-md-2">
                                Phone: <input type="text" placeholder="Phone Number" name="uphone" class="form-control"/>
                            </div>

                            <div class="row-md-2">
                                Email: <input type="email" placeholder="Email Address" name="uemail" class="form-control"/>
                            </div>

                            <div class="row-md-2">
                                Password: <input type="text" placeholder="Password" name="upassword" class="form-control"/>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="spacer-single"></div>
                                <input type="submit" value="Submit" class="btn btn-primary" name="btnsubmit" />
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
