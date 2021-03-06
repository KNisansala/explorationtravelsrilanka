<?php
include './header.php';

$imgName = NULL;
$success = NULL;
$error = NULL;

$id = $_GET['id'];
 
if (isset($_POST['save-data'])) {

    $editAttractionPhoto = updateOneAttractionPhoto($_POST, $_FILES);

    if ($editAttractionPhoto) {
        $success = 'Successfully Update image';
    } else {
        $error = 'Something went wrong, please try again ';
    }
}

$attractionPhoto = getOneAttractionPhoto($id);
 
?>


<!-- MAIN SITE WRAPPER-->
<div class="content-wrapper">

    <!--container-->
    <div class="container">
        <!--banner-->
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Manage Excursion Photos </h1>
            </div>
        </div>
        <!--end banner-->


        <!--new image add form-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Excursion Photos
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
                                <input name="image" type="file" id="exampleInputFile"/>
                                <input name="id" value="<?php echo $attractionPhoto['id']; ?>" type="hidden" />
                                <input name="oldImg" value="<?php echo $attractionPhoto['image_name']; ?>" type="hidden" />
                                <p class="help-block">Automaticity cropping this image 900 X 500 pixels</p>
                            </div> 
                            
                            <div class="form-group">
                                <img src="../images/attractions/gallery/thumb/<?php echo $attractionPhoto['image_name']; ?>" width="200">
                            </div>

                            <div class="form-group">
                                <label for="imageTitle">Image Caption</label>
                                <input type="text" name="caption" class="form-control" value="<?php echo $attractionPhoto['caption']; ?>" id="exampleInputEmail1" placeholder="Enter Image Title" required="TRUE"/>
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
