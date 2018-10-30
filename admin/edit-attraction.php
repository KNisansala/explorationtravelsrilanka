<?php
include './header.php';

$imgName = NULL;
$success = NULL;
$error = NULL;

$id = $_GET['id'];
 
if (isset($_POST['save-data'])) {

    $editAttraction = updateOneAttraction($_POST, $_FILES);

    if ($editAttraction) {
        $success = 'Successfully Update Attraction';
    } else {
        $error = 'Something went wrong, please try again ';
    }
}

$attraction = getOneAttraction($id);

?>

<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<script>

    tinymce.init({
        selector: "#longText",
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
                <h1 class="page-head-line">Edit Excursion</h1>
            </div>
        </div>
        <!--end banner-->


        <!--new image add form-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Excursion Details
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
                                <input name="id" value="<?php echo $attraction['id']; ?>" type="hidden" />
                                <input name="oldImg" value="<?php echo $attraction['image_name']; ?>" type="hidden" />
                                <p class="help-block">Automaticity cropping this image 900 X 500 pixels</p>
                            </div> 

                            <div class="form-group">
                                <label for="imageTitle">Image Title</label>
                                <input type="text" name="title" class="form-control" value="<?php echo $attraction['title']; ?>" id="exampleInputEmail1" placeholder="Enter Image Title" />
                            </div>

                            <div class="form-group">
                                <label for="short_description">Short Description</label>
                                <input type="text" name="short_description" class="form-control" id="short_description" value="<?php echo $attraction['short_description']; ?>" placeholder="Enter Short Description" />
                            </div>

                            <div class="form-group">
                                <label for="description" >Description: </label>                                 
                                <textarea id="longText" name="description" class="form-control" rows="5" required="TRUE"><?php echo $attraction['description']; ?></textarea> 

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
