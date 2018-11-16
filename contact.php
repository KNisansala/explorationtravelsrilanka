<?php
include './db.php';
include './function.php';
$packages = getAllPackages();
?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">

    <!-- Mirrored from html.physcode.com/travel/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2017 06:26:27 GMT -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width">
        <title>Contact || Exploration Travel Sri Lanka</title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="xmlrpc.html">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/font-linearicons.css" type="text/css" media="all">
        <link rel="stylesheet" href="style.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/travel-setting.css" type="text/css" media="all">
        <link rel="shortcut icon" href="images/logo/logocap.png" type="image/x-icon">
        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="archive" cz-shortcut-listen="true">
        <div class="wrapper-container">
<?php
include './header.php';
?>
            <div class="site wrapper-content">
                <div class="top_site_main" style="background-image:url(images/banner/offers12.png);">
                    <div class="banner-wrapper container article_heading" >

                        <h1 class="heading_primary">Contact</h1>
                        <div class="breadcrumbs-wrapper">
                            <ul class="phys-breadcrumb">
                                <li><a href="index-2.html" class="home">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <section class="content-area">
                    <div class="container">
                        <div class="row">
                            <div class="site-main col-md-8 alignleft">
                                <div class="video-container">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1984.180052298587!2d80.45872765778091!3d5.9450116667091235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNcKwNTYnNDIuMCJOIDgwwrAyNyczNS40IkU!5e0!3m2!1sen!2slk!4v1506663591365" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="widget-area col-md-4 col-sm-3 align-left">

                                <div class="pages_content padding-top-4x">
                                    <h4>CONTACT INFORMATION</h4>
                                    <div class="contact_infor">
                                        <ul>
                                            <li><label><i class="fa fa-map-marker"></i>ADDRESS</label>
                                                <div class="des">Insight Guest House, Udupila, Mirissa</div>
                                            </li>
                                            <li><label><i class="fa fa-phone"></i>TEL NO</label>
                                                <div class="des">+94 71 244 5998</div>
                                            </li>

                                            <li><label><i class="fa fa-envelope"></i>EMAIL</label>
                                                <div class="des">srilankataximirissa@gmail.com</div>
                                            </li>
                                            <li><label><i class="fa fa-facebook"> <a href="https://www.facebook.com/srilankasafari.tours/"></i>Facebook</label>
                                                <div class="des">srilankasafari.tours</div></a>
                                            </li>
                                            
                                             
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="container">
                        <div> <div class="contact-sty"><div class="form-block__title"><h4>Contact Form</h4></div></div></div>
                        <div class="panel panel-default container " style="margin-left: -11px;">
                            <div class="panel-body">
                                <div class="contact-form">
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-6">
                                            <label>Your Name</label>
                                            <span id="star">*</span>
                                            <input type="text" name="txtFullName" id="txtFullName" class="form-control input-validater">
                                            <span id="spanFullName" ></span>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <label>Your Email</label>
                                            <span id="star">*</span>
                                            <input type="text" name="txtEmail" id="txtEmail" class="form-control input-validater">
                                            <span id="spanEmail" ></span>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-6">
                                            <label>Your Country</label>
                                            <span id="star">*</span>
                                            <input type="text" name="txtCountry"  id="txtCountry" class="form-control input-validater">
                                            <span id="spanCountry" ></span>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <label>Your Contact Numbers</label>
                                            <input type="text" name="txtPhone" id="txtPhone" class="form-control input-validater">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-12">
                                            <label>Subject</label>
                                            <span id="star">*</span>
                                            <input type="text" name="txtSubject"  id="txtSubject" class="form-control input-validater">
                                            <span id="spanSubject" ></span>
                                        </div> 
                                    </div>
                                    <div class="form-group">
                                        <label>Your Message</label>
                                        <span id="star">*</span>
                                        <textarea name="txtMessage"  id="txtMessage" rows="6" class="form-control" placeholder="write message here"></textarea>
                                        <span id="spanMessage" ></span>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-xs-12 col-sm-6 row">
                                            <div class="col-sm-6">
                                                <label for="comment">Security Code:</label>
                                                <span id="star">*</span> 
                                                <input type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the security code >> ">
                                                <span id="capspan" ></span> 
                                            </div>
                                            <div class="col-sm-6"> 


                                                <img src="contact-form/Generate_Captcha_Code.php?rand=28926" id='captchaimg'  style=" margin-top: 17px;">  

                                                <a href='javascript: refreshCaptcha();' class="contact-details">
                                                    <div class="refreshbox">
                                                        <div class="refresh-img">        
                                                            <img style="border:none;" src="contact-form/img/refresh.png" title="Click to change the code"/>
                                                        </div>
                                                    </div>
                                                </a>

                                                <script language='JavaScript' type='text/javascript'>

                                                    function refreshCaptcha() {
                                                        var img = document.images['captchaimg'];
                                                        var c = Math.round(Math.random() * 10000);
                                                        img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + c;
                                                    }

                                                </script>

                                            </div>  
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="col-sm-4">
                                                <div class="div-check" >
                                                    <img src="contact-form/img/checking.gif" id="checking"/>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 text-right">
                                                <button type="submit" id="btnSubmit" class="btn contact-send-msg">SEND YOUR MESSAGE</button>
                                            </div> 
                                        </div>
                                    </div> 
                                    <div id="dismessage" align="center"></div>

                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <style>
                    @media (max-width: 800px) {
                        .contact_infor ul li .des {
                            width: calc(105% - 194px);
                            display: inline-block;
                            vertical-align: middle;
                        }
                        .container {
                            padding-right: 8px;
                            padding-left: 5px;
                            margin-right: auto;
                            margin-left: auto;
                        }
                    }
                </style>
            </div>
<?php
include './footer.php';
?>
        </div>

        <!--end coppyright-->
        <script type='text/javascript' src='assets/js/jquery.min.js'></script>
        <script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
        <script src="contact-form/scripts.js" type="text/javascript"></script>
        <script type='text/javascript' src='assets/js/vendors.js'></script>
        <script type='text/javascript' src='assets/js/theme.js'></script>
        <script src="assets/js/custom.js" type="text/javascript"></script>
    </body>

    <!-- Mirrored from html.physcode.com/travel/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2017 06:26:27 GMT -->
</html>