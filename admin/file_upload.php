<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.admireadmin.com/admire_html/file_upload.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 14 Dec 2018 11:19:45 GMT -->
<?php
include("header.php");
?>

        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                        <div class="col-12 col-sm-5">
                            <h4 class="nav_top_align">
                                <i class="fa fa-upload"></i>
                                File Upload
                            </h4>
                        </div>
                        <div class="col-12 col-sm-7">
                            <div class="float-right">
                                <ol class="breadcrumb nav_breadcrumb_top_align">
                                    <li class="breadcrumb-item">
                                        <a href="index-2.php">
                                            <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">Components</a>
                                    </li>
                                    <li class="breadcrumb-item active">File Upload</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row">
                        <div class="col">
                            <div class="card file_input">
                                <div class="card-header bg-white">
                                    File Upload
                                </div>
                                
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col m-t-35">
                                            <h5>File Upload</h5>                        
                                            <form action="file_controller.php" method="POST" enctype="multipart/form-data">
                                            <label>Select image to upload:</label>
                                            <input type="file" name="imgFile" required><br>
                                            <input type="submit" name="uploadFileBTN" value="Upload">
                                            </form>
                                            <a href="gallery.php">Go to Gallery</a>
                                            <!-- <div class="col-sm m-t-35 button_file">
                                            <h5>Select File</h5>
                                            <input id="input-4" name="input4[]" type="file" multiple class="file-loading" style="display: block"> -->
                                        </div> 
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
    <div id="right">
        <div class="right_content">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Welcome Admin
                    <br/></strong> Set Your Skin Here. Checkout Admin Statistics. Good Day!.
            </div>
            <div class="well well-small dark">
                <div class="xs_skin_hide hidden-sm-up toggle-right"> <i class="fa fa-cog"></i></div>
                <h4 class="brown_txt">
                    <span class="fa-stack fa-sm">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-paint-brush fa-stack-1x fa-inverse"></i>
                </span>
                    Skins
                </h4>
                <br/>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('blue_black_skin.html','css')">
                    <div class="skin_blue skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('green_black_skin.html','css')">
                    <div class="skin_green skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('purple_black_skin.html','css')">
                    <div class="skin_purple skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('orange_black_skin.html','css')">
                    <div class="skin_orange skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('red_black_skin.html','css')">
                    <div class="skin_red skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('mint_black_skin.html','css')">
                    <div class="skin_mint skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('brown_black_skin.html','css')">
                    <div class="skin_brown skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('black_skin.html','css')">
                    <div class="skin_black skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skin_btn skin_blue" onclick="javascript:loadjscssfile('blue_skin.html','css')"></div>
                <div class="skin_btn skin_green" onclick="javascript:loadjscssfile('green_skin.html','css')"></div>
                <div class="skin_btn skin_purple" onclick="javascript:loadjscssfile('purple_skin.html','css')"></div>
                <div class="skin_btn skin_orange" onclick="javascript:loadjscssfile('orange_skin.html','css')"></div>
                <div class="skin_btn skin_red" onclick="javascript:loadjscssfile('red_skin.html','css')"></div>
                <div class="skin_btn skin_mint" onclick="javascript:loadjscssfile('mint_skin.html','css')"></div>
                <div class="skin_btn skin_brown" onclick="javascript:loadjscssfile('brown_skin.html','css')"></div>
                <div class="skin_btn skin_black" onclick="javascript:loadjscssfile('black_skin.html','css')"></div>
            </div>
            <div class="well well-small dark">
                <h4 class="brown_txt margin15_bottom">
                    <img src="img/admin.jpg" width="32" height="32" class="rounded-circle avatar-img" alt="avatar"> &nbsp;Admin
                    Statistics</h4>
                <br/>
                <ul class="list-unstyled">
                    <li class="green_txt margin15_bottom">
                            <span class="fa-stack fa-sm">
                    <i class="fa fa-circle fa-stack-2x text-mint"></i>
                    <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                </span> &nbsp; Last Login
                        <span class="inlinesparkline float-right">2hrs Back</span>
                    </li>
                    <li class="warning_txt margin15_bottom">
                            <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-brown"></i>
                      <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                    </span> &nbsp; Pending Tasks
                        <span class="dynamicsparkline float-right">12</span>
                    </li>
                    <li class="primary_txt margin15_bottom">
                            <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-cloud fa-stack-1x fa-inverse"></i>
                    </span> &nbsp; Weather Today
                        <span class="dynamicbar float-right">Rainy</span>
                    </li>
                    <li class="margin15_bottom">
                            <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-brown"></i>
                      <i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
                    </span> &nbsp; Events
                        <span class="inlinebar float-right">Team Out</span>
                    </li>
                    <li class="success_txt margin15_bottom">
                            <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-success"></i>
                      <i class="fa fa-bell fa-stack-1x fa-inverse"></i>
                    </span> &nbsp; Notifications
                        <span class="inlinebar float-right">5</span>
                    </li>
                </ul>
            </div>
            <div class="well well-small dark right_progressbar_section">
                <h4 class="brown_txt">
                    <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-brown"></i>
                      <i class="fa fa-hand-o-down fa-stack-1x fa-inverse"></i>
                    </span>
                    Alerts
                </h4>
                <br/>
                <span>Sales Improvement</span>
                <span class="float-right">
                <small>20%</small>
            </span>
                <div class="progress">
                    <div class="progress-bar bg-danger w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span>Server Load</span>
                <span class="float-right">
                <small>80%</small>
            </span>
                <div class="progress">
                    <div class="progress-bar bg-mint w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span>Traffic Improvement</span>
                <span class="float-right">
                <small>55%</small>
            </span>
                <div class="progress">
                    <div class="progress-bar bg-primary w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- # right side -->
</div>
<!-- /#wrap -->
<!-- global scripts-->
<script src="js/components.js"></script>
<script src="js/custom.js"></script>
<script src="vendors/fileinput/js/fileinput.min.js"></script>
<script src="vendors/fileinput/js/theme.js"></script>
<script src="vendors/blueimp_file_upload/js/jquery.ui.widget.js"></script>
<script src="vendors/blueimp-tmpl/js/tmpl.js"></script>
<script src="vendors/blueimploadimage/js/load-image.all.min.js"></script>
<script src="vendors/blueimp-canvas-to-blob/js/canvas-to-blob.js"></script>
<script src="vendors/blueimp-gallery-with-desc/js/jquery.blueimp-gallery.min.js"></script>
<script src="vendors/blueimp_file_upload/js/jquery.iframe-transport.js"></script>
<script src="vendors/blueimp_file_upload/js/jquery.fileupload.js"></script>
<script src="vendors/blueimp_file_upload/js/jquery.fileupload-process.js"></script>
<script src="vendors/blueimp_file_upload/js/jquery.fileupload-image.js"></script>
<script src="vendors/blueimp_file_upload/js/jquery.fileupload-audio.js"></script>
<script src="vendors/blueimp_file_upload/js/jquery.fileupload-video.js"></script>
<script src="vendors/blueimp_file_upload/js/jquery.fileupload-validate.js"></script>
<script src="vendors/blueimp_file_upload/js/jquery.fileupload-ui.js"></script>
<script src="vendors/dropify/js/dropify.js"></script>
<script src="vendors/dropzone/js/dropzone.min.js"></script>
<!-- end of global scripts-->
<script src="js/pages/file_upload.js"></script>
<script id="template-upload" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-upload fade">
            <td>
                <span class="preview"></span>
            </td>
            <td>
                <p class="name">{%=file.name%}</p>
                <strong class="error text-danger"></strong>
            </td>
            <td>
                <p class="size">Processing...</p>
                <div class="progress active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                    <div class="progress-bar bg-success" style="width:0%;"></div>
                </div>
            </td>
            <td>
                {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start m-t-10" disabled>
                    <i class="fa fa-arrow-up"></i>
                    <span>Start</span>
                </button>
                {% } %} {% if (!i) { %}
                <button class="btn btn-warning cancel m-t-10">
                    <i class="fa fa-close"></i>
                    <span>Cancel</span>
                </button>
                {% } %}
            </td>
        </tr>
        {% } %}



</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-download fade">
            <td>
                <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
            </td>
            <td>
                <p class="name">
                    {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl? 'data-gallery': ''%}>{%=file.name%}</a> {% } else { %}
                    <span>{%=file.name%}</span> {% } %}
                </p>
                {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                {% } %}
            </td>
            <td>
                <span class="size">{%=o.formatFileSize(file.size)%}</span>
            </td>
            <td>
                {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete m-t-10" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}" {% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}' {% } %}>
                    <i class="fa fa-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle"> {% } else { %}
                <button class="btn btn-warning cancel m-t-10">
                    <i class="fa fa-close"></i>
                    <span>Cancel</span>
                </button>
                {% } %}
            </td>
        </tr>
        {% } %}

</script>
</body>
<!-- Mirrored from demo.admireadmin.com/admire_html/file_upload.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 14 Dec 2018 11:19:59 GMT -->
</html>
