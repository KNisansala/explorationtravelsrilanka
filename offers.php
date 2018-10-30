<?php
include './db.php';
include './function.php';

$offers = getAlloffers();
?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">

    <!-- Mirrored from html.physcode.com/travel/single-tour.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2017 06:23:49 GMT -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Offers</title>
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
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="single-product travel_tour-page travel_tour" cz-shortcut-listen="true">
        <div class="wrapper-container">
            <?php
            include './header.php';
            ?>
            <div class="site wrapper-content">
                <div class="top_site_main" style="background-image:url(images/banner/attraction74.jpg);">
                    <div class="banner-wrapper container article_heading">
                        
                        <h2 class="heading_primary">Offers</h2>
                        <div class="breadcrumbs-wrapper">
                            <ul class="phys-breadcrumb">
                                <li><a href="index.php" class="home">Home</a></li>
                                <li><a href="offers.php">Offers</a></li>

                            </ul>
                        </div>
                        
                    </div>
                </div>
                <div class="container padding-bottom-6x padding-top-6x">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="shortcode_title shortcode-title-style_3">
                            </div>
                            <div class="row wrapper-tours-slider">
                                <div class="list_content content_tour_style_2 tours-type-pain">
                                    <?php
                                    foreach ($offers as $offer) {
                                        ?>  
                                        <div class="item-tour col-sm-4 col-sm-6 product">
                                            <div class="item_border item-product">
                                                <div class="item_content">
                                                    <div class="post_images">

                                                        <span class="price">
                                                            <div id="pacage_duration"><?php echo $offer['Discount']; ?> OFF</div>
                                                        </span>
    <!--                                                        <span class="price">
                                                            <a href="booking.php?packageId=<?php echo $offer['id']; ?>" class="book-now">Book Now</a>
                                                        </span>-->
                                                        <a href="view_offers.php?id=<?php echo $offer['id']; ?>" class="woocommerce-LoopProduct-link">

                                                            <img width="430" height="305" src="images/offers/<?php echo $offer['image_name']; ?>" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="You big profit" title="You big profit"></a>
<!--                                                        <div class="group-icon">
                                                        </div>-->
                                                    </div>

                                                    <div class="wrapper_content">
                                                        <div class="post_title" id="mg1"><h5>
                                                                <a href="view_offers.php?id=<?php echo $offer['id']; ?>" rel="bookmark"><?php echo $offer['title']; ?></a>
                                                            </h5>
                                                        </div>
                                                        <p class="text-justify"><?php echo substr($offer['Short_description'], 0, 70) . '...'; ?>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="read_more">
                                                    <div class="item_rating">
                                                    </div>
                                                    <div class="pacage-read-book">
                                                    <div class="pull-left" id="button_readmore_class">
                                                        <a rel="nofollow" href="view_offers.php?id=<?php echo $offer['id']; ?>" class="button_tour_pacage_readmore text-center"><span>Read more</span></a>
                                                    </div>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?> 
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php
            include './footer.php';
            ?>
        </div>
        <!--end coppyright-->
        <script type='text/javascript' src='assets/js/jquery.min.js'></script>
        <script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
        <script type='text/javascript' src='assets/js/vendors.js'></script>
        <script type='text/javascript' src='assets/js/jquery.swipebox.min.js'></script>
        <script type='text/javascript' src='assets/js/theme.js'></script>
        <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCaQjbVDR1vRh2iS_V3jLBXRrkQxmoxycQ'></script>
        <script type='text/javascript' src='assets/js/gmap.js'></script>
    </body>

    <!-- Mirrored from html.physcode.com/travel/single-tour.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2017 06:23:53 GMT -->
</html>