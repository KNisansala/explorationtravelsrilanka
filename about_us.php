<?php
include './db.php';
include './function.php';

$aboutus = getAboutUspageContant();
?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">

    <!-- Mirrored from html.physcode.com/travel/tours.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2017 06:23:18 GMT -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width">
        <title>About Us || Exploration Travel Sri Lanka</title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="xmlrpc.html">
        <link rel="shortcut icon" href="images/logo/logocap.png" type="image/x-icon">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/font-linearicons.css" type="text/css" media="all">
        <link rel="stylesheet" href="style.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/travel-setting.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/custom.css" type="text/css" media="all">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="archive travel_tour travel_tour-page" cz-shortcut-listen="true">
        <div class="wrapper-container">
            <?php
            include './header.php';
            ?>
            <div class="site wrapper-content">
                <div class="top_site_main" style="background-image:url(images/banner/arugam-bay-beach.jpg);">
                    <div class="banner-wrapper container article_heading">
                        
                        <h1 class="heading_primary">About Us</h1>
                        <div class="breadcrumbs-wrapper">
                            <ul class="phys-breadcrumb">
                                <li>
                                    <a href="index.php" class="home">Home</a>
                                </li>
                                <li>About us</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <section class="content-area">
                    <div class="container">
                        <div class="col-md-12 text-center">
                            <h2 class="about_hotel_title" ><?php echo $aboutus["title"]; ?></h2>
                        </div>
                        <div class="col-md-12 text-justify">
                            <p><?php echo $aboutus["description"]; ?></p>
                        </div>
                        <div class="col-md-12 text-center">
                            <h1 class="welcome_title" >Welcome</h1>
                        </div>
                        <div class="col-md-12" id="v_m_background" style="background-image: url(images/2_1.jpg)">
                            <div class="col-md-6 text-center" id="vision_bac" >
                                <div>
                                    <h3 id="v_m_title"><i class="fa fa-eye"></i>&nbsp; VISION</h3>
                                    <br>
                                         <div class="text-justify">
                                        <p id="v_m_para"><?php echo $aboutus["vision"]; ?>
                                        </p>
                                         </div>
                                </div>
                              
                            </div>
                          
                            <div class="col-md-6 text-center" id="mission_bac">
                                <div>
                                    <h3 id="v_m_title"><i class="fa fa-paper-plane"></i>&nbsp;MISSION</h3>
                                    <br>
                                    <div class="text-justify">
                                        <p id="v_m_para"> <?php echo $aboutus["mission"]; ?>
                                        </p>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        
                    </div>
                </section>
            </div>
            <?php
            include './footer.php';
            ?>
        </div>
        <!--end coppyright-->
        <script type='text/javascript' src='assets/js/jquery.min.js'></script>
        <script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
        <script type='text/javascript' src='assets/js/vendors.js'></script>
        <script type='text/javascript' src='assets/js/theme.js'></script>
    </body>

    <!-- Mirrored from html.physcode.com/travel/tours.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2017 06:23:49 GMT -->
</html>