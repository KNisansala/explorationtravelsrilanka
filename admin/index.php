
<?php
include './header.php';
?>


<!-- MENU SECTION END-->
<div class="content-wrapper">
    <div class="container">
        <div class="row" style="padding-top: 10px">
            <div class="col-md-12">
                <h4 class="page-head-line">Dashboard</h4>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success">
                 Welcome to Sublime IT Solution Admin Panel, You can Change all Website content using this admin panel..
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <a href="manage-subsections.php">
                    <div class="dashboard-div-wrapper bk-clr-one">
                    <i  class="fa fa-home fa-2x dashboard-div-icon" ></i>
                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        </div>

                    </div>
                    <h5>Manage Home Page</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <a href="manage-gallery.php">
                <div class="dashboard-div-wrapper bk-clr-two">
                    <i  class="fa fa-picture-o fa-2x dashboard-div-icon" ></i>
                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                        </div>

                    </div>
                    <h5>Manage Gallery </h5>
                </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <a href="settings.php">
                <div class="dashboard-div-wrapper bk-clr-three">
                    <i  class="fa fa-cogs fa-2x dashboard-div-icon" ></i>
                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                        </div>

                    </div>
                    <h5>Settings </h5>
                </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <a href="../">
                <div class="dashboard-div-wrapper bk-clr-four">
                    <i  class="fa fa-share fa-2x dashboard-div-icon" ></i>
                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                        </div>

                    </div>
                    <h5>View Website</h5>
                </div>
                </a>
            </div>

        </div>

        <div class="row" style="height: 130px;">
            
        </div>
        
    </div>
</div>
<!-- CONTENT-WRAPPER SECTION END-->

<?php
include './footer.php';
