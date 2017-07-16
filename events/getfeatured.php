<?php $root = "../"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--=============================================== 
      Template Design By WpFreeware Team.
      Author URI : http://www.wpfreeware.com/
    ====================================================-->
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Educate the Future : Events</title>

    <?php include('../common/common-head.php'); ?>
  
  </head>
  <body>

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <?php include('../common/header.php'); ?>
    <!--=========== END HEADER SECTION ================--> 

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner">
      <h2>Events</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive">
      <div class="container">
        <div class="row">
          <!-- start course content -->
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="courseArchive_content">
              <!-- start blog archive  -->
              <div class="row">
                <!-- start single blog -->
                <div class="col-lg-12 col-12 col-sm-12">
                  <div class="single_blog">
                    
                    <h2 class="blog_title">Get Featured On Educate the Future!</h2>
                    <div class="blog_commentbox">
                      <p><i class="fa fa-user"></i>Nuno Pereira</p>
                      <p><i class="fa fa-calendar"></i>16 July 2017</p>
                      <!--<a href="#"><i class="fa fa-comments"></i>20 Comments</a>-->
                    </div>
                    <div class="blogimg_container">
                      <a href="#" class="blog_img">
                        <img alt="img" src="../img/events/getfeatured-20170716.jpg">
                      </a>
                    </div>
                     <h3>Event Details</h3> 

                      <!-- IMPORT BLOG CONTENT -->
                      <?php include($root . "content/events/getfeatured-20170716.html"); ?>
                  </div>
                  <!-- single blog nex & prev button -->
                  <div class="single_blog_prevnext">
                    <a class="prev_post wow fadeInLeft" href="call-20170701.php"><i class="fa fa-angle-left"></i>Previous Post</a>
                    <a class="next_post wow fadeInRight" href="call-20170722.php">Next Post<i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
                <!-- End single blog -->                
              </div>
              <!-- end blog archive  -->    
            </div>
          </div>
          <!-- End course content -->

          <!-- start  sidebar -->
          <?php include('../common/events-sidebar.php'); ?>
          <!-- end sidebar -->
        </div>
      </div>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN FOOTER SECTION ================-->
    <?php include('../common/footer.php'); ?>
    <!--=========== END FOOTER SECTION ================--> 

    <?php include('../common/common-js.php'); ?>

  <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
  ====================================================-->
  
  </body>
</html>