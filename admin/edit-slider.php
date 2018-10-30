<?php
include './header.php';

$imgName = NULL;
$success = NULL;
$error = NULL;

$id = $_GET['id'];
 
if (isset($_POST['save-data'])) {

    $editSlider = updateOneSlide($_POST, $_FILES);

    if ($editSlider) {
        $success = 'Successfully Update Slide';
    } else {
        $error = 'Something went wrong, please try again ';
    }
}

$slide = getOneSlide($id);

?>

<!-- MAIN SITE WRAPPER-->
<div class="content-wrapper">

    <!--container-->
    <div class="container">
        <!--banner-->
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Edit Slider </h1>
            </div>
        </div>
        <!--end banner-->


        <!--new image add form-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Slider Image
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
                                <input name="image" type="file" id="image" />
                                <input name="id" value="<?php echo $slide['id']; ?>" type="hidden" />
                                <input name="oldImg" value="<?php echo $slide['image_name']; ?>" type="hidden" />
                                <p class="help-block">Automaticity cropping this image 1600 X 700 pixels</p>
                            </div>

                            <div class="form-group">
                                <label for="title">Image Title</label>
                                <input type="text" name="title" class="form-control" value="<?php echo $slide['title']; ?>" id="title" placeholder="Enter Image Title" />
                            </div> 

                            <div class="form-group">
                                <label for="url">URL</label>
                                <input type="text" name="url" class="form-control" value="<?php echo $slide['url']; ?>" id="url" placeholder="Enter URl" />
                            </div> 
                            
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" id="description"><?php echo $slide['description']; ?></textarea>
                            </div> 
 

                            <button type="submit" name="save-data" value="Save" class="btn btn-default">Save</button> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end new image add form--> 

    </div>
    <!--end container-->
</div>
<!--END MAIN SITE WRAPPER-->

<?php
include './footer.php';
