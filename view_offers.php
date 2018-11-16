<?php
include './db.php';
include './function.php';

$id = $_GET["id"];

$offer = getOneoffers($id);
?>

<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">

    <!-- Mirrored from html.physcode.com/travel/tours-4-cols.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2017 06:23:53 GMT -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width">
        <title>Safari Lanka || Exploration Travel Sri Lanka</title>
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
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="archive travel_tour travel_tour-page">
        <div class="wrapper-container">
            <?php
            include './header.php';
            ?>
            <div class="site wrapper-content">
                <div class="top_site_main" style="background-image:url(images/banner/view-activity.png);">
                    <div class="banner-wrapper container article_heading">
                        
                        <h1 class="heading_primary">
                            Offers
                        </h1>
                        <div class="breadcrumbs-wrapper">
                            <ul class="phys-breadcrumb">
                                <li><a href="index.php" class="home">Home</a></li>
                                <li><a href="view_offers.php">Offers</a></li>
                                <li></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <section class="content-area">
                    <div class="container">
                        <div class="row">
                            <div class="site-main col-sm-12">

                                <div class="col-md-5">
                                    
                                    <div class="item-tour">
                                        <div class="item_border" style="border: 15px solid #E8E8E8;">
                                            <div class="item_content">
                                                <div class="post_images">
                                                    <img src="images/offers/<?php echo $offer['image_name']; ?>" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="You big profit" title="You big profit"value="<?php echo $offer['id']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="site-main col-md-7 text-justify">
                                    <h2 class="title_offer"><?php echo $offer['title']; ?></h2>
                                    <div class="offer-tags">
                                        <span class="badge badge-pill badge-warning" style="padding: 3% 3% 3% 3%; background-color:#ffb300"><?php echo $offer['Discount']; ?> OFF </span>
                                        <span class="badge badge-pill badge-warning" style="padding: 3% 3% 3% 3%; background-color:#ffb300">Rs. <?php echo $offer['Price']; ?>/=</span>
                                    </div>

                                    <p>
                                        <?php echo $offer['Long_description']; ?>  
                                    </p>


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