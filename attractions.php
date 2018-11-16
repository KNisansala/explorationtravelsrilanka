<?php
include './db.php';
include './function.php';
?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">

    <!-- Mirrored from html.physcode.com/travel/destinations.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2017 06:23:53 GMT -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Attraction || Exploration Travel Sri Lanka</title>
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
                <div class="top_site_main" style="background-image:url(images/banner/abou.jpg);">
                    <div class="banner-wrapper container article_heading">

                        <h1 class="heading_primary">Attraction</h1>
                        <div class="breadcrumbs-wrapper">

                            <ul class="phys-breadcrumb">
                                <li><a href="index.php" class="home">Home</a></li>
                                <li><a href="attractions.php">Attraction</a></li>
                            </ul>
                        </div>

                    </div>
                </div>

                <section class="content-area"> 
                    <div class="container"> 
                        <div class="row"> 
                            <div class="site-main col-sm-12 full-width">
                                <ul class="tours products wrapper-tours-slider">
                                    <?php
                                    $attractions = getAllAttractions();
                                    foreach ($attractions as $attraction) {
                                        ?> 
                                        <li class="item-tour col-md-3 col-sm-6 product">
                                            <div class="item_border item-product">
                                                <div class="post_images">
                                                    <a href="view-attraction.php?id=<?php echo $attraction['id']; ?>">
                                                        <span class="onsale"><?php echo $attraction['title']; ?></span>
                                                        <img width="430" height="305" src="images/attractions/<?php echo $attraction['image_name']; ?>" alt="<?php echo $attraction['title']; ?>" title="<?php echo $attraction['title']; ?>">
                                                    </a>

                                                </div>
                                                <div class="wrapper_content">


                                                    <div class="description">
                                                        <p><?php echo substr($attraction['short_description'], 0, 80) . '...'; ?></p>
                                                    </div>
                                                </div>
                                                <div class="read_more">
                                                    <a rel="nofollow" href="view-attraction.php?id=<?php echo $attraction['id']; ?>" class="button product_type_tour_phys add_to_cart_button">Read more</a>
                                                </div>
                                            </div>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div> 
                </section>

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
    <script type='text/javascript' src='assets/js/isotope.pkgd.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.swipebox.min.js'></script>
    <script type='text/javascript' src='assets/js/theme.js'></script>
</body>

<!-- Mirrored from html.physcode.com/travel/destinations.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2017 06:24:04 GMT -->
</html>