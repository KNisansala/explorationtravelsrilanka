<?php
include './db.php';
include './function.php';
$id = $_GET["id"];

$details = getOneActivitie($id);

$photos = getAllActivitiePhotos($id);

$activity = getAllActivities();
?> 



<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">

    <!-- Mirrored from html.physcode.com/travel/tours-4-cols.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2017 06:23:53 GMT -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width">
        <title><?php echo $details["title"]; ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="xmlrpc.html">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/font-linearicons.css" type="text/css" media="all">
        <link rel="stylesheet" href="style.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/travel-setting.css" type="text/css" media="all">
        <link rel="shortcut icon" href="images/favicon11.png" type="image/x-icon">
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="archive travel_tour travel_tour-page">
        <div class="wrapper-container">
            <?php
            include './header.php';
            ?>
            <div class="site wrapper-content">
                <div class="top_site_main" style="background-image:url(images/banner/view-activity.png);">
                    <div class="banner-wrapper container article_heading">
                        
                        <h1 class="heading_primary"><?php echo $details["title"]; ?></h1>
                        <div class="breadcrumbs-wrapper">
                            <ul class="phys-breadcrumb">
                                <li><a href="index.php" class="home">Home</a></li>
                                <li><a href="activities.php">Activities</a></li>
                                <li><?php echo $details["title"]; ?></li>

                            </ul>
                        </div>
                        
                    </div>
                </div>
                <section class="content-area">
                    <div class="container">
                        <div class="row">
                            <div class="site-main col-sm-12">

                                <div class="col-md-9">
                                    <ul class="tours products wrapper-tours-slider">
                                        <?php
                                        $photos = getAllActivitiePhotos($id);
                                        foreach ($photos as $key => $photo) {
                                            if($key<4){
                                            ?>
                                            <li class="item-tour col-md-3 col-sm-6 product">
                                                <div class="item_border item-product">
                                                    <div class="post_images">
                                                        <a href="images/activities/gallery/<?php echo $photo["image_name"]; ?>">

                                                            <img width="430" height="305" src="images/activities/gallery/thumb/<?php echo $photo["image_name"]; ?>" alt="#" title="#">
                                                        </a>

                                                    </div>


                                                </div>
                                            </li>
                                            <?php
                                        }
                                        }
                                        ?>
                                    </ul>
                                    <div class="site-main col-sm-12 text-justify">
                                        <!--                                        <h4>Description</h4>-->
                                        <p> <?php echo $details["description"]; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3">


                                    <h3 class="text-center"><u>More activities</u></h3>
                                    <hr>
                                    <?php
                                    $activities = getAllactivities();
                                    foreach ($activities as $key => $activitie) {
                                        if ($key < 4) {
                                            ?>
                                         <div class="custom-activity-container">
                                                <div class="inner-activity">
                                                <div class="pull-left">
                                                    <a href="view-activities.php?id=<?php echo $activitie['id']; ?>">
                                                        <b><?php echo $activitie['title']; ?></b>
                                                        <br>
                                                    </a>
                                                </div>
                                                <div class="text-justify pull-right">
                                                    <img class="pull-left" width="45%" id="img-left-act" src="images/activities/<?php echo $activitie['image_name']; ?>" alt="#" title="#">
                                                    <p><?php echo substr($activitie['short_description'], 0, 60) . '...'; ?>  
                                                    </p>
                                                </div>
                                                </div>
                                         </div>
                                               <?php
                                        }
                                    }
                                    ?>
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


</html>