
$(document).ready(function () {


    $('.delete-slider-image').click(function (e) {
        var r = confirm("Are you really want delete this picture?....");
        if (r) {
            window.location.replace("delete/slider-image.php?img=" + this.id);
        }
    });


    $('.delete-subsection').click(function (e) {
        var r = confirm("Are you really want delete this Subsection?....");
        if (r) {
            window.location.replace("delete/subsection.php?img=" + this.id);
        }
    });


    $('.delete-gallery').click(function (e) {
        var r = confirm("Are you really want delete this picture?....");
        if (r) {
            window.location.replace("delete/gallery.php?img=" + this.id);
        }
    });

    $('.delete-pack-photo').click(function (e) {
        var r = confirm("Are you really want delete this picture?....");
        if (r) {
            window.location.replace("delete/pack-photo.php?img=" + this.id);
        }
    });

 $('.delete-tour-date-photo').click(function (e) {
        var r = confirm("Are you really want delete this Details?....");
        if (r) {
            window.location.replace("delete/tour_date_photo.php?id=" + this.id);
        }
    });

    $('.delete-tour-date').click(function (e) {
        var r = confirm("Are you really want delete this picture?....");
        if (r) {
            window.location.replace("delete/tour_date.php?id=" + this.id);
            
        }
    });


    $('.delete-pack').click(function (e) {
        var r = confirm("Are you really want delete this Package?....");
        if (r) {
            window.location.replace("delete/tour_package.php?id=" + this.id);
        }
    });

    $('.delete-team').click(function (e) {
        var r = confirm("Are you really want delete this Team Member?....");
        if (r) {
            window.location.replace("delete/delete-team.php?img=" + this.id);
        }
    });


    $('.delete-attraction').click(function (e) {
        var r = confirm("Are you really want delete this Attraction?....");
        if (r) {
            window.location.replace("delete/attraction.php?id=" + this.id);
        }
    });

    $('.delete-attractions-photo').click(function (e) {
        var r = confirm("Are you really want delete this picture?....");
        if (r) {
            window.location.replace("delete/attractions-photo.php?img=" + this.id);
        }
    });

    $('.delete-activitie').click(function (e) {
        var r = confirm("Are you really want delete this Activitie?....");
        if (r) {
            window.location.replace("delete/activitie.php?id=" + this.id);
        }
    });

    $('.delete-activitie-photo').click(function (e) {
        var r = confirm("Are you really want delete this picture?....");
        if (r) {
            window.location.replace("delete/activitie-photo.php?img=" + this.id);
        }
    });
    
    $('.delete-offers').click(function (e) {
        var r = confirm("Are you really want delete this Activitie?....");
        if (r) {
            window.location.replace("delete/offers.php?id=" + this.id);
        }
    });
    
   
    
    $('.delete-testimonial').click(function (e) {
        var r = confirm("Are you really want delete this Testimonial?....");
        if (r) {
            window.location.replace("delete/testimonial.php?id=" + this.id);
        }
    });


});
 