<?php

$MERCHANT_KEY = "LvyE2tVU";
$SALT = "DuIF9lSIvL";
// Merchant Key and Salt as provided by Payu.

//$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
<html>
<?php
require("connection.php");
session_start();
?>
  <head>
  <meta charset="utf-8">
    <title>The Perfect Wedding - online Wedding Planner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lovus is responsive wedding html website template">
    <meta name="keywords" content="wedding,couple,ceremony,reception,rsvp,gallery,event,countdown">
    <meta name="author" content="">

    <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <![endif]-->

    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/jquery.countdown.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/animsition.min.css" type="text/css">
    <link rel="stylesheet" href="css/style - backup.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- custom background -->
    <link rel="stylesheet" href="css/bg.css" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="css/color.css" type="text/css" id="colors">
    <script>
      var hash = '<?php echo $hash ?>';
      function submitPayuForm() {
        if(hash == '') {
          return;
        }
        var payuForm = document.forms.payuForm;
        payuForm.submit();
      }
    </script>
  </head>
  <body onload="submitPayuForm()">
    <div id="wrapper">
      <!-- header begin -->
      <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="index.php">
                                <!--<img class="logo" src="images_02/logo-2.png" alt="">
                <img class="logo-2" src="images_02/logo.png" alt="">-->
                                <h2>The Perfect Wedding</h2>
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin
                        <span id="menu-btn"></span>
                        small button close -->

                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="#">Services</a>
                                    <ul>
                                        <li><a href="venues.php">Venues</a></li>
                                        <li><a href="decoration.php">Decoration</a></li>
                                        <li><a href="catering.php">Catering</a></li>
                                        <li><a href="sound.php">DJ/Sound</a></li>
                                    </ul>
                                </li>
                                <li><a href="contactus.php">Contact Us</a></li>
                                <li><a href="aboutus.php">About Us</a></li>
                                <li><a href="profile.php">Profile</a></li>
                                <?php 
                                    if(isset($_SESSION['email_id']))
                                    {
                                ?>
                                <li><a href="logout.php">Logout</a></li>
                                <?php    
                                    }
                                    else
                                    {
                                ?>
                                <li><a href="login1.php">Login</a></li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- header close -->
    <!-- subheader -->
    <section id="subheader" class="subheader_02 dark no-top no-bottom" data-stellar-background-ratio=".2">
            <div class="wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center fadeScroll relative" data-scroll-speed="2">
                            <h2 data-scroll-speed="8">Payment Details</h2>
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
    <br/><br/>
    <h3>Extra Booking Details</h3>
    <div class="row">
      <?php
        $q = "SELECT * FROM extra_facility"; 
        $data = mysqli_query($con,$q);
        $i = $_SESSION['email_id'];
        $result =mysqli_fetch_array($data);
      ?>   
      <table class="table">
        <tr>
          <td>Makeup Artist</td>
          <td>
            <span><?php echo $result['makeup'] ?></span>
          </td>
        </tr>
        <tr>
          <td>Photographer</td>
          <td>
            <span><?php echo $result['photo'] ?></span>
          </td>
        </tr>
        <tr>
          <td>Mehandi Artist</td>
          <td>
            <span><?php echo $result['mehandi'] ?></span>
          </td>
        </tr>
        <tr>
          <td>Cake</td>
          <td>
            <span><?php echo $result['cake'] ?></span>
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
      </table> 
    </div>
    <br/><br/>
    <h3>Fill The Form of Payment</h3>
    <div class="row">
    <br/>
      <?php 
        if($formError) 
        { 
      ?>
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <?php 
        } 
      ?>
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <table class="table">
        <tr>
          <td>Amount: </td>
          <td><input name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" /></td>
        </tr>
        <tr>
          <td>Name: </td>
          <td><input name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" /></td>
        </tr>
        <tr>
          <td>Email: </td>
          <td><input name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" /></td>
        </tr>
        <tr>
          <td>Phone: </td>
          <td><input name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" /></td>
        </tr>
        <tr>
          <td>Booking Info: </td>
          <td colspan="3"><textarea name="productinfo"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea></td>
        </tr> 
        
          <!-- <td>Success URI: </td> -->
          <input type="hidden" name="surl" value="http://localhost/PayUMoney-PHP-Module-master/success.php" size="64" />

          <!-- <td>Failure URI: </td> -->
          <input type="hidden" name="furl" value="http://localhost/PayUMoney-PHP-Module-master/failure.php" size="64" />

          <input type="hidden" name="service_provider" value="payu_paisa" size="64" />

        <!-- <tr>
          <td><b>Optional Parameters</b></td>
        </tr>
        <tr>
          <td>Last Name: </td>
          <td><input name="lastname" id="lastname" value="<?php echo (empty($posted['lastname'])) ? '' : $posted['lastname']; ?>" /></td>
          <td>Cancel URI: </td>
          <td><input name="curl" value="" /></td>
        </tr>
        <tr>
          <td>Address1: </td>
          <td><input name="address1" value="<?php echo (empty($posted['address1'])) ? '' : $posted['address1']; ?>" /></td>
          <td>Address2: </td>
          <td><input name="address2" value="<?php echo (empty($posted['address2'])) ? '' : $posted['address2']; ?>" /></td>
        </tr>
        <tr>
          <td>City: </td>
          <td><input name="city" value="<?php echo (empty($posted['city'])) ? '' : $posted['city']; ?>" /></td>
          <td>State: </td>
          <td><input name="state" value="<?php echo (empty($posted['state'])) ? '' : $posted['state']; ?>" /></td>
        </tr>
        <tr>
          <td>Country: </td>
          <td><input name="country" value="<?php echo (empty($posted['country'])) ? '' : $posted['country']; ?>" /></td>
          <td>Zipcode: </td>
          <td><input name="zipcode" value="<?php echo (empty($posted['zipcode'])) ? '' : $posted['zipcode']; ?>" /></td>
        </tr>
        <tr>
          <td>UDF1: </td>
          <td><input name="udf1" value="<?php echo (empty($posted['udf1'])) ? '' : $posted['udf1']; ?>" /></td>
          <td>UDF2: </td>
          <td><input name="udf2" value="<?php echo (empty($posted['udf2'])) ? '' : $posted['udf2']; ?>" /></td>
        </tr>
        <tr>
          <td>UDF3: </td>
          <td><input name="udf3" value="<?php echo (empty($posted['udf3'])) ? '' : $posted['udf3']; ?>" /></td>
          <td>UDF4: </td>
          <td><input name="udf4" value="<?php echo (empty($posted['udf4'])) ? '' : $posted['udf4']; ?>" /></td>
        </tr>
        <tr>
          <td>UDF5: </td>
          <td><input name="udf5" value="<?php echo (empty($posted['udf5'])) ? '' : $posted['udf5']; ?>" /></td>
          <td>PG: </td>
          <td><input name="pg" value="<?php echo (empty($posted['pg'])) ? '' : $posted['pg']; ?>" /></td>
        </tr> -->
        <tr>
          <?php if(!$hash) { ?>
            <td colspan="4"><input type="submit" value="Submit" class="btn btn-primary"/></td>
          <?php } ?>
        </tr>
      </table>
    </form>
    </div>
    </div>
    </section>
    <!-- footer begin -->
        <footer>
            <div class="container text-center text-light">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="hs1 wow fadeInUp">Follow Us On: 
                        <div class="social-icons-sm">
                          <a href="#" target="_blank" class="margin-r-10 v-center" style="color:#3b5998"><i class="fa fa-facebook h6"></i></a>
                          <a href="#"><i class="fa fa-twitter"></i></a>
                          <a href="#"><i class="fa fa-instagram"></i></a>
                          <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                        </h2>
                    
                        <h2 class="hs1 wow fadeInUp">Contact Us: 
                        <div class="social-icons-sm">
                                <a href="#"><i class="fa fa-envelope-o"></i></a></h2>
                                <h3>
                                     <p>theperfectwedding123@gmail.com</p>
                                     <p>+91 1234567890</p>
                                </h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="subfooter">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-12">
                            &copy; Copyright 2019 - The Perfect Wedding
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->

        <a href="#" id="back-to-top"></a>
        <div id="preloader">
            <div class="preloader1"></div>
        </div>
    </div>
    
    <!-- Javascript Files
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/validation-rsvp.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/enquire.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.plugin.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/countdown-custom.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/designesia.js"></script>
    <script src="js/map.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/register.js"></script>

  </body>
</html>
