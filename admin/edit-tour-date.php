<?php
include './header.php';

$imgName = NULL;
$success = NULL;
$error = NULL;

$tourDate = '';
if (isset($_GET['id'])) {
    $tourDate = $_GET['id'];
}

$pack = getOneTourDate($tourDate);

if (isset($_POST['save-data'])) {
  
    $editPack = updateOneTourDate($_POST, $_FILES);

    if ($editPack) {
        $success = 'Successfully Update Tour Date';
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
                <h1 class="page-head-line">Edit Tour Date </h1>
            </div>
        </div>
        <!--end banner-->


        <!--new image add form-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit pacage Photos
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
                                <input name="id" value="<?php echo $pack['id']; ?>" type="hidden" />
                                <input name="oldImg" value="<?php echo $pack['image_name']; ?>" type="hidden" />
                                <p class="help-block">Automaticity cropping this image 900 X 500 pixels</p>
                            </div> 

<!--                            <div class="form-group">
                                <label for="imageName">Select Image</label>
                                <img src="../upload/tour-package/gallery/thumb/<?php echo $pack['image_name']; ?>" class="img-responsive"/>
                            </div> -->

                            <div class="form-group">
                                <label for="imageTitle">Title</label>
                                <input type="text" value="<?php echo $pack['title']; ?>" name="title" class="form-control" id="title" placeholder="Title" required="" />
                            </div> 

                            <div class="form-group">
                                <label for="imageTitle"> description</label>
                                <textarea id="description" name="description" class="form-control" rows="5"><?php echo $pack['description']; ?> </textarea> 
                            </div> 
                            <input type="hidden" name="id" value="<?php echo $pack['id']; ?>" id="id" />
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
<script src="tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>
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
<?php
include './footer.php';
