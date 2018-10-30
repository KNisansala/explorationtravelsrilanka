<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!$_SESSION['login']) {
   echo '<script>window.location = "login/";</script>';
}


include_once '../db.php';
include '../function.php';
include './Class/Upload.php';
?> 
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sublime IT Solution Basic Admin Panel</title>

        <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="css/admin-style.css" rel="stylesheet">
        <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet">
        <link type="text/css" href="css/lightbox.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> 

        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script> 

        

    </head>

    <body>

        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="../">Sri Lanka Holiday Tours</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">                        
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Home <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="manage-slider.php">Manage Slider</a></li>
                                <li><a href="welcome-text.php">Welcome Text</a></li> 
                            </ul>
                        </li>

                        <li><a href="manage-about-us.php">About Us</a></li>
                        
                        
                         
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Packages <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="manage-packages.php">Manage Packages</a></li>
                                <li><a href="arrange-packages.php">Arrange Packages</a></li>
                            </ul>
                        </li>
                        
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Offers <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="manage-offers.php">Manage offers</a></li>
                                <li><a href="arrange-offers.php">Arrange offers</a></li>
                            </ul>
                        </li>
                        
                        
                        
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Attraction <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="manage-attractions.php">Manage Attraction</a></li>
                                <li><a href="arrange-attractions.php">Arange Attraction</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Activities <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="manage-activities.php">Manage Activities</a></li>
                                <li><a href="arrange-activities.php">Arange Activities</a></li>
                            </ul>
                        </li>
                        
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Gallery <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="manage-gallery.php">Manage Gallery</a></li>
                                <li><a href="arrange-gallery.php">Arange Gallery</a></li>
                            </ul>
                        </li>
                        
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Guest Comments <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="manage-testimonial.php">Manage Comments</a></li>
                                <li><a href="arrange-testimonial.php">Arange Comments</a></li>
                            </ul>
                        </li>
                        
                        
                        
                        
                        
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['Name']; ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>

                                <li><a href="login/log-out.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
