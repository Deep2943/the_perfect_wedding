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
                            <h2 data-scroll-speed="8">Login</h2>
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
                        <form class="form-underline" method="POST" action="login.php">

                            <div class="row-md-6" id="email">
                                Email: <input type="email" name="uemail" id="email" class="form-control" placeholder="Your Email">
                                <span class="error"> * <?php  echo $nameErr;?> </span>
                            </div>

                            <div class="row-md-6">
                                Password: <input type="password" name="upassword" id="password" class="form-control" placeholder="Your Password">
                                <span class="error"> * <?php  echo $passErr;?> </span>
                                <br><br>
                            </div>

                            <div class="col-md-12 text-center">
                                <input type="submit" value="Login" class="btn btn-primary" name="btnlogin" /><br/><br/>
                            </div>

                        </form>
                        <div class="col-md-12 text-center">
                            New in The Perfect Wedding?
                        </div>
                        <div class="col-md-12 text-center">
                            <a href="registration.php" style="color: indigo">Register</a>
                        </div>
					</div>
				</div>
            </section>
        </div>

<?php
include("footer.php");      
?>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c9f24421de11b6e3b05f68e/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>

<!-- Mirrored from www.themenesia.com/themeforest/lovus/02_contact.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 18 Sep 2018 10:49:22 GMT -->
</html>
