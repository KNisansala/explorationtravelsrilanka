<?php
include './header.php';

$imgName = NULL;
$success = NULL;
$error = NULL;

$id = $_GET['id'];
$testimonial = getOneTestimonial($id);
$imageold = $testimonial['image_name'];

if (isset($_POST['save-data'])) {
    $result = updateOneTestimonial($_POST, $_FILES);
    if ($result) {
        $success = 'Successfully Edited Testimonial';
    } else {
        $error = 'oops';
    }
}
?>

<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Manage Testimonial </h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Testimonial
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

                            <select name="status"class="form-control" style="width: 150px;">
                                <?php
                                if ($testimonial['status'] == 1) {
                                    ?>
                                    <option selected value="1">Active</option>
                                    <option value="0">Inactive</option>
                                    <?php
                                } else {
                                    ?>
                                    <option value="1">Active</option>
                                    <option selected value="0">Inactive</option>
                                    <?php
                                }
                                ?>
                            </select>

                            <div class="form-group">
                                <label for="imageName">Select Image</label>
                                <input name="image" type="file" id="imageName" />
                                <p class="help-block">Automaticity cropping this image 300 X 300 pixels</p>
                            </div> 

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $testimonial['name']; ?>" id="name" />
                                <input type="hidden" name="imageold" value="<?php echo $testimonial['image_name']; ?>">
                                <input type="hidden" name="id" value="<?php echo $testimonial['id']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" class="form-control" rows="5"><?php echo $testimonial['description']; ?> </textarea>
                            </div>                             

                            <button type="submit" name="save-data" value="Save" class="btn btn-default">Save</button> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include './footer.php';
