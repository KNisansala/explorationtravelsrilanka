<?php
include './db.php';
include './function.php';

$name = '';
$ddate = '';
$email = '';
$adate = '';
$adults = '';
$child = '';
$packageId = '';

if (isset($_POST['txtFullName'])) {
    $name = $_POST['txtFullName'];
}

if (isset($_POST['txtEmail'])) {
    $email = $_POST['txtEmail'];
}

if (isset($_POST['txtDdate'])) {
    $ddate = $_POST['txtDdate'];
}

if (isset($_POST['txtAdate'])) {
    $adate = $_POST['txtAdate'];
}

if (isset($_POST['txtAdults'])) {
    $adults = $_POST['txtAdults'];
}

if (isset($_POST['txtChild'])) {
    $child = $_POST['txtChild'];
}

if (isset($_POST['packageId'])) {
    $packageId = $_POST['packageId'];
}

if (isset($_GET['packageId'])) {
    $packageId = $_GET['packageId'];
}
?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">

    <!-- Mirrored from html.physcode.com/travel/tours.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2017 06:23:18 GMT -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width">
        <title>Booking</title>
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
        <link rel="stylesheet" href="assets/css/custom.css" type="text/css" media="all">
        <link href="assets/css/datepicker.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
        <link href="booking-form/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="single-product travel_tour-page travel_tour" cz-shortcut-listen="true">
        <div class="wrapper-container">
            <?php
            include './header.php';
            ?>
            <div class="site wrapper-content">
                <div class="top_site_main" style="background-image:url(images/banner/booking.png);">
                    <div class="banner-wrapper container article_heading">                       
                        <h1 class="heading_primary">Booking</h1>
                        <div class="breadcrumbs-wrapper">
                            <ul class="phys-breadcrumb">
                                <li>
                                    <a href="index.php" class="home">Home</a>
                                </li>
                                <li>Booking</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <section class="content-area">
                    <div class="container padding-bottom-6x padding-top-6x">
                        <div class="panel panel-default container">
                            <div class="panel-body">
                                <div class="wrapper-inner">
                                    <div class="row">
                                        <div class="contact-form " style="padding-bottom: 20px">
                                            <div class="row form-group">
                                                <div class="col-xs-12 col-sm-6">
                                                    <label>Your Name</label>
                                                    <span id="star">*</span>
                                                    <input type="text" name="txtFullName" id="txtFullName" class="form-control input-validater" value="<?php echo $name; ?>">
                                                    <span id="spanFullName" ></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-6">
                                                    <label>Your Email</label>
                                                    <span id="star">*</span>
                                                    <input type="text" name="txtEmail" id="txtEmail" class="form-control input-validater" value="<?php echo $email; ?>">
                                                    <span id="spanEmail" ></span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-xs-12 col-sm-6">
                                                    <label>Your Country</label>
                                                    <span id="star">*</span>
                                                    <input type="text" name="txtCountry"  id="txtCountry" class="form-control input-validater" r>
                                                    <span id="spanCountry" ></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-6">
                                                    <label>Your Contact Numbers</label>
                                                    <span id="star">*</span>
                                                    <input type="text" name="txtPhone" id="txtPhone" class="form-control input-validater">
                                                    <span id="spanPhone" ></span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-xs-12 col-sm-6">
                                                    <label>Departure Date</label>
                                                    <span id="star">*</span>
                                                    <input type="text" name="txtDdate" id="txtDdate" class="form-control input-validater datepicker" value="<?php echo $ddate; ?>" required>
                                                    <span id="spanDdate"></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-6">
                                                    <label>Arrival Date</label>
                                                    <span id="star">*</span>
                                                    <input type="text" name="txtAdate" id="txtAdate" class="form-control input-validater datepicker" value="<?php echo $adate; ?>" required>

                                                    <span id="spanAdate"></span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-xs-12 col-sm-6">
                                                    <label>Number of Adults</label>
                                                    <span id="star">*</span>

                                                    <input type="number" name="txtAdults" id="txtAdults" class="form-control input-validater" value="<?php echo $adults; ?>">

                                                    <span id="spanAdults" ></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-6">
                                                    <label>Number of Children</label>
                                                    <span id="star">*</span>

                                                    <input type="number" name="txtChild" id="txtChild" class="form-control input-validater"  value="<?php echo $child; ?>">   

                                                    <span id="spanChild" ></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Tour Package</label>
                                                <span id="star">*</span>
                                                <select name="txtPackage" id="txtPackage" class="form-control input-validater" >
                                                    <option> -- Please Select a Package -- </option>

                                                    <?php
                                                    if (count(getAllPackages()) > 0) {
                                                        foreach (getAllPackages() as $key => $package) {
                                                            if ($package['id'] == $packageId) {
                                                                ?>
                                                                <option value="<?php echo $package["title"]; ?>" selected><?php echo $package["title"]; ?></option>
                                                                <?php
                                                            } else {
                                                                ?>
                                                                <option value="<?php echo $package["title"]; ?>"><?php echo $package["title"]; ?></option>
                                                                <?php
                                                            }
                                                        }
                                                    } else {
                                                        ?> 
                                                        <b style="padding-left: 15px;">No packages in the database.</b> 
                                                    <?php } ?>  
                                                </select>
                                                <span id="spanPackage" ></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Your Message</label>
                                                <span id="star">*</span>
                                                <textarea name="txtMessage"  id="txtMessage" rows="6" class="form-control input-validater"  placeholder="write message here" required></textarea>
                                                <span id="spanMessage" ></span>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-xs-12 col-sm-6 row">
                                                    <div class="col-sm-6">
                                                        <label for="comment">Security Code:</label>
                                                        <span id="star">*</span> 
                                                        <input type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the security code >> ">
                                                        <span id="capspan" ></span> 
                                                    </div>
                                                    <div class="col-sm-6"> 
                                                        <?php include("./booking-form/captchacode-widget.php"); ?> 
                                                    </div>  
                                                </div>
                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="col-sm-4">
                                                        <div class="div-check" style="margin-top: 25px;">
                                                            <img src="booking-form/img/checking.gif" id="checking"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8 text-right view_all_rooms">
                                                        <button type="submit" id="btnSubmit" class="btn btn-warning">SEND YOUR DETAILS</button>
                                                    </div>  
                                                    <div id="dismessage" align="center"></div>
                                                </div>
                                            </div> 

                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <style>
                    @media (max-width: 800px) {
                        .contact_infor ul li .des {
                            width: calc(105% - 194px);
                            display: inline-block;
                            vertical-align: middle;
                        }
                        .container {
                            padding-right: 8px;
                            padding-left: 5px;
                            margin-right: auto;
                            margin-left: auto;
                        }
                    }
                </style>
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
        <script src="assets/js/jquery-ui.js" type="text/javascript"></script>
        <script src="assets/js/jquery.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="booking-form/scripts.js" type="text/javascript"></script>
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

    <!-- Mirrored from html.physcode.com/travel/tours.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2017 06:23:49 GMT -->
</html>