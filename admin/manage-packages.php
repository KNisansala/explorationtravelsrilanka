<?php
include './header.php';

$imgName = NULL;
$success = NULL;
$error = NULL;

if (isset($_POST['save-data'])) {

    $tourpack = createTourpackage($_POST, $_FILES);

    if ($tourpack) {
        $success = 'Successfully added new Slide';
    } else {
        $error = 'Something went wrong, please try again ';
    }
}
?>

<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<script>

    tinymce.init({
        selector: "#description",
        // ===========================================
        // INCLUDE THE PLUGIN
        // ===========================================

        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        // ===========================================
        // PUT PLUGIN'S BUTTON on the toolbar
        // ===========================================

        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
        // ===========================================
        // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
        // ===========================================

        relative_urls: false

    });

</script>
<!-- MAIN SITE WRAPPER-->
<div class="content-wrapper">

    <!--container-->
    <div class="container">
        <!--banner-->
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Tour Package</h1>
            </div>
        </div>
        <!--end banner-->


        <!--new image add form-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Add New Package
                    </div>
                    <div class="panel-body">
                        <form method="post" action="" enctype="multipart/form-data">

                            <div class="form-group">
                                <?php if (isset($success)) { ?>

                                    <div class="alert alert-success" style="margin-top: 15px ">
                                        <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Success! </strong> <?php echo $success; ?>
                                    </div>

                                <?php } ?>

                                <?php if (isset($error)) { ?>

                                    <div class="alert alert-danger" style="margin-top: 15px ">
                                        <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Try again! </strong> <?php echo $error; ?>
                                    </div>

                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Title</label>
                                <input type="text" id="title" class="form-control"  autocomplete="off" name="title" required="true">

                            </div> 

                            <div class="form-group">
                                <label class="form-label">Price</label>
                                <input type="text" id="price" class="form-control" autocomplete="off" name="price" required="true">
                            </div>  
                           
                            <div class="form-group">
                                <label for="imageName">Select Image</label>
                                <input name="image" type="file" id="image" required/>
                                <p class="help-block">Automaticity cropping this image 480 X 300 pixels</p>
                            </div>


                            <div class="form-group">
                                <label class="form-label">Short Description</label>
                                <input type="text" id="short_description" class="form-control" autocomplete="off" name="short_description" required="true">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>                               
                                <textarea id="description" name="description" class="form-control" rows="5"></textarea> 
                            </div>
                            <input type="hidden" id="id" value="<?php echo $id ?>" name="id"/>
                            <button type="submit" name="save-data" value="Save" class="btn btn-default">Add</button> 
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!--end new image add form-->

        <!--view slider image -->
        <div class="panel panel-default"> 
                <div class="panel-heading">
                    Manage Tour Package
                </div>
                <div class="panel-body">
                    <div class="row"> 
                        <?php
                        $packages = AllPackages();

                        if (count($packages) > 0) {
                            foreach ($packages as $package) {
                                ?>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                    <div class="slider-image">                                
                                        <img class="img-responsive" src="../upload/tour-package/<?php echo $package["image_name"]; ?>" alt=""/>                                  
                                    </div>  

                                    <div class="image-option " > 
                                        <p class="maxlinetitle"><?php echo $package["title"]; ?></p>
                                        <button class="glyphicon glyphicon-trash delete text-danger delete-pack" id="<?php echo $package["id"]; ?>"></button>
                                        <a href="edit-package.php?id=<?php echo $package["id"]; ?>"><button class="glyphicon glyphicon-pencil edit"></button></a>                                    
                                        <a href="view-tour-date.php?id=<?php echo $package["id"]; ?>"><button class="glyphicon glyphicon-time pictuers"></button></a>
                                        <a href="arrange-tour-packages.php?id=<?php echo $id; ?>"><button class="glyphicon glyphicon-sort pictuers"></button></a>
                                    </div>

                                </div> 
                                <?php
                            }
                        } else {
                            ?> 
                            <b style="padding-left: 15px;">No Package in the database.</b> 
                        <?php } ?> 

                    </div>
                </div>
        </div>
        <!--end view slider image -->

    </div>
    <!--end container-->
</div>
<!--END MAIN SITE WRAPPER-->

<?php
include './footer.php';
