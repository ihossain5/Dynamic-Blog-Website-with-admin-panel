<?php include"includes/header.php"?>
<!--    Page Banner Start
==================================================-->
<section class="banner background9 overlay_three full_row">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="banner_text text-center">
                    <h1 class="page_banner_title color_white text-uppercase">Blog</h1>
                    <div class="breadcrumbs m-auto d-inline-block">
                        <ul>
                            <li class="hover_gray"><a href="index.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--    Page Banner End
==================================================-->

<!--	Start Contact
    ===================================================-->
<section id="contact" class="py_80 full_row bg_white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="section_title_1 text-center mx-auto pb_60 wow animated slideInUp">
                    <h2 class="title text-uppercase"><span class="line_double mx-auto color_default">contact</span>Get In Touch</h2>
                    <span class="sub_title">Interdum a etiam sagittis vehicula porta. Massa felis eros quam blandit nulla dolor habitant. Ullamcorper quis ornare et proin pellentesque.</span>
                </div>
            </div>
            <div class="col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div class="contact_info wow animated fadeInLeft">
                            <ul>
                                <li><div class="contact_icon float-left"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                    <div class="contact_text">
                                        <h6 class="font-weight-bold color_primary">Email</h6>
                                        <span class="color_secondery">yourdomainname@gmail.com</span>
                                    </div>
                                </li>
                                <li><div class="contact_icon float-left"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                    <div class="contact_text">
                                        <h6 class="font-weight-bold color_primary">Phone</h6>
                                        <span class="color_secondery">+00 61 700 800</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact_icon float-left"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                    <div class="contact_text">
                                        <h6 class="font-weight-bold color_primary">Address</h6>
                                        <span class="color_secondery">Mouroubra WA 6472, Australia.</span>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="socal_media_2 mt_15 d-inline-block">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-8">
                        <form class="form contact_message wow animated fadeInRight" id="contact-form" action="http://themetrading.com/html/runaway/template/regular/email.php" method="post">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="name" placeholder="Your Name" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="email" placeholder="Email Address" />
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="subject" placeholder="Subject"/>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" rows="7" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <input class="btn btn-default" id="send" value="Send Massage" type="submit"/>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="error-handel">
                                        <div id="success">Your email sent Successfully, Thank you.</div>
                                        <div id="error"> Error occurred while sending email. Please try again later.</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--	End Contact
===================================================-->

<?php include "includes/footer.php"; ?>
