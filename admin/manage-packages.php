<?php
include './header.php';

$imgName = NULL;
$success = NULL;
$error = NULL;

if (isset($_POST['save-data'])) {

    $rooms = addNewPackage($_POST, $_FILES);

    if ($rooms) {
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
                <h1 class="page-head-line">Packages</h1>
            </div>
        </div>
        <!--end banner-->


        <!--new image add form-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Add New Packages
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
                                <label for="imageName">Select Image</label>
                                <input name="image" type="file" id="imageName" required />
                                <p class="help-block">Automaticity cropping this image 480 X 300 pixels</p>
                            </div> 

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Enter Package Name" required/>
                            </div>  
                            <div class="form-group">
                                <label for="duration">duration</label>
                                <input type="text" name="duration" class="form-control" id="duration" placeholder="Enter duration" required />
                            </div>  
                            
                            <div class="form-group">
                                <label for="short_description" >Short Description: </label>                                 
                                <textarea id="short_description" name="short_description" class="form-control" rows="3" required></textarea> 

                            </div>

                            <div class="form-group">
                                <label for="description" >Description: </label>                                 
                                <textarea id="description" name="description" class="form-control" rows="5"></textarea> 

                            </div>

                            <button type="submit" name="save-data" value="Save" class="btn btn-default">Add</button> 
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!--end new image add form-->

        <!--view slider image -->
        <div class="panel panel-default"> 
            <div class="panel-body"> 

                <div class="row"> 
                    <?php
                    $packages = getAllPackages(); 
                    
                    if (count($packages) > 0) {
                        foreach ($packages as $package) {
                            ?>
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <div class="slider-image">                                
                                    <img class="img-responsive" src="../images/packages/<?php echo $package["image_name"]; ?>" alt=""/>                                  
                                </div>  
                                
                                <div class="image-option " > 
                                    <p class="maxlinetitle"><?php echo $package["title"]; ?></p>
                                    <button class="glyphicon glyphicon-trash delete text-danger delete-pack" id="<?php echo $package["id"]; ?>"></button>
                                    <a href="edit-package.php?id=<?php echo $package["id"]; ?>"><button class="glyphicon glyphicon-pencil edit"></button></a>                                    
                                    <a href="add-packages-photos.php?id=<?php echo $package["id"]; ?>"><button class="glyphicon glyphicon-picture pictuers"></button></a>
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
