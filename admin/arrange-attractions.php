<?php
include './header.php';

if (isset($_POST['save-date'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;
        $sql = "UPDATE `attractions` SET `sort` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new DB();
        $db->readQuery($sql);
    }
}

$attractions = getAllAttractions();

?> 

 
<!-- MAIN SITE WRAPPER-->
<div class="content-wrapper">

    <!--container-->
    <div class="container">
        <!--banner-->
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Arrange Attractions </h1>
            </div>
        </div>
        <!--end banner-->


        <!--new image add form-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Arrange Activities
                    </div>
                    <div class="panel-body">

                        <form method="post">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul id="sortable">

                                            <?php
                                            if (count($attractions) > 0) {
                                                foreach ($attractions as $key => $attraction) {
                                                    ?>
                                                    <li class="ui-state-default">
                                                        <span class="number-class">(<?php echo $key + 1; ?>)</span>
                                                        <img width="300px" height="130" class="example-image img-responsive" src="../images/attractions/thumb/<?php echo $attraction["image_name"]; ?>" alt=""/>
                                                        <p style="width: 300px; padding: 3px 10px 0 10px" class="maxlinetitle"><?php echo $attraction["title"]; ?></p>
                                                        <input type="hidden" name="sort[]"  value="<?php echo $attraction["id"]; ?>" class="sort-input"/>

                                                    </li>


                                                    <?php
                                                }
                                            } else {
                                                ?> 
                                                <b>No Attraction in the database.</b> 
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
        <!--end new image add form--> 

    </div>
    <!--end container-->
</div>
<!--END MAIN SITE WRAPPER-->

<?php
include './footer.php';
