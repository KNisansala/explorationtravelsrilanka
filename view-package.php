<?php
include './db.php';
include './function.php';
$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
//$id = $_GET["id"];

$details = getOnePackage($id);
?>

<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width">
        <title><?php echo $details["title"]; ?> || Tour Packages || Exploration Travel Sril Lanka</title>
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
        <link href="assets/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <!--fancybox css-->
        <link href="fancybox-master/css/jquery.fancybox.min.css" rel="stylesheet" type="text/css"/>
    </head>


    <body class="single-product travel_tour-page travel_tour">

        <?php
        include './header.php';
        ?>

        <div class="site wrapper-content">
            <div class="top_site_main" style="background-image:url(images/banner/attraction1.jpg);">
                <div class="banner-wrapper container article_heading">

                    <h2 class="heading_primary"><?php echo $details["title"]; ?></h2>

                    <div class="breadcrumbs-wrapper breadcrumbshead">
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


                            <div class="clear"></div>
                            <div class="single-tour-tabs wc-tabs-wrapper col-md-12">

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--description panel entry-content wc-tab active tab-text" id="tab-description">
                                        <?php
                                        $tourdates = getAllTourDatesbytour($id);
                                        foreach ($tourdates as $date) {
                                            ?>
                                            <h2><?php echo $date['title']; ?></h2>
                                            <p><?php echo $date["description"]; ?></p>


                                            <?php
                                            $tourdatephotos = getAllTourDatesPhotobytour($date['id']);
                                            foreach ($tourdatephotos as $img) {
                                                ?>
                                                <div class="col-md-3 col-sm-4 col-xs-12 tourdateimage ">
                                                    <div class="hovereffect ">
                                                        <figure>
                                                            <a class="" href="upload/tour-package/date/gallery/<?php echo $img['image_name']; ?>" class="" data-fancybox="images" >
                                                                <img src="upload/tour-package/date/gallery/thumb/<?php echo $img['image_name']; ?>" alt=""/>
                                                            </a>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                            ?> 

                                            <?php
                                        }
                                        ?> 

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="summary entry-summary description_single">
                            <div class="affix-sidebar">
                                <div class="entry-content-tour">

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
                        <div class="form-block__title"> <h4>More Tour Packages</h4></div></div>

                    <div class="col-md-12 more_tour_container">
                        <?php
                        $packages = AllPackages();
                        foreach ($packages as $key => $package) {
                            if ($key < 6) {
                                ?>
                                <div class="col-md-2">
                                    <div class="otherTourPack">
                                        <a href="view-package.php?id=<?php echo $package['id']; ?>">
                                            <img width="430" height="305" src="upload/tour-package/thumb1/<?php echo $package['image_name']; ?>" alt="l" title="Discover Brazil">
                                        </a>
                                        <span class="price" title="<?php echo $package['title']; ?>">
                                            <strong>                                       
                                                <?php
                                                if (strlen($package['title']) > 15) {
                                                    echo substr($package['title'], 0, 15) . '...';
                                                } else {
                                                    echo $package['title'];
                                                }
                                                ?>
                                            </strong>
                                        </span>
                                        <p class="text-justify">


                                            <?php
                                            if (strlen($package['short_description']) > 50) {
                                                echo substr($package['short_description'], 0, 50) . '...';
                                            } else {
                                                echo $package['short_description'];
                                            }
                                            ?>

                                        </p>
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
        <script src="fancybox-master/js/jquery.fancybox.min.js" type="text/javascript"></script>
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