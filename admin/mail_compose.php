<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.admireadmin.com/admire_html/mail_compose.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 14 Dec 2018 11:17:28 GMT -->
<?php
include("header.php");
?>

        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-sm-4 col-12 skin_txt">
                        <h4 class="nav_top_align">
                            <i class="fa fa-edit"></i>
                            Compose
                        </h4>
                    </div>
                    <div class="col-sm-8 col-12">
                        <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="index-2.php">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Email</a>
                            </li>
                            <li class="active breadcrumb-item">Compose</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row web-mail mail_compose">
                        <div class="col-lg-3 mail_compose_list">
                            <div>
                                <ul class="list-group">
                                    <li class="list-group-item bg-success">
                                        <a href="mail_compose.php" class="mail_inbox_text_col">
                                            <i class="fa fa-edit"></i>
                                            Compose
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="mail_inbox.php">
                                            <i class="fa fa-inbox"></i>
                                            Inbox
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="mail_view.php">
                                            <i class="fa fa-eye"></i>
                                            View Mail
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="mail_sent.php">
                                            <i class="fa fa-sign-out"></i>
                                            Sent
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="mail_spam.php">
                                            <span class="badge badge-primary badge-pill float-right">14</span>
                                            <i class="fa fa-eye-slash"></i>
                                            Spam
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="mail_draft.php">
                                            <span class="badge badge-primary badge-pill float-right">16</span>
                                            <i class="fa fa-recycle"></i>
                                            Draft
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="mail_trash.php">
                                            <span class="badge badge-primary badge-pill float-right">16</span>
                                            <i class="fa fa-trash"></i>
                                            Trash
                                        </a>
                                    </li>
                                    <li class="list-group-item" id="more_items">
                                        <a>
                                            <i class="fa fa-angle-down float-right"></i>
                                            More
                                        </a>
                                    </li>
                                    <li class="list-group-item starred_mail">
                                        <a href="#">
                                            <span class="badge badge-primary badge-pill float-right">3</span>
                                            <i class="fa fa-star"></i>
                                            Starred
                                        </a>
                                    </li>
                                    <li class="list-group-item starred_mail">
                                        <a href="#">
                                            <span class="badge badge-primary badge-pill float-right">14</span>
                                            <i class="fa fa-user"></i>
                                            Personal
                                        </a>
                                    </li>
                                    <li class="list-group-item starred_mail">
                                        <a href="#">
                                            <span class="badge badge-primary badge-pill float-right">26</span>
                                            <i class="fa fa-shield"></i>
                                            Client
                                        </a>
                                    </li>
                                    <li class="list-group-item starred_mail">
                                        <a href="#">
                                            <span class="badge badge-primary badge-pill float-right">36</span>
                                            <i class="fa fa-briefcase "></i>
                                            Important
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mail_ul_active m-t-35">
                                <ul class="list-group">
                                    <li class="list-group-item bg-success">
                                        <a href="#" class="mail_inbox_text_col">
                                            <i class="fa fa-comments"></i>
                                            Contacts
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <ul class="list-group contact_scroll">
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-online margin_top10"></span>
                                            &nbsp; John Cena
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/1.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image">
                                        </span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-online margin_top10"></span>
                                            &nbsp; Peter Norton
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/2.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image">
                                        </span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-busy margin_top10"></span>
                                            &nbsp; Marin Robbinson
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/3.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-away margin_top10"></span>
                                            &nbsp; Kimy Zorda
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/4.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-online margin_top10"></span>
                                            &nbsp; Hally
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/5.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-busy margin_top10"></span>
                                            &nbsp; Mike J Mayor
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/6.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-away margin_top10"></span>
                                            &nbsp; David Miller
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/7.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-away m-t-10"></span>
                                            &nbsp; Adela
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/8.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-away m-t-10"></span>
                                            &nbsp; Sandy Chris
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/8.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-online m-t-10"></span>
                                            &nbsp; Symons
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/2.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                    <li class="list-group-item status_height">
                                        <a href="#">
                                            <span class="status-busy m-t-10"></span>
                                            &nbsp; Randy
                                            <span class="float-left">
                                            <img src="img/mailbox_imgs/1.jpg"
                                                 class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="card media_max_991">
                                <div class="card-header bg-white">
                                    <i class="fa fa-edit"></i>
                                    Compose Mail
                                </div>
                                    <div class="card-body m-t-35">
                                    <form action="http://demo.admireadmin.com/admire_html/mail_sent.php">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="To *" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6 m-t-10">
                                                    <input type="email" class="form-control" placeholder="Cc">
                                                </div>
                                                <div class="col-md-6 m-t-10">
                                                    <input type="email" class="form-control" placeholder="Bcc">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control m-t-25" placeholder="Subject *" required>
                                        </div>
                                        <div class="form-group mail_compose_wysi">
                                            <textarea class="wysihtml5 form-control m-t-20"></textarea>
                                        </div>
                                        <div class="form-group m-t-20">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-reply"></i> Send</button>
                                            <a href="mail_draft.php" class="btn btn-warning"><i class="fa fa-close"></i> Cancel</a>
                                        </div>
                                    </form>
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
<!-- Mirrored from demo.admireadmin.com/admire_html/mail_compose.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 14 Dec 2018 11:17:30 GMT -->
</html>