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
     <title>Educate the Future : Contact</title>

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
      <h2>Contact</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN CONTACT SECTION ================-->
    <section id="contact">
      <div class="container">
       <div class="row">
          <div class="col-lg-12 col-md-12"> 
            <div class="title_area">
              <h2 class="title_two">Contact Educate the Future</h2>
              <span></span> 
              <p>Thank you for your interest in Educate the Future. Please take a moment to fill out our contact form, and we will do our best to get back to you as soon as possible.</p>
            </div>
          </div>
       </div>
       <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-8">
           <div class="contact_form wow fadeInLeft">
              <form action="submitted.php" method="post" class="submitphoto_form">
                <input type="text" name="name" class="wp-form-control wpcf7-text" placeholder="Your name">
                <input type="mail" name="email" class="wp-form-control wpcf7-email" placeholder="Email address">          
                <input type="text" name="subject" class="wp-form-control wpcf7-text" placeholder="Subject">
                <textarea name="message" maxlength="4096" class="wp-form-control wpcf7-textarea"  cols="30" rows="10" placeholder="What would you like to tell us"></textarea>
                <input type="submit" value="Submit" class="wpcf7-submit">
              </form>
           </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-4">
           <div class="contact_address wow fadeInRight">
             <h3>Address</h3>
             <div class="address_group">
               <p>Hillside, NJ 07205​</p>
               <p>Phone: (908)967-3058</p>
               <p>Email: <a href:"mailto:educatethefuturenow@gmail.com">educatethefuturenow@gmail.com</a></p>
             </div>
             <div class="address_group">
              <ul class="footer_social">
                <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="https://www.facebook.com/Freetutoringnow/"><i class="fa fa-facebook"></i></a></li>
                <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="https://twitter.com/Edu_The_Future"><i class="fa fa-twitter"></i></a></li>
                <li><a data-toggle="tooltip" data-placement="top" title="Instagram" class="soc_tooltip"  href="https://www.instagram.com/educatethefuture/?hl=en"><i class="fa fa-instagram"></i></a></li>
                </ul>
             </div>
           </div>
         </div>
         
         <div class="col-lg-4 col-md-4 col-sm-4">
            <iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24201.03431832766!2d-74.24669904614339!3d40.69315011654921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3ad37bcec46dd%3A0x53285b0f966ec6b3!2sHillside%2C+NJ!5e0!3m2!1sen!2sus!4v1464581202757"></iframe>
         </div>

       </div>
      </div>
    </section>
    <!--=========== END CONTACT SECTION ================-->

    <!--=========== BEGIN GOOGLE MAP SECTION ================-->
    <section id="googleMap">
        
    </section>
    <!--=========== END GOOGLE MAP SECTION ================-->
    
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