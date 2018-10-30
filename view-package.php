<?php
include './db.php';
include './function.php';
$id = $_GET["id"];

$details = getOnePackage($id);
$packages = getAllPackages();
?>

<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">

    <!-- Mirrored from html.physcode.com/travel/single-tour.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2017 06:23:49 GMT -->
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
        <link rel="stylesheet" href="assets/css/booking.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/swipebox.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="style.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/travel-setting.css" type="text/css" media="all">
        <link rel="shortcut icon" href="images/favicon11.png" type="image/x-icon">
        <link rel="stylesheet" href="assets/css/custom.css" type="text/css" media="all">
        <link href="assets/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
    </head>
    

    <body class="single-product travel_tour-page travel_tour">

        <?php
        include './header.php';
        ?>

        <div class="site wrapper-content">
            <div class="top_site_main" style="background-image:url(images/banner/attr_1.jpg);">
                <div class="banner-wrapper container article_heading">
                    
                    <h2 class="heading_primary"><?php echo $details["title"]; ?></h2>
                    
                    <div class="breadcrumbs-wrapper">
                        <ul class="phys-breadcrumb">
                            <li><a href="index.php" class="home">Home</a></li>
                            <li><a href="tour_packages.php">Tour Package</a></li>
                            <li><?php echo $details["title"]; ?></li>
                        </ul>
                    </div>
                    
                    
                </div>
            </div>

            <div class="container">
                <div class="tb_single_tour product">
                    <div class="top_content_single row">
                        <div class="images images_single_left">


                            <div id="slider" class="flexslider">

                                <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1200%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                        <?php
                                        $packPhotos = getAllPackagesPhotos($id);
                                        foreach ($packPhotos as $pacage) {
                                            ?>
                                            <li class="flex-active-slide" style="width: 812px; float: left; display: block;">
                                                <a href="images/packages/gallery/<?php echo $pacage["image_name"]; ?>" class="swipebox" title=""><img src="images/packages/gallery/<?php echo $pacage["image_name"]; ?>" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false" width="950" height="700"></a>
                                            </li>

                                            <?php
                                        }
                                        ?>  
                                    </ul></div></div>
                            <div id="carousel" class="flexslider thumbnail_product">

                                <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                    <ul class="slides" style="width: 1200%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                        <?php
                                        $packPhotos = getAllPackagesPhotos($id);
                                        foreach ($packPhotos as $pacage) {
                                            ?>
                                            <li style="width: 134px; float: left; display: block;" class="flex-active-slide">
                                                <img src="images/packages/gallery/thumb/<?php echo $pacage['image_name']; ?>" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false" width="150" height="100">
                                            </li>
                                            <?php
                                        }
                                        ?>  
                                    </ul>
                                </div>
                                <ul class="flex-direction-nav">
                                    <li>
                                        <a class="flex-prev flex-disabled" href="#" tabindex="-1">

                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex-next" href="#"></a>
                                    </li>
                                </ul>
                            </div>


                            <div class="clear"></div>
                            <div class="single-tour-tabs wc-tabs-wrapper col-md-12">

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--description panel entry-content wc-tab active" id="tab-description">
                                        <h2>Tour Description</h2>
                                        <p><?php echo $details["description"]; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="summary entry-summary description_single">
                            <div class="affix-sidebar">
                                <div class="entry-content-tour">
                                    <p class="price">
                                        <span class="text">Price:</span><span class="travel_tour-Price-amount amount">$93.00</span>
                                    </p>
                                    <div class="clear"></div>
                                    <div class="booking">
                                        <div class="">
                                            <div class="form-block__title">
                                                <h4>Inquiry This Package</h4>
                                            </div>
                                            <form id="tourBookingForm" method="POST" action="booking.php">
                                                <div class="custom-booking-container">
                                                    <div class="inner-booking"> 
                                                        <div class="">
                                                            <div class="row"
                                                                 <div class="contact-form " style="padding-bottom: 20px">
                                                                    <div class="pacage-booking-eliment">
                                                                        <label>Your Name</label>
                                                                        <span id="star">*</span>
                                                                        <input type="text" name="txtFullName" id="txtFullName" class="form-control input-validater">
                                                                        <span id="spanFullName" ></span>
                                                                    </div>
                                                                    <div class="pacage-booking-eliment">
                                                                        <label>Your Email</label>
                                                                        <span id="star">*</span>
                                                                        <input type="text" name="txtEmail" id="txtEmail" class="form-control input-validater">
                                                                        <span id="spanEmail" ></span>
                                                                    </div>
                                                                    <div class="pacage-booking-eliment">
                                                                        <label>Departure Date</label>
                                                                        <span id="star">*</span>
                                                                        <input type="text" name="txtDdate" id="txtDdate" class="form-control input-validater datepicker">
                                                                        <span id="spanDeparture"></span>
                                                                    </div>
                                                                    <div class="pacage-booking-eliment">
                                                                        <label>Arrival Date</label>
                                                                        <span id="star">*</span>
                                                                        <input type="text" name="txtAdate" id="txtAdate" class="form-control input-validater datepicker">

                                                                        <span id="spanArrival"></span>
                                                                    </div>
                                                                    <div class="pacage-booking-eliment">
                                                                        <label>Number of Adults</label>
                                                                        <span id="star">*</span>

                                                                        <input type="number" name="txtAdults" id="txtAdults" class="form-control">
                                                                        <span id="spanAdults" ></span>
                                                                    </div>
                                                                    <div class="pacage-booking-eliment">
                                                                        <label>Number of Children</label>
                                                                        <span id="star">*</span>
                                                                        <input type="number" name="txtChild" id="txtChild" class="form-control">   
                                                                        <span id="spanChild" ></span>
                                                                    </div>

                                                                    <input type="hidden" name="packageId" id="packageId" class="form-control" value="<?php echo $details["id"]; ?>">   

                                                                </div>

                                                                <div class="" style="margin-top: 20px">
                                                                    <button type="submit" id="btnSubmit" class="btn contact-send-msg">Send Your Inquiry</button>
                                                                </div>  
                                                            </div>
                                                            <div id="dismessage" align="center"></div>
                                                        </div>
                                                    </div> 
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom_from">
                                </div>
                            </div>
                            <div class="widget-area align-left col-sm-3">
                                <aside class="widget widget_travel_tour">
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row"><div class="contact-sty">
                        <div class="form-block__title"> <h4>More Tour Package</h4></div></div>

                    <div class="col-md-12 more_tour_container">
                        <?php
                        $packages = getAllPackages();
                        foreach ($packages as $key => $pacage) {
                            if ($key < 6) {
                                ?>
                                <div class="col-md-2">
                                    <a href="view-package.php?id=<?php echo $pacage['id']; ?>">
                                        <span class="price"><strong><?php echo substr($pacage['title'], 0, 15) . '...'; ?></strong></span>
                                        <img width="430" height="305" src="images/packages/<?php echo $pacage['image_name']; ?>" alt="l" title="Discover Brazil">
                                    </a>
                                    <p class="text-justify"><?php echo substr($pacage['short_description'], 0, 60) . '...'; ?>
                                    </p>
                                </div>
                                <?php
                            }
                        }
                        ?>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php
    include './footer.php';
    ?> 
    <!--end coppyright-->
    <script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
    <script src="assets/js/jquery.js" type="text/javascript"></script>
    <script type='text/javascript' src='assets/js/vendors.js'></script>
    <script type='text/javascript' src='assets/js/jquery.swipebox.min.js'></script>
    <script type='text/javascript' src='assets/js/theme.js'></script>
    <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCaQjbVDR1vRh2iS_V3jLBXRrkQxmoxycQ'></script>
    <script type='text/javascript' src='assets/js/gmap.js'></script>
    <script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {

            $("[id=txtDdate]").datepicker({
                //                 format:"dd-mm-yyyy"
            });
        });


        $(function () {

            $("[id=txtAdate]").datepicker({
                //                 format:"dd-mm-yyyy"
            });
        });
    </script>

</body>

<!-- Mirrored from html.physcode.com/travel/single-tour.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2017 06:23:53 GMT -->
</html>