<div id="home-page-slider-image" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <?php
        $sliderimg = getAllSlides();

        foreach ($sliderimg as $key => $slider) {
            if ($key == 0) {
                ?> 
                <div class="item active">
                    <img src="images/slider/<?php echo $slider["image_name"]; ?>" alt="Home Slider 1">
<!--                    <div class="carousel-caption content-slider">
                        <div class="container">
                            <h2><?php echo $slider['title']; ?></h2>
                            <p><?php echo $slider['description']; ?> </p>
                            <p><a href="tour_packages.php?id=<?php echo $slider['id']; ?>" class="btn btn-slider">VIEW TOURS </a></p>
                        </div>
                    </div>-->
                </div>
                <?php
            } else {
                ?> 
                <div class="item">
                    <img src="images/slider/<?php echo $slider["image_name"]; ?>" alt="Home Slider 1">
<!--                    <div class="carousel-caption content-slider">
                        <div class="container">
                            <h2><?php echo $slider['title']; ?></h2>
                            <p><?php echo $slider['description']; ?> </p>
                            <p><a href="tour_packages.php?id=<?php echo $slider['id']; ?>" class="btn btn-slider">VIEW TOURS </a></p>
                        </div>
                    </div>-->
                </div>
                <?php
            }
        }
        ?>

    </div>
    <!-- Controls -->
    <a class="carousel-control-left" href="#home-page-slider-image" data-slide="prev">
        <i class="lnr lnr-chevron-left"></i>
    </a>
    <a class="carousel-control-right" href="#home-page-slider-image" data-slide="next">
        <i class="lnr lnr-chevron-right"></i>
    </a>
</div>