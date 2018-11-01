<?php
include './header.php';

$imgName = NULL;
$success = NULL;
$error = NULL;

$id = $_GET['id'];


if (isset($_POST['save-data'])) {

    $editPack = updateOnePackage($_POST, $_FILES);

    if ($editPack) {
        $success = 'Successfully Update Service';
    } else {
        $error = 'Something went wrong, please try again ';
    }
}

//$pack = getOnePackage($id);
$pack = getOneTourPackageByID($id);
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
                <h1 class="page-head-line">Manage Packages </h1>
            </div>
        </div>
        <!--end banner-->


        <!--new image add form-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit <?php echo $pack['title']; ?>
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

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" id="image" class="form-control" value="<?php echo $pack['image_name']; ?>"  name="image">

                                    </div>
                                    <!--<img src="../images/packages/images1_1.jpg" alt=""/>-->
                                    <div class="form-group">
                                        <label class="form-label">Old Image</label>
                                        <div class="form-group">
                                            <img src="../images/packages/thumb/<?php echo $pack['image_name']; ?>" id="image" class="view-edit-img img img-responsive img-thumbnail" name="image" alt="old image">
                                        </div>
                                    </div>

                                </div> 

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" value="<?php echo $pack['title']; ?>" class="form-control" id="title" placeholder="Enter Room Name" />
                                </div>  
                                <div class="form-group">
                                    <label for="duration">Price</label>
                                    <input type="text" name="duration" value="<?php echo $pack['price']; ?>" class="form-control" id="duration" placeholder="Enter duration" />
                                </div>  

                                <div class="form-group">
                                    <label for="short_description" >Short Description: </label>                                 
                                    <textarea id="short_description" name="short_description" class="form-control" rows="3"><?php echo $pack['short_description']; ?></textarea> 

                                </div>

                                <div class="form-group">
                                    <label for="description" >Description: </label>                                 
                                    <textarea id="description" name="description" class="form-control" rows="5"><?php echo $pack['description']; ?> </textarea> 

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
