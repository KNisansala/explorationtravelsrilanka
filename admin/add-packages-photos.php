<?php
include './header.php';

$id = $_GET['id'];

if (isset($_POST['save-data'])) {

    $addphoto = addNewPackagePhoto($_POST, $_FILES);

    if ($addphoto) {
        $success = 'Successfully Added New Photos';
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
                <h1 class="page-head-line">Manage Package Photos </h1>
            </div>
        </div>
        <!--end banner-->


        <!--new image add form-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Add New Image 
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
                                <input name="image" type="file" id="exampleInputFile" />
                                <input name="id" value="<?php echo $id; ?>" type="hidden" />
                                <p class="help-block">Automaticity cropping this image 900 X 500 pixels</p>
                            </div> 

                            <div class="form-group">
                                <label for="imageTitle">Image Caption</label>
                                <input type="text" name="caption" class="form-control" id="exampleInputEmail1" placeholder="Enter Image Title" required="" />
                            </div> 

                            <button type="submit" name="save-data" value="Save" class="btn btn-default">Save</button> 
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
                    $packPhotos = getAllPackagesPhotos($id);

                    if (count($packPhotos) > 0) {
                        foreach ($packPhotos as $img) {
                            ?>
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <div class="slider-image">
                                    <a class="info" class="example-image-link" data-lightbox="example-set"  href="../images/packages/gallery/<?php echo $img["image_name"]; ?>" > 
                                        <img class="example-image img-responsive" src="../images/packages/gallery/thumb/<?php echo $img["image_name"]; ?>" alt=""/> 
                                    </a> 
                                </div>  

                                <div class="image-option " > 
                                    <p class="maxlinetitle"><?php echo $img["caption"]; ?></p>
                                    <button class="glyphicon glyphicon-trash delete text-danger delete-pack-photo" id="<?php echo $img["image_name"]; ?>"></button>
                                    <a href="edit-packages-photos.php?id=<?php echo $img["id"]; ?>"><button class="glyphicon glyphicon-pencil edit"></button></a>
                                    <a href="arrange-packages-photos.php?id=<?php echo $id; ?>"><button class="glyphicon glyphicon-sort pictuers"></button></a>
                                </div>

                            </div> 
                            <?php
                        }
                    } else {
                        ?> 
                        <b style="padding-left: 15px;">No images in the database.</b> 
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
