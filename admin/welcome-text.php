<?php
include './header.php';

$success = NULL;
$error = NULL; 

if (isset($_POST['save-data'])) {

    $editWelcomeNote = updateWelcomeNote($_POST);

    if ($editWelcomeNote) {
        $success = 'Success Updated Welcome Note';
    } else {
        $reer = 'oops';
    }
}

$welcome = getWelcomeNote();

?>

<!-- MAIN SITE WRAPPER-->
<div class="content-wrapper">

    <!--container-->
    <div class="container">
        <!--banner-->
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Welcome Note </h1>
            </div>
        </div>
        <!--end banner-->


        <!--new image add form-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Welcome Note
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
                                <label for="imageTitle">Title</label>
                                <input type="text" name="title" class="form-control" value="<?php echo $welcome['title'];  ?>" id="exampleInputEmail1" placeholder="Enter Image Title" />
                            </div> 

                            <div class="form-group">
                                <label for="url">URL</label>
                                <input type="text" name="url" class="form-control" value="<?php echo $welcome['url'];  ?>" id="exampleInputEmail1" placeholder="Enter URl" />
                            </div> 

                            <div class="form-group">
                                <label for="description" >Description: </label>                                 
                                <textarea name="description" class="form-control" rows="5" required="TRUE"><?php echo $welcome['description'];  ?></textarea> 

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
