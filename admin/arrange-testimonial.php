<?php
include './header.php';

if (isset($_POST['save-date'])) {
    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;
        $sql = "UPDATE `testimonial` SET `sort` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new DB();
        $db->readQuery($sql);
    }
}

$testimonials = getAllActiveTestimonials();
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
                        Arrange Testimonial
                    </div>
                    <div class="panel-body">

                        <form method="post">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul id="sortable">

                                            <?php
                                            if (count($testimonials) > 0) {
                                                foreach ($testimonials as $key => $testimonial) {
                                                    ?>
                                                    <li class="ui-state-default">
                                                        
                                                        <div>                                                            
                                                            <div class="col-md-2 testim-pic">
                                                                <span class="number-class">(<?php echo $key + 1; ?>)</span>
                                                                <img src="../images/testimonial/<?php echo $testimonial['image_name'] ?>" width="150" class="boder-radius center-block"/>
                                                            </div>
                                                            <div class="col-md-10 testim-des">
                                                                <h4><?php echo $testimonial['name'] ?></h4>
                                                                <p><?php custom_echo($testimonial['description'], 250) ?></p>
                                                            </div>
                                                            <input type="hidden" name="sort[]"  value="<?php echo $testimonial["id"]; ?>" class="sort-input"/>
                                                        </div>                                                        
                                                        <div style="padding-bottom: 10px" class="clearfix"></div>
                                                        
                                                    </li>
                                                    <?php
                                                }
                                            } else {
                                                ?> 
                                                <b>No images in the database.</b> 
                                            <?php } ?> 
                                        </ul>  
                                        <div class="row">
                                            <div class="col-sm-12 text-center" style="margin-top: 19px;">
                                                <input type="submit" class="btn btn-info" id="btn-submit" value="Save Images" name="save-date">
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>        
        <div class="row" style="height: 20px;">            
        </div>
    </div>
</div>
<?php
include './footer.php';


