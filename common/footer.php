<?php 
    if(!isset($root)) {
      // Root was not set in file that this was imported to, assume already at root
      $root = "";
    }
?>
<footer id="footer">
    <!-- Start footer top area -->
    <div class="footer_top">
    <div class="container">
        <div class="row">
        <div class="col-ld-3  col-md-3 col-sm-3">
            <div class="single_footer_widget">
            <h3>Our Mission</h3>
            <p>Educate the Future strives to provide free, quality, educational opportunities to children of low-income families in need.</p>
            </div>
        </div>
        <div class="col-ld-3  col-md-3 col-sm-3">
            <div class="single_footer_widget">
            <h3>Community</h3>
            <ul class="footer_widget_nav">
                <li><a href=<?php echo "'" . $root . "aboutUs/our-team.php'"; ?>>Our Team</a></li>
                <li><a href=<?php echo "'" . $root . "tutors'"; ?>>Our Tutors</a></li>
                <li><a href=<?php echo "'" . $root . "blog/blog-archive.php'"; ?>>Blog</a></li>
                <li><a href="#">News &amp; Media</a></li>
            </ul>
            </div>
        </div>
        <div class="col-ld-3  col-md-3 col-sm-3">
            <div class="single_footer_widget">
            <h3>Others</h3>
            <ul class="footer_widget_nav">
                <li><a href=<?php echo "'" . $root . "apply/tutors.php'"; ?>>Tutor Application</a></li>
                <!--<li><a href="#">Calendar</a></li>-->
                <li><a href=<?php echo "'" . $root . "contact'"; ?>>Contact Us</a></li>
            </ul>
            </div>
        </div>
        <div class="col-ld-3  col-md-3 col-sm-3">
            <div class="single_footer_widget">
            <h3>Follow Us</h3>
            <ul class="footer_social">
                <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="https://www.facebook.com/Freetutoringnow/"><i class="fa fa-facebook"></i></a></li>
                <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="https://twitter.com/Edu_The_Future"><i class="fa fa-twitter"></i></a></li>
                <li><a data-toggle="tooltip" data-placement="top" title="Instagram" class="soc_tooltip"  href="https://www.instagram.com/educatethefuture/?hl=en"><i class="fa fa-instagram"></i></a></li>
                <!--<li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus"></i></a></li>-->
                <!--<li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip"  href="#"><i class="fa fa-linkedin"></i></a></li>-->
                <!--<li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="#"><i class="fa fa-youtube"></i></a></li>-->
            </ul>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- End footer top area -->

    <!-- Start footer bottom area -->
    <!--<div class="footer_bottom">
    <div class="container">
        <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="footer_bootomLeft">
            <p> &copy; Copyright <a href="http://wpfreeware.com/">Wpfreeware.</a> All Rights Reserved</p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="footer_bootomRight">
            <p>Design & Developed by <a href="http://wpfreeware.com/">Wpfreeware.com</a></p>
            </div>
        </div>
        </div>
    </div>
    </div>-->
    <!-- End footer bottom area -->
</footer>