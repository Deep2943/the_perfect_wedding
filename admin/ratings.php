<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.admireadmin.com/admire_html/ratings.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 14 Dec 2018 11:24:00 GMT -->
<?php
include("header.php");
?>

        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-sm-5 col-lg skin_txt">
                        <h4 class="nav_top_align">
                            <i class="fa fa-pencil"></i>
                            Ratings
                        </h4>
                    </div>
                    <div class="col-sm-7 col-lg">
                        <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="index-2.php">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Forms</a>
                            </li>
                            <li class="active breadcrumb-item">Ratings</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header bg-white">
                                    Ratings
                                </div>
                                <div class="card-body">
                                    <div class="row m-t-30">
                                        <div class="col-12 col-sm m-t-5">
                                            <form>
                                                <h5>Default star rating:</h5>
                                                <div class="starability-basic">
                                                    <input type="radio" id="rate5" name="rating" value="5" />
                                                    <label for="rate5" title="Amazing" aria-label="Amazing, 5 stars">5 stars</label>
                                                    <input type="radio" id="rate4" name="rating" value="4" />
                                                    <label for="rate4" title="Very good" aria-label="Very good, 4 stars">4 stars</label>
                                                    <input type="radio" id="rate3" name="rating" value="3" />
                                                    <label for="rate3" title="Average" aria-label="Average, 3 stars">3 stars</label>
                                                    <input type="radio" id="rate2" name="rating" value="2" />
                                                    <label for="rate2" title="Not good"  aria-label="Not good, 2 stars">2 stars</label>
                                                    <input type="radio" id="rate1" name="rating" value="1" />
                                                    <label for="rate1" title="Terrible" aria-label="Terrible, 1 star">1 star</label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-12 col-sm m-t-5">
                                            <form>
                                                <h5>Slot machine rating:</h5>
                                                <div class="starability-slot">
                                                    <input type="radio" id="slot-rate5" name="rating" value="5" />
                                                    <label for="slot-rate5" title="Amazing" aria-label="Amazing, 5 stars">5 stars</label>
                                                    <input type="radio" id="slot-rate4" name="rating" value="4" />
                                                    <label for="slot-rate4" title="Very good" aria-label="Very good, 4 stars">4 stars</label>
                                                    <input type="radio" id="slot-rate3" name="rating" value="3" />
                                                    <label for="slot-rate3" title="Average" aria-label="Average, 3 stars">3 stars</label>
                                                    <input type="radio" id="slot-rate2" name="rating" value="2" />
                                                    <label for="slot-rate2" title="Not good" aria-label="Not good, 2 stars">2 stars</label>
                                                    <input type="radio" id="slot-rate1" name="rating" value="1" />
                                                    <label for="slot-rate1" title="Terrible" aria-label="Terrible, 1 star">1 star</label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm m-t-5">
                                            <form>
                                                <h5>Growing star rating:</h5>
                                                <div class="starability-grow">
                                                    <input type="radio" id="growing-rate5" name="rating" value="5" />
                                                    <label for="growing-rate5" title="Amazing" aria-label="Amazing, 5 stars">5 stars</label>
                                                    <input type="radio" id="growing-rate4" name="rating" value="4" />
                                                    <label for="growing-rate4" title="Very good" aria-label="Very good, 4 stars">4 stars</label>
                                                    <input type="radio" id="growing-rate3" name="rating" value="3" />
                                                    <label for="growing-rate3" title="Average" aria-label="Average, 3 stars">3 stars</label>
                                                    <input type="radio" id="growing-rate2" name="rating" value="2" />
                                                    <label for="growing-rate2" title="Not good" aria-label="Not good, 2 stars">2 stars</label>
                                                    <input type="radio" id="growing-rate1" name="rating" value="1" />
                                                    <label for="growing-rate1" title="Terrible" aria-label="Terrible, 1 star">1 star</label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-12 col-sm m-t-5">
                                            <form>
                                                <h5>Growing & rotating star rating:</h5>
                                                <div class="starability-growRotate">
                                                    <input type="radio" id="growing-rotating-rate5" name="rating" value="5" />
                                                    <label for="growing-rotating-rate5" title="Amazing" aria-label="Amazing, 5 stars">5 stars</label>
                                                    <input type="radio" id="growing-rotating-rate4" name="rating" value="4" />
                                                    <label for="growing-rotating-rate4" title="Very good" aria-label="Very good, 4 stars">4 stars</label>
                                                    <input type="radio" id="growing-rotating-rate3" name="rating" value="3" />
                                                    <label for="growing-rotating-rate3" title="Average" aria-label="Average, 3 stars">3 stars</label>
                                                    <input type="radio" id="growing-rotating-rate2" name="rating" value="2" />
                                                    <label for="growing-rotating-rate2" title="Not good" aria-label="Not good, 2 stars">2 stars</label>
                                                    <input type="radio" id="growing-rotating-rate1" name="rating" value="1" />
                                                    <label for="growing-rotating-rate1" title="Terrible" aria-label="Terrible, 1 star">1 star</label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm m-t-5">
                                            <form>
                                                <h5>Fading star rating:</h5>
                                                <div class="starability-fade">
                                                    <input type="radio" id="fading-rate5" name="rating" value="5" />
                                                    <label for="fading-rate5" title="Amazing" aria-label="Amazing, 5 stars">5 stars</label>
                                                    <input type="radio" id="fading-rate4" name="rating" value="4" />
                                                    <label for="fading-rate4" title="Very good" aria-label="Very good, 4 stars">4 stars</label>
                                                    <input type="radio" id="fading-rate3" name="rating" value="3" />
                                                    <label for="fading-rate3" title="Average" aria-label="Average, 3 stars">3 stars</label>
                                                    <input type="radio" id="fading-rate2" name="rating" value="2" />
                                                    <label for="fading-rate2" title="Not good" aria-label="Not good, 2 stars">2 stars</label>
                                                    <input type="radio" id="fading-rate1" name="rating" value="1" />
                                                    <label for="fading-rate1" title="Terrible" aria-label="Terrible, 1 star">1 star</label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-12 col-sm m-t-5">
                                            <form>
                                                <h5>Checkmark rating:</h5>
                                                <div class="starability-checkmark">
                                                    <input type="radio" id="checkmark-rate5" name="rating" value="5" />
                                                    <label for="checkmark-rate5" title="Amazing" aria-label="Amazing, 5 stars">5 stars</label>
                                                    <input type="radio" id="checkmark-rate4" name="rating" value="4" />
                                                    <label for="checkmark-rate4" title="Very good" aria-label="Very good, 4 stars">4 stars</label>
                                                    <input type="radio" id="checkmark-rate3" name="rating" value="3" />
                                                    <label for="checkmark-rate3" title="Average" aria-label="Average, 3 stars">3 stars</label>
                                                    <input type="radio" id="checkmark-rate2" name="rating" value="2" />
                                                    <label for="checkmark-rate2" title="Not good" aria-label="Not good, 2 stars">2 stars</label>
                                                    <input type="radio" id="checkmark-rate1" name="rating" value="1" />
                                                    <label for="checkmark-rate1" title="Terrible" aria-label="Terrible, 1 star">1 star</label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
            <!-- /.outer -->
        </div>
        <!-- /#content -->
    </div>

<?php
include("footer.php");
?>
  
</body>

<!-- Mirrored from demo.admireadmin.com/admire_html/ratings.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 14 Dec 2018 11:24:04 GMT -->
</html>