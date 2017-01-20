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
     <title>Educate the Future : Apply - Families</title>

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
      <h2>Apply - Families</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="application">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="title_area">
              <h2 class="title_two">Family Registration</h2>
              <span></span>
              <p>Thank you very much for contacting Educate the Future. Please take a moment to complete our Family Registration form so that we may tailor your experience to better serve your child. We look forward to working with your child and ensuring a brighter future!</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="application_form wow fadeInLeft">
            <form>
              <h3>Parental Guardian(s)</h3>
                <input type="text"  class="wp-form-control wpcf7-text" placeholder="First Name" name="firstName1"></input>
                <input type="text"  class="wp-form-control wpcf7-text" placeholder="LastName" name="lastName1"></input>
                </br>
                <input type="text"  class="wp-form-control wpcf7-text" placeholder="First Name" name="firstName2"></input>
                <input type="text"  class="wp-form-control wpcf7-text" placeholder="LastName" name="lastName2"></input>
                </br>

                <span>Address</span>
                <span>Street</span> <input type="text" name="streetAddress"></input>
                <span>City</span> <input type="text" name="cityAddress"></input>
                <span>State</span> 
                  <select name="stateAddress">
                    <option value="NJ">New Jersey</option>
                  </select>

                <span>Phone Number</span> <input type="text" name="phoneNumber"></input>
                <span>e-mail Address</span> <input type="text" name="email"></input>

              <h3>Student</h3>
            </form>
            </div>
          </div>
        <div>


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