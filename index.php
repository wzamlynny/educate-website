<?php $root = ""; ?>
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
     <title>Educate the Future : Home</title>

    <?php include('common/common-head.php'); ?>
 
  </head>
  <body>    

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <?php include('common/header.php'); ?>
    <!--=========== END HEADER SECTION ================--> 

    <!--=========== BEGIN SLIDER SECTION ================-->
    <section id="slider">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="slider_area">
            <!-- Start super slider -->
            <div id="slides">
              <ul class="slides-container">                          
                <li>
                  <img class="slides-image" src="img/slider/books-magazines-building-school.jpg" alt="img">
                   <div class="slider_caption">
                    <!--<img src="img/educate_logo.png"> </img>-->
                    <h2>Our Mission</h2>
                    <p><?php include($root . 'content/our-mission.txt'); ?></p>
                    <a class="slider_btn" href="aboutUs">Learn More</a>
                  </div>
                </li>

                <li>
                  <img class="slides-image" src="img/slider/tutors-bg.jpg" alt="img">
                  <a href="apply/tutors.php">
                    <img class="slides-image-text" src="img/slider/tutors-text.png">
                  </a>
                </li>

              </ul>
              <nav class="slides-navigation">
                <a href="#" class="next"></a>
                <a href="#" class="prev"></a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN ABOUT US SECTION ================-->
    <section id="aboutUs">
      <div class="container">
        <div class="row">
        <!-- Start about us area -->
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="aboutus_area wow fadeInLeft">
            <h2 class="title">About Us</h2>
            <p><?php include($root . 'content/about-us-short.txt'); ?></p>
            </br>
            <h4>Find us on Social Media</h4>
            <div class="address_group">
              <ul class="footer_social">
                <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="home-soc-icons soc_tooltip" href="https://www.facebook.com/EducatetheFutureNow/"><i class="fa fa-facebook"></i></a></li>
                <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="home-soc-icons soc_tooltip"  href="https://twitter.com/Edu_The_Future"><i class="fa fa-twitter"></i></a></li>
                <li><a data-toggle="tooltip" data-placement="top" title="Instagram" class="home-soc-icons soc_tooltip"  href="https://www.instagram.com/educatethefuture/?hl=en"><i class="fa fa-instagram"></i></a></li>
                </ul>
             </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="newsfeed_area wow fadeInRight">
            <ul class="nav nav-tabs feed_tabs" id="myTab2">
              <li class="active"><a href="#notice" data-toggle="tab">Notice</a></li>
              <li><a href="#news" data-toggle="tab">News</a></li>
              <li><a href="#events" data-toggle="tab">Events</a></li>         
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <!-- Start notice tab content -->
              <div class="tab-pane fade in active" id="notice">
              <!--<div class="single_notice_pane">-->
                <?php include('common/notice-tab-content.php'); ?>
              <!--</div>         -->
              </div>
              <!-- Start news tab content -->
              <div class="tab-pane fade" id="news"> 
                <?php include('common/news-tab-content.php'); ?>
              </div>
              <!-- Start events tab content -->
              <div class="tab-pane fade " id="events">
                <?php include('common/events-tab-content.php'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!--=========== END ABOUT US SECTION ================--> 

    <!--=========== BEGIN WHY US SECTION ================-->
    <section id="whyUs">
      

      <!--What happened here? -->
      <!-- Start why does it matter bottom -->
      <div class="row">        
        <div class="col-lg-12 col-sm-12">
          <div class="whyus_bottom">            
            <div class="slider_overlay"></div>
            <div class="container">
              <!-- Start Why does it matter top title -->
              <div class="row">
                <div class="col-lg-12 col-md-12"> 
                  <div class="title_area">
                    <h2 class="title_three">Why Does it Matter?</h2>
                    <span></span> 
                  </div>
                </div>
              </div>
              <!-- End Why does it matter top title -->        
              <div class="skills">                
                <!-- START SINGLE SKILL-->
                <div class="col-lg-3 col-md-3 col-sm-3">
                 <div class="single_skill wow fadeInUp">
                   <div id="myStat" data-dimension="150" data-text="" data-info="" data-width="10" data-fontsize="25" data-percent="60" data-fgcolor="#999" data-bgcolor="#fff"  ></div>
                    <h4>Of States Reduced Funding for Public Education (2008-2014)</h4>   
                  </div>
                </div>
                <!-- START SINGLE SKILL-->
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_skill wow fadeInUp">
                    <div id="myStathalf2" data-dimension="150" data-text="" data-info="" data-width="10" data-fontsize="25" data-percent="50" data-fgcolor="#999" data-bgcolor="#fff"  ></div>
                    <h4>Of States Provide Less</br>Funding per Student</br>Compared to 2008</h4>
                  </div>
                </div>
                <!-- START SINGLE SKILL-->
                <div class="col-lg-3 col-md-3 col-sm-3">                 
                  <div class="single_skill wow fadeInUp">
                    <div id="myStat2" data-dimension="150" data-text="" data-info="" data-width="10" data-fontsize="25" data-percent="46" data-fgcolor="#999" data-bgcolor="#fff" ></div>
                    <h4>Funding for K-12 Spending Comes</br>from State Funds</h4>
                  </div>
                </div>
                <!-- START SINGLE SKILL-->
                <div class="col-lg-3 col-md-3 col-sm-3">                 
                  <div class="single_skill wow fadeInUp">
                    <div id="myStat3" data-dimension="150" data-text="" data-info="" data-width="10" data-fontsize="25" data-percent="37" data-fgcolor="#999" data-bgcolor="#fff"  ></div>
                    <h4>Decrease of Capital Spending for K-12</br>(2008-2013)</h4>
                  </div>
                </div>
              </div>
            </div>            
          </div>
        </div>        
      </div>
      <!-- End why us bottom -->

      <!-- Start why us top -->
      <div class="row">        
        <div class="col-lg-12 col-sm-12">
          <div class="whyus_top">
            <div class="container">
              <!-- Why us top title -->
              <div class="row">
                <div class="col-lg-12 col-md-12"> 
                  <div class="title_area">
                    <h2 class="title_two">Why Us</h2>
                    <span></span> 
                  </div>
                </div>
              </div>
              <!-- End Why us top title -->
              <!-- Start Why us top content  -->
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <a href="aboutUs/free.php"> 
                    <div class="whyus_icon">
                      <span class="fa fa-dollar"></span>
                    </div>
                    </a>
                    <h3>100% Free</h3>
                    <!--<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>-->
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <a href="aboutUs/specialized.php"> 
                    <div class="whyus_icon">
                      <span class="fa fa-child"></span>
                    </div>
                    </a>
                    <h3>Specialized service</h3>
                    <!--<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>-->
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <a href="aboutUs/community.php"> 
                    <div class="whyus_icon">
                      <span class="fa fa-users"></span>
                    </div>
                    </a>
                    <h3>Community Oriented</h3>
                    <!--<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>-->
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <a href="aboutUs/success.php"> 
                    <div class="whyus_icon">
                      <span class="fa fa-graduation-cap"></span>
                    </div>
                    </a>
                    <h3>Passion for Success</h3>
                    <!--<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>-->
                  </div>
                </div>
              </div>
              <!-- End Why us top content  -->
            </div>
          </div>
        </div>        
      </div>
      <!-- End why us top -->

    </section>
    <!--=========== END WHY US SECTION ================-->

    <!--=========== BEGIN OUR TUTORS SECTION ================-->
    <section id="ourTutors">
      <div class="container">
       <!-- Our courses title -->
        <div class="row">
          <div class="col-lg-12 col-md-12"> 
            <div class="title_area">
              <h2 class="title_two">Meet the Team</h2>
              <span></span> 
            </div>
          </div>
        </div>
        <!-- End Our courses title -->

        <!-- Start Our courses content -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="ourTutors_content">
              <!-- Start Tutors nav -->
              <ul class="tutors_nav">
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/team/NunoPereira.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Nuno<br/>Pereira</h3>
                      <span>President</span>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/team/DevinLy.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Devin</br>Ly</h3>
                      <span>Vice President</span>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/team/NateWeiss.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Nate</br>Weiss</h3>
                      <span>Treasurer</span>
                    </div>
                  </div>
                </li>
                
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/team/WeronikaZamlynny.jpg" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Weronika</br>Zamlynny</h3>
                      <span>Web Developer</span>
                    </div>
                  </div>
                </li>                                      
              </ul>
            </div>
          </div>
        </div>
        <!-- End Our courses content -->
      </div>
    </section>
    <!--=========== END OUR TUTORS SECTION ================-->

    <!--=========== BEGIN FOOTER SECTION ================-->
    <?php include('common/footer.php'); ?>
    <!--=========== END FOOTER SECTION ================--> 

    <?php include('common/common-js.php'); ?>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->
  </body>
</html>