<?php
include './header.php';

if (isset($_POST['save-date'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;
        $sql = "UPDATE `gallery` SET `sort` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new DB();
        $db->readQuery($sql);
    }
}

$galleryPhotos = getAllImages();
?>
 
<!-- MAIN SITE WRAPPER-->
<div class="content-wrapper">

    <!--container-->
    <div class="container">
        <!--banner-->
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Arrange Gallery </h1>
            </div>
        </div>
        <!--end banner-->


        <!--slider sort--> 
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Arrange Gallery Image
                    </div>
                    <div class="panel-body">

                        <form method="post">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul id="sortable">

                                            <?php
                                            if (count($galleryPhotos) > 0) {
                                                foreach ($galleryPhotos as $key => $img) {
                                                    ?>
                                                    <li class="ui-state-default">
                                                        <span class="number-class">(<?php echo $key + 1; ?>)</span>
                                                        <img width="300px" height="130" class="example-image img-responsive" src="../images/gallery/thumb/<?php echo $img["image_name"]; ?>" alt=""/>
                                                        <input type="hidden" name="sort[]"  value="<?php echo $img["id"]; ?>" class="sort-input"/>

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
        <!--end slider sort--> 
        
       <div class="row" style="height: 20px;">
            
        </div>

    </div>
    <!--end container-->
</div>
<?php
include './footer.php';
 

 