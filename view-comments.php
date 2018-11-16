<?php
include './db.php';
include './function.php';

include './admin/Class/Upload.php';

$imgName = NULL;
$success = NULL;
$error = NULL;

if (isset($_POST['save-data'])) {

    $result = addNewTestimonial($_POST, $_FILES);
    if ($result) {
        $success = 'Successfully added new testimonial';
    } else {
        $error = 'oops';
    }
}
?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>User Comments || Exploration Travel Sri Lanka</title>
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
        <link rel="shortcut icon" href="images/logo/logocap.png" type="image/x-icon">
        <link rel="stylesheet" href="assets/css/custom.css" type="text/css" media="all">
    </head>

    <body class="single-product travel_tour-page travel_tour" cz-shortcut-listen="true">
        <div class="wrapper-container">
            <?php
            include './header.php';
            ?>
            <div class="site wrapper-content">
                <div class="top_site_main" style="background-image:url(images/banner/tour-pacage.png);">
                    <div class="banner-wrapper container article_heading">

                        <h2 class="heading_primary">View Comments</h2>
                        <div class="breadcrumbs-wrapper">
                            <ul class="phys-breadcrumb">
                                <li><a href="index.php" class="home">Home</a></li>
                                <li><a href="view-comments.php">Comments</a></li>

                            </ul>
                        </div>
                    </div> 
                </div>
                <div class="container">


                    <div class="row">
                        <div class="col-sm-12">
                            <h3>User Comments</h3>
                        </div><!-- /col-sm-12 -->
                    </div><!-- /row -->
                    <div class='comment-body'>
                        <?php
                        $testimonials = getAllTestimonials();
                        if (count($testimonials) > 0) {
                            foreach ($testimonials as $testimonial) {
                                ?>
                                <div class="row">
                                    <div class="col-sm-1">
                                        <div class="thumbnail">
                                            <img class="img-responsive user-photo" src="images/testimonial/<?php echo $testimonial['image_name'] ?>">

                                        </div><!-- /thumbnail -->
                                    </div><!-- /col-sm-1 -->

                                    <div class="col-sm-9">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <strong><?php echo $testimonial['name'] ?></strong> <span class="text-muted"></span>
                                            </div>
                                            <div class="panel-body">
                                                <?php echo substr($testimonial['description'], 0, 250) . '...'; ?>
                                            </div>
                                        </div>
                                    </div><!-- /col-sm-5 -->
                                </div> 
                                <?php
                            }
                        }
                        ?>
                    </div><!-- /row -->


                </div>


            </div>
        </div>


    </body>
</html>