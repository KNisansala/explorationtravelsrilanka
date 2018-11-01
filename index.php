<?php
include './db.php';
include './function.php';
?>
<!DOCTYPE html>
<html lang="en-US">

    <!-- Mirrored from html.physcode.com/travel/home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2017 06:20:17 GMT -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="xmlrpc.html">
        <title>Exploration Travel Sri Lanka</title>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/font-linearicons.css" type="text/css" media="all">
        <link rel="stylesheet" href="style.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/travel-setting.css" type="text/css" media="all">
        <link rel="shortcut icon" href="images/favicon1.png" type="image/x-icon">
        <link rel="stylesheet" href="assets/css/custom.css" type="text/css" media="all">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="booking-form/style.css" rel="stylesheet" type="text/css"/>

    </head>
    <body cz-shortcut-listen="true">
        <div class="wrapper-container">
            <?php
            include './header.php';
            ?>
            <div class="site wrapper-content">

                <div class="top_site_main">

                </div>
                <?php
                include './slider.php';
                ?>

                <div class="container">
                    <div class="row" style="margin-top: 60px; margin-bottom: 60px;">
                        <div class="col-md-5">

                            <div class="shortcode-offers-reviews  wrapper-offers-slider" id="offer-box">
                                <div class="tours-type-slider list_content" data-dots="true" data-nav="false" data-responsive='{"0":{"items":1}, "480":{"items":1}, "768":{"items":2},"600":{"items":2}, "992":{"items":1}, "1200":{"items":1}}'>
                                    <?php
                                    $offers = getAlloffers();
                                    foreach ($offers as $offer) {
                                        ?>
                                        <div class="item-tour" >
                                            <div class="item_border" style="border: 15px solid #E8E8E8;">
                                                <div class="item_content" >
                                                    <div col-md-12>
                                                        <img src="images/limited-offer.png" class="offer-img hidden-sm hidden-xs"/>
                                                    </div>

                                                    <h3 class="offer-title"><?php echo $offer['title']; ?></h3>


                                                    <div class="offer-discount" ><?php echo $offer['Discount']; ?></div> 
                                                    <div class="off">
                                                        <span class="offer-discount-off">OFF</span>
                                                    </div>
                                                    <img src="images/offers/<?php echo $offer['image_name']; ?>" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="<?php echo $offer['title']; ?>" title="<?php echo $offer['title']; ?>">
                                                    <div> 
                                                        <p class="offer-short-description"><?php echo substr($offer['Short_description'], 0, 25) . '...'; ?></p>
                                                        <div class="pull-left">
                                                            <h4 class="offer-price"> Rs. <?php echo $offer['Price']; ?></h4>
                                                        </div>
                                                        <div class="pull-right">                                                        
                                                            <a class="view_offers" href="view_offers.php?id=<?php echo $offer['id']; ?>"> GET OFFERS</a>                                                       
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


                        <!--Services-->
                        <div class="col-md-7">
                            <div class="row welcome-text" >
                                <div class="col-sm-12 mg-btn-6x">
                                    <div class="shortcode_title title-center title-decoration-bottom-center">
                                        <h3 class="title_primary">Welcome to Exploration Travel Sri Lanka</h3><span class="line_after_title"></span>
                                    </div>
                                    <p class="text-justify"> 
                                        Exploration Travel Sri Lanka is a company with full of trusted, passionate travel 
                                        specialist who creates customized wildlife safari,  holidays, honeymoon, journeys 
                                        among various superb destinations with Sri Lanka. Even you can adjust 
                                        or schedule about the program with your own requirement. It is an experience with a 
                                        unique and we will guide you to reach the maximum temptation which beyond ordinary 
                                        travel destinations. 
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                                        <div class="box-icon icon-image circle">
                                            <img src="images/home/002-gps.png" alt="" style="height:80px;">
                                        </div>
                                        <div class="content-inner">
                                            <div class="sc-heading article_heading">
                                                <h3 style="color:#000000" class="heading__primary">Safari & Tours</h3>
                                            </div>
                                            <div class="desc-icon-box">
                                                <div>Customized tours around superb destinations to observe its beauty</div>
                                                <a class="btn btn-sm btn-default" href="tour_packages.php">More...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                                        <div class="box-icon icon-image ">
                                            <img src="images/home/air-pick.png" alt=""style="height:80px;">
                                        </div>
                                        <div class="content-inner">
                                            <div class="sc-heading article_heading">
                                                <h3 style="color:#000000" class="heading__primary">Taxi Services</h3>
                                            </div>
                                            <div class="desc-icon-box">
                                                <div>Trustworthy taxi with competitive prices reach any destination.</div>
                                                <a class="btn btn-sm btn-default" href="view_offers.php?id=2">More...</a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                                        <div class="box-icon icon-image ">
                                            <img src="images/home/001-signs.png" alt=""style="height:80px;">
                                        </div>
                                        <div class="content-inner">
                                            <div class="sc-heading article_heading">
                                                <h3 style="color:#000000" class="heading__primary">Accommodation</h3>
                                            </div>
                                            <div class="desc-icon-box">
                                                <div>Featuring all your need with insight mirissa offers accommodation.</div>
                                                <a class="btn btn-sm btn-default" href="view_offers.php?id=2">More...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="padding-top-6x padding-bottom-6x section-background" style="background-image:url(images/home/sri-lanka-elephants-1600x900.jpg)">
                    <div class="container">
                        <div class="shortcode_title text-white title-center title-decoration-bottom-center">
                            <div class="title_subtitle">Take a Look at Our</div>
                            <h3 class="title_primary">MOST POPULAR TOURS</h3>
                            <span class="line_after_title" style="color:#ffffff"></span>
                        </div>
                        <div class="row wrapper-tours-slider" id="wrapper-tours-slider">
                            <div class="tours-type-slider list_content" data-dots="true" data-nav="true" data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":2}, "992":{"items":3}, "1200":{"items":4}}'>
                                <?php
                                $packages = getAllPackages();
                                foreach ($packages as $package) {
                                    ?>
                                    <div class="item-tour">
                                        <div class="item_border">
                                            <div class="item_content">
                                                <div class="post_images">
                                                    <a href="view-package.php?id=<?php echo $package['id']; ?>" class="travel_tour-LoopProduct-link">
                                                        <img src="images/packages/<?php echo $package['image_name']; ?>" alt="" title="">
                                                    </a>
                                                </div>
                                                <div class="wrapper_content">
                                                    <div class="post_title"><h4>
                                                            <a href="view-package.php?id=<?php echo $package['id']; ?>" rel="bookmark"><?php echo substr($package['title'], 0, 22) . '...'; ?></a>
                                                        </h4></div>
                                                    <span class="post_date"><?php echo $package['duration']; ?></span>
                                                    <p class="text-justify"><?php echo substr($package['short_description'], 0, 60) . '...'; ?></p>
                                                </div>
                                            </div>
                                            <div class="read_more">

                                                <a href="view-package.php?id=<?php echo $package['id']; ?>" class="read_more_button">VIEW MORE
                                                    <i class="fa fa-long-arrow-right"></i></a>
                                                <div class="clear"></div>
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
                <!--activity-->

                <!--comment-->

                <div class="container">
                    <div class="row"> 
                        <div class="col-sm-12">
                            <div class="shortcode_title title-center title-decoration-bottom-center">
                                <br><br><br> <h3 class="title_primary">FEEDBACK</h3><span class="line_after_title"></span>
                            </div>
                            <div class="shortcode-tour-reviews wrapper-tours-slider" style="color:black;">
                                <div class="tours-type-slider" data-autoplay="true" data-dots="true" style="border-color: black;" data-nav="false" data-responsive='{"0":{"items":1}, "480":{"items":1}, "768":{"items":1}, "992":{"items":1}, "1200":{"items":1}}'>
                                    <?php
                                    $testimonial = getAllTestimonials();
                                    foreach ($testimonial as $Testimonials) {
                                        ?>
                                        <div class="tour-reviews-item" style="color:black;">
                                            <div class="reviews-item-info" style="color:black;">
                                                <img alt="" src="../images/testimonial/<?php echo $Testimonials['image_name']; ?>"class="avatar avatar-95 photo" height="90" width="90">

                                                <div class="reviews-item-rating" style="color:black;">
                                                    <?php echo $Testimonials['name']; ?>
                                                </div>
                                            </div>
                                            <div class="reviews-item-content" style="color:black;">

                                                <div class="reviews-item-description" style="color:black;"><?php echo $Testimonials['description']; ?></div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class=" text-center">
                                    <a class="btn btn-sm btn-default"a href='view-comments.php'><i class="fa fa-eye-slash"></i><span class="hidden-sm hidden-xs">  | View All Comments</span></a>
                                    <div class="btn btn-sm btn-default" id="btn-add-comment"><i class="fa fa-plus"></i><span class="hidden-sm hidden-xs"> | Add Your Comment</span></div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>

            </div>
            <?php
            include './footer.php';
            include './add-comments.php';
            ?>
        </div>




        <script type='text/javascript' src='assets/js/jquery.min.js'></script>

        <script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
        <script type='text/javascript' src='assets/js/vendors.js'></script>
        <script type='text/javascript' src='assets/js/owl.carousel.min.js'></script>
        <script type="text/javascript" src="assets/js/jquery.mb-comingsoon.min.js"></script>
        <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
        <script type='text/javascript' src='assets/js/theme.js'></script>
        <script type="text/javascript">
            jQuery(document).ready(function () {
                jQuery('#btn-add-comment').click(function () {
                    jQuery("#myModal").modal('show');
                });

            });
        </script>
    </body>

    <!-- Mirrored from html.physcode.com/travel/home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2017 06:20:25 GMT -->
</html>