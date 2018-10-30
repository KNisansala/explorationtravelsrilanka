<?php
include './header.php';

$imgName = NULL;
$success = NULL;
$error = NULL;


if (isset($_POST['save-data'])) {

    $aboutusedit = updateAboutUspageContant($_POST, $_FILES);

    if ($aboutusedit) {
        $success = 'Success Added New Property Type';
    } else {
        $reer = 'oops';
    }
}

$aboutus = getAboutUspageContant();
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
                <h1 class="page-head-line">Edit About US </h1>
            </div>
        </div>
        <!--end banner-->


        <!--new image add form-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit About US
                    </div>
                    <div class="panel-body">
                        <form method="post" action="" enctype="multipart/form-data">

                            <div class="form-group">
                                <?php if (!empty($success)) { ?>

                                    <div class="alert alert-success" style="margin-top: 15px ">
                                        <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Success! </strong> <?php echo $success; ?>
                                    </div>

                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <label for="imageName">Select Image</label>
                                <input name="image" type="file" id="exampleInputFile" />
                                <p class="help-block">Automaticity cropping this image 500 X 300 pixels</p>
                            </div> 

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" value="<?php echo $aboutus['title']; ?>" id="exampleInputEmail1" placeholder="Enter Image Title" />
                            </div> 

                            <div class="form-group">
                                <label for="vision">Vision</label>
                                <input type="text" name="vision" class="form-control" value="<?php echo $aboutus['vision']; ?>" id="exampleInputEmail1" placeholder="Enter URl" />
                            </div> 

                            <div class="form-group">
                                <label for="mission">Mission</label>
                                <input type="text" name="mission" class="form-control" value="<?php echo $aboutus['mission']; ?>" id="exampleInputEmail1" placeholder="Enter URl" />
                            </div> 

                            <div class="form-group">
                                <label for="description" >Description: </label>                                 
                                <textarea id="longText" name="description" class="form-control" rows="5"  ><?php echo $aboutus['description']; ?></textarea> 

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
