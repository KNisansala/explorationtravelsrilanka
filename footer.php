
<html><head></head><body>
        <div class="wrapper-footer wrapper-footer-newsletter">
            <div class="main-top-footer">
                <div class="container">
                    <div class="row">
                        <aside class="col-sm-3 widget_text"><h3 class="widget-title">CONTACT</h3>
                            <div class="textwidget">
                                <br>
                                <div class="footer-info">
                                    <p>Our Support team is available
                                       in 24 hours.
                                        </p>
                                    <br>
                                    <ul class="contact-info">
                                        <li><i class="fa fa-map-marker fa-fw"></i> Insight Guest House, Udupila, Mirissa
                                        </li>
                                        <li>

                                            <a href="tel:+94 71 244 5998">
                                                <i class="fa fa-phone fa-fw"></i> +94 71 244 5998</a></li>
                                        <li>
                                            <i class="fa fa-envelope fa-fw"></i><a href="srilankataximirissa@gmail.com"> srilankataximirissa@gmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                        <aside class="col-sm-3 widget_text"><h3 class="widget-title">Tour Package</h3>
                            <div class="textwidget">
                                <ul class="menu list-arrow">
                                    <?php
                                    $packages = AllPackages();
                                    foreach ($packages as $key => $package) {
                                        if ($key < 6) {
                                            ?>
                                            <li><a href="view-package.php?id=<?php echo $package['id']; ?>"><?php echo $package['title']; ?></a></li>
                                            <?php
                                        }
                                    }
                                    ?>

                                </ul>
                                <a href="tour_packages.php"><p style="font-size: 18px; font-weight: bold; font-family: monospace ;">More Tour packages</p></a>
                            </div>
                        </aside>
                        <aside class="col-sm-3 widget_text"><h3 class="widget-title">Our Menu</h3>
                            <div class="textwidget">
                                <ul class="menu list-arrow">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about_us.php">About us</a></li>
                                    <li><a href="activities.php">Activity</a></li>
                                    <li><a href="attractions.php">Attraction</a></li>
                                    <li><a href="offers.php">Offers</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="booking.php">Booking</a></li>
                                </ul>
                            </div>
                        </aside>
                        <aside class="col-sm-3 custom-instagram widget_text">
                            <h3 class="widget-title">Gallery</h3>
                            <div class="textwidget">
                                <ul>
                                    <?php
                                    $gallery = getAllImages();
                                    foreach ($gallery as $key => $gallery) {
                                        if ($key < 9) {
                                            ?>
                                            <a href="gallery.php"><li><img src="images/gallery/<?php echo $gallery["image_name"]; ?>" alt="instagram"></li></a>                     
                                            <?php
                                        }
                                    }
                                    ?> 
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="container wrapper-copyright">
                <div class="row">
                    <div class="col-sm-6">
                        <div><p>Copyright © Exploration Travel Sri Lanka | Web Site By: Sublime Holdings.</p></div>
                    </div>
                    <div class="col-sm-6">
                        <aside id="text-5" class="widget_text">
                            <div class="textwidget">
                                <ul class="footer_menu">
                                    <li><a href="#">Terms of Use</a></li>
                                    <li>|</li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li>|</li>
                                    <li><a href="https://twitter.com/physcode"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/physcode/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.instagram.com/physcode/"><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-subscribe" style="background-image: url(images/home/bg_newletter.jpg)">
            <div class="subscribe_shadow"></div>
            <div class="form-subscribe parallax-section stick-to-bottom form-subscribe-full-width">
                <div class="shortcode_title text-white title-center title-decoration-bottom-center margin-bottom-3x">
                    <div class="title_subtitle">To receive our best monthly deals</div>
                    <h3 class="title_primary">JOIN THE NEWSLETTER</h3>
                    <span class="line_after_title"></span>
                </div>
                <div class="form-subscribe-form-wrap">
                    <aside class="mailchimp-container">
                        <form class="epm-sign-up-form" name="epm-sign-up-form" action="#" method="post">
                            <div class="epm-form-field">
                                <label for="epm-email">Email Address</label>
                                <input type="email" placeholder="Email Address" name="epm-email" tabindex="8" class="email" id="epm-email" value="">
                            </div>


                            <input type="submit" name="epm-submit-chimp" value="Sign Up Now" data-wait-text="Please wait..." tabindex="10" class="button btn epm-sign-up-button epm-submit-chimp">
                        </form>
                    </aside>
                </div>
            </div>
        </div>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
            (function () {
                var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/599e8cef4fe3a1168ead9867/default';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->

<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106463644-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-106463644-1');
</script>


    </body>
</html>