<?php
include './db.php';
include './function.php';

?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">

    <!-- Mirrored from html.physcode.com/travel/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2017 06:26:08 GMT -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width">
        <title>Gallery || Exploration Travel Sri Lanka</title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="xmlrpc.html">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/font-linearicons.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/swipebox.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="style.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/travel-setting.css" type="text/css" media="all">
        <link rel="shortcut icon" href="images/logo/logocap.png" type="image/x-icon">
        <link href="assets/css/lightbox.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="archive" cz-shortcut-listen="true">
        <div class="wrapper-container">
            <?php
            include './header.php';
            ?>
            <div class="site wrapper-content">
                <div class="top_site_main" style="background-image:url(images/banner/Belihuloya-3.jpg);">
                    <div class="banner-wrapper container article_heading">
                        
                        <h1 class="heading_primary">Gallery</h1>
                        <div class="breadcrumbs-wrapper">
                            <ul class="phys-breadcrumb">
                                <li><a href="index.php" class="home">Home</a></li>
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
               <section class="content-area">
			<div class="container">
				<div class="row">
					<div class="site-main col-sm-12 full-width">
						<div class="sc-gallery wrapper_gallery">
							
							<div class="row content_gallery">
                                                            <?php
                                                            $gallery = getAllImages();
                                                            foreach ($gallery as $gallery){
                                                                    ?>
                                                            <div class="col-sm-4 gallery_item-wrap competitions gears">
                                                                <a href="images/gallery/<?php echo $gallery["image_name"];?>" class="swipebox" data-lightbox="gallery" title="<?php echo $gallery["caption"];?>">
                                                                    <img src="images/gallery/<?php echo $gallery["image_name"];?>" alt=""  id="gallery_container" class="img-centered img-responsive" data-animate="zoomIn" alt="image-1">
										<div class="gallery-item">
											<h4 class="title"><?php echo $gallery["caption"];?></h4>
										</div>
									</a></div>
                                                            <?php
                                                            }
                                                            ?>
								
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
        <script type='text/javascript' src='assets/js/isotope.pkgd.min.js'></script>
        <script type='text/javascript' src='assets/js/jquery.swipebox.min.js'></script>
        <script type='text/javascript' src='assets/js/theme.js'></script>
        <script src="assets/js/lightbox.min.js" type="text/javascript"></script>
    </body>

    <!-- Mirrored from html.physcode.com/travel/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2017 06:26:08 GMT -->
</html>