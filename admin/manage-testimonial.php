<?php
include './header.php';

$imgName = NULL;
$success = NULL;
$error = NULL;

if (isset($_POST['save-data'])) {
    $result = addNewTestimonial($_POST, $_FILES);
    if ($result) {
        $success = 'Successfully added new testimonial';
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
                        Add New Testimonial
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
                                <input name="image" type="file" id="imageName" />
                                <p class="help-block">Automaticity cropping this image 300 X 300 pixels</p>
                            </div> 

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" />
                                <input type="hidden" name="status" value="1" />
                            </div> 

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" class="form-control" rows="5" placeholder="Enter Description"> </textarea>
                            </div>

                            <button type="submit" name="save-data" value="Save" class="btn btn-default">Save</button> 
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <div class="panel panel-default"> 
            <div class="panel-body">
                <?php
                $testimonials = getAllTestimonials();
                if (count($testimonials) > 0) {
                    foreach ($testimonials as $testimonial) {
                        if ($testimonial['status'] == 0) {
                            ?>
                            <div>
                                <div class="col-md-2 testim-pic-inac">
                                    <img src="../images/testimonial/<?php echo $testimonial['image_name'] ?>" width="150" class="boder-radius center-block"/>
                                </div>

                                <div class="col-md-10 testim-des-inac">
                                    <h4><?php echo $testimonial['name'] ?></h4>
                                    <p><?php echo substr($testimonial['description'],0, 250).'...'; ?></p>
                                    <div class="image-option-fedback">
                                        <button class="glyphicon glyphicon-trash delete text-danger delete-testimonial" id="<?php echo $testimonial["id"]; ?>"></button>
                                        <a href="edit-testimonial.php?id=<?php echo $testimonial["id"]; ?>"><button class="glyphicon glyphicon-pencil edit"></button></a>
                                    </div>
                                </div>                            

                            </div>                        
                            <div style="padding-bottom: 10px" class="clearfix"></div>
                            <?php
                        }
                    }
                    foreach ($testimonials as $testimonial) {
                        if ($testimonial['status'] == 1) {
                            ?>
                            <div>
                                <div class="col-md-2 testim-pic">
                                    <img src="../images/testimonial/<?php echo $testimonial['image_name'] ?>" width="150" class="boder-radius center-block"/>
                                </div>

                                <div class="col-md-10 testim-des">
                                    <h4><?php echo $testimonial['name'] ?></h4>
                                    <p><?php echo substr($testimonial['description'],0, 250).'...'; ?></p>
                                    <div class="image-option-fedback">
                                        <button class="glyphicon glyphicon-trash delete text-danger delete-testimonial" id="<?php echo $testimonial["id"]; ?>"></button>
                                        <a href="edit-testimonial.php?id=<?php echo $testimonial["id"]; ?>"><button class="glyphicon glyphicon-pencil edit"></button></a>
                                        <a href="arrange-testimonial.php"><button class="glyphicon glyphicon-sort pictuers"></button></a>
                                    </div>
                                </div>                            

                            </div>                        
                            <div style="padding-bottom: 10px" class="clearfix"></div>
                            <?php
                        }
                    }
                } else {
                    ?> 
                    <b>No Testimonials in the database.</b> 
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php
include './footer.php';
