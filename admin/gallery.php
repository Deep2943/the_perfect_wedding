<?php
require("connection.php");
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.admireadmin.com/admire_html/gallery.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 14 Dec 2018 11:17:32 GMT -->
<?php
include("header.php");
?>

        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                        <div class="col-lg-6 col-md-4 col-sm-4">
                            <h4 class="nav_top_align">
                                <i class="fa fa-image"></i>
                                Gallery
                            </h4>
                        </div>
                        <div class="col-lg-6 col-md-8 col-sm-8">
                            <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                                <li class="breadcrumb-item">
                                    <a href="index-2.php">
                                        <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Gallery</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </header>
            
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header bg-white">
                                    Gallery
                                </div>
                                <div class="card-body m-t-35">
                                    <div>
                                        <div class="nav-tabs-custom">
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item">
                                                    <a href="#tab_2" class="nav-link active" data-toggle="tab">Venue Images</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#tab_1" class="nav-link" data-toggle="tab">Decoration Images</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#tab_3" class="nav-link" data-toggle="tab">Catering Images</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#tab_4" class="nav-link" data-toggle="tab">DJ/Music Images</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active gallery-padding" id="tab_2">
                                                    <div class="row no-gutters">
                                                        
                                                        <?php
                                                          $q = "SELECT * FROM photo";
                                                          $data = mysqli_query($con,$q);
                                                          $i = 0;
                                                          while($result = mysqli_fetch_array($data))
                                                          {
                                                          $i++;
                                                        ?>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                        <img src="img/<?php echo $result['name'];?>" width="200" height="180">
                                                        </div>
                                                        <?php
                                                          }
                                                        ?>
                                                            <!-- <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/1.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 1">
                                                                <img src="../images/gallery/1.jpg" class="img-fluid gallery-style" alt="Image"></a> -->
                                                        
                                                        <!-- <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/2.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 2">
                                                                <img src="../images/gallery/2.jpg"
                                                                     class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/3.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 3">
                                                                <img src="../images/gallery/3.jpg"
                                                                     class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/11.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 4">
                                                                <img src="../images/gallery/11.jpg"
                                                                     class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/12.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 5">
                                                                <img src="../images/gallery/12.jpg"
                                                                     class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/13.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 6">
                                                                <img src="../images/gallery/13.jpg"
                                                                     class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/43.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 7">
                                                                <img src="../images/gallery/43.jpg"
                                                                     class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/44.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 8">
                                                              <img src="../images/gallery/44.jpg" class="img-fluid gallery-style" alt="Image">
                                                            </a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/45.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 9">
                                                                <img src="../images/gallery/45.jpg" class="img-fluid gallery-style" alt="Image">
                                                            </a>
                                                        </div> -->
                                                        
                                                    </div>
                                                </div>
                                                <div class="tab-pane gallery2-padding" id="tab_1">
                                                    <div class="row no-gutters">
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/7.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 1">
                                                                <img src="../images/gallery/7.jpg" class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/8.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 2">
                                                                <img src="../images/gallery/8.jpg"
                                                                     class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/9.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 3">
                                                                <img src="../images/gallery/9.jpg"
                                                                     class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/21.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 4">
                                                                <img src="../images/gallery/21.jpg"
                                                                     class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/22.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 5">
                                                                <img src="../images/gallery/22.jpg"
                                                                     class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/23.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 6">
                                                                <img src="../images/gallery/23.jpg"
                                                                     class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/24.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 7">
                                                                <img src="../images/gallery/24.jpg"
                                                                     class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/13.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 8">
                                                              <img src="../images/gallery/13.jpg" class="img-fluid gallery-style" alt="Image">
                                                            </a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/14.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 9">
                                                                <img src="../images/gallery/14.jpg" class="img-fluid gallery-style" alt="Image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- /thumnail helper gallery -->
                                                </div>
                                                <!-- /standard gallery -->
                                                <div class="tab-pane gallery-padding" id="tab_3">
                                                    <div class="row no-gutters">
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/4.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 1">
                                                                <img src="../images/gallery/4.jpg" class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/5.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 2">
                                                                <img src="../images/gallery/5.jpg"
                                                                     class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/6.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 3">
                                                                <img src="../images/gallery/6.jpg"
                                                                     class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/25.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 4">
                                                                <img src="../images/gallery/25.jpg"
                                                                     class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/26.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 5">
                                                                <img src="../images/gallery/26.jpg"
                                                                     class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/27.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 6">
                                                                <img src="../images/gallery/27.jpg"
                                                                     class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/28.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 7">
                                                                <img src="../images/gallery/28.jpg"
                                                                     class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/29.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 8">
                                                              <img src="../images/gallery/29.jpg" class="img-fluid gallery-style" alt="Image">
                                                            </a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/36.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 9">
                                                                <img src="../images/gallery/36.jpg" class="img-fluid gallery-style" alt="Image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /button helper gallery -->
                                                <div class="tab-pane gallery-padding" id="tab_4">
                                                    <div class="row no-gutters">
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/30.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 1">
                                                                <img src="../images/gallery/30.jpg" class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/31.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 2">
                                                                <img src="../images/gallery/31.jpg"
                                                                     class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/32.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 3">
                                                                <img src="../images/gallery/32.jpg"
                                                                     class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/11.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 4">
                                                                <img src="../images/gallery/11.jpg"
                                                                     class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/12.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 5">
                                                                <img src="../images/gallery/12.jpg"
                                                                     class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/13.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 6">
                                                                <img src="../images/gallery/13.jpg"
                                                                     class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/43.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 7">
                                                                <img src="../images/gallery/43.jpg"
                                                                     class="img-fluid gallery-style" alt="Image"></a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/44.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 8">
                                                              <img src="../images/gallery/44.jpg" class="img-fluid gallery-style" alt="Image">
                                                            </a>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                                            <a class="fancybox zoom thumb_zoom"
                                                               href="../images/gallery/45.jpg"
                                                               data-fancybox-group="gallery" title="Image Title 9">
                                                                <img src="../images/gallery/45.jpg" class="img-fluid gallery-style" alt="Image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /thumnail helper gallery -->
                                            </div>
                                            <!-- /.tab-content -->
                                        </div>
                                        <!-- nav-tabs-custom -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.inner -->
            </div>
            <!-- /.outer -->
        </div>
        <!-- /#content -->
    </div>
    <!--wrapper-->
<?php
include("footer.php");
?>

</body>
<!-- Mirrored from demo.admireadmin.com/admire_html/gallery.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 14 Dec 2018 11:18:36 GMT -->
</html>
