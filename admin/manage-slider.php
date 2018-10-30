<?php
include './header.php';

$imgName = NULL;
$success = NULL;
$error = NULL;

if (isset($_POST['save-data'])) {

    $mainSlider = addNewSlide($_POST, $_FILES);

    if ($mainSlider) {
        $success = 'Successfully added new Slide';
    } else {
        $error = 'Something went wrong, please try again ';
    }
}
?>

<!-- MAIN SITE WRAPPER-->
<div class="content-wrapper">

    <!--container-->
    <div class="container">
        <!--banner-->
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Manage Slider </h1>
            </div>
        </div>
        <!--end banner-->


        <!--new image add form-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Add New Image for Slider
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
                                <label for="image">Select Image</label>
                                <input name="image" type="file" id="image" required="TRUE"/>
                                <p class="help-block">Automaticity cropping this image 1600 X 700 pixels</p>
                            </div> 

                            <div class="form-group">
                                <label for="title">Image Title</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Enter Image Title" required="TRUE"/>
                            </div> 

                            <div class="form-group">
                                <label for="url">URL</label>
                                <input type="text" name="url" class="form-control" id="url" placeholder="Enter URl" required="TRUE"/>
                            </div> 
 
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" id="description"></textarea>
                            </div> 

                            <button type="submit" name="save-data" value="Save" class="btn btn-success">Submit</button> 
                            
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
                    
                    $sliderPhotos = getAllSlides();
                    
                    if (count($sliderPhotos) > 0) {
                        foreach ($sliderPhotos as $img) {
                            ?>
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <div class="slider-image">
                                    <a class="info" class="example-image-link" data-lightbox="example-set"  href="../images/slider/<?php echo $img["image_name"]; ?>" > 
                                        <img class="example-image img-responsive" src="../images/slider/<?php echo $img["image_name"]; ?>" alt=""/> 
                                    </a> 
                                </div>  

                                <div class="image-option " > 
                                    <p class="maxlinetitle"><?php echo $img["title"]; ?></p>
                                    <button class="glyphicon glyphicon-trash delete text-danger delete-slider-image" id="<?php echo $img["image_name"]; ?>"></button>
                                    <a href="edit-slider.php?id=<?php echo $img["id"]; ?>"><button class="glyphicon glyphicon-pencil edit"></button></a>
                                    <a href="arrange-slider.php"><button class="glyphicon glyphicon-sort pictuers"></button></a>
                                </div>

                            </div> 
                            <?php
                        }
                    } else {
                        ?> 
                        <b>No Slider in the database.</b> 
                    <?php } ?> 
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include './footer.php';
