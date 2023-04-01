<?php 
session_start();
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
                            <h2 data-scroll-speed="8">Contact Us</h2>
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
			<!-- section begin --><!--
            <section id="section-map" class="no-top no-bottom" aria-label="map-container">
                <div id="map"></div>
            </section>-->
			<!-- section close -->
			
            <!-- section begin -->
            <section id="section-contact">
				<div class="container">
					<div class="row">
						
						<div class="col-md-8">
							<div class="row">
						<form name="contactForm" id='contact_form' method="post" action='http://www.themenesia.com/themeforest/lovus/email.php'>
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
											<div class="line-fx"></div>
                                        </div>

                                        <div class="field-set">
                                            <input type='text' name='email' id='email' class="form-control" placeholder="Your Email">
											<div class="line-fx"></div>
                                        </div class="field-set">

                                        <div class="field-set">
                                            <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone">
											<div class="line-fx"></div>
                                        </div>
									</div>									
									
									<div class="col-md-6">
                                        <div class="field-set">
                                            <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
											<div class="line-fx"></div>
                                        </div>
                                    </div>
									
									<div class="spacer-single"></div>

                                    <div class="col-md-12">
                                        <div id='submit'>
                                            <input type='submit' id='send_message' value='Submit Form' class="btn btn-custom">
                                        </div>
                                        <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                        <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                    </div>
                            </form>
					</div>
						</div>
						
						<div class="col-md-3 col-md-offset-1">
							
                            <h6 class="id-color">Address</h6>
                            <h4>Sarva Mangalam Residency,<br>Nr. fire station,<br> 
                                Sabarmati, Ahmedabad </h4>
							
							<div class="spacer-single"></div>
								
							<h6 class="id-color">Call Us</h6>
                            <h4>+91 1234567890</h4>
								
							<div class="spacer-single"></div>

                            <h6 class="id-color">Email Us</h6>
                            <h4>theperfectwedding123@gmail.com</h4>
                        </div>
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
