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
     <title>Educate the Future : Apply - Tutors</title>

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
      <h2>Apply - Tutors</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
        <section id="application">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="title_area">
              <h2 class="title_two">Volunteer Tutor Registration</h2>
              <span></span>
              <p>Thank you very much for contacting Educate the Future. Please take a moment to complete our Volunteer Tutor Registration form so that we may accurately assign you to a family in need near you. We look forward to working together to ensure a bright future for all children!</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="application_form wow fadeInLeft">
            <form>
              <h3>Tutor Basic Information</h3>
                <input type="text" class="half wp-form-control wpcf7-text" placeholder="First Name" name="tutorFirstName"></input>
                <input type="text" class="half wp-form-control wpcf7-text" placeholder="Last Name" name="tutorLastName"></input>
                <!--</br>-->

                <h4>Address</h4>
                  <input type="text" class="wp-form-control wpcf7-text" placeholder="Street" name="streetAddress"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="City" name="cityAddress"></input>
                  <select class="half wp-form-control wpcf7-text" name="stateAddress">
                    <option value="" disabled selected>State</option>
                    <option value="NJ">New Jersey</option>
                  </select>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Phone Number" name="phoneNumber"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="EMail Address" name="email"></input>

                <input type="text" class="third wp-form-control wpcf7-text" placeholder="Age" name="studentAge"></input>
                <input type="text" class="third wp-form-control wpcf7-text" placeholder="Grade" name="studentGrade"></input>
                <input type="text" class="third wp-form-control wpcf7-text" placeholder="Gender" name="studentGender"></input>
                
                <h3>Subjects to Tutor</h3>
                <div class="checkbox"> 
                  <input type="checkbox" name="subject" value="math"> Mathematics</input>
                </div>
                  <input type="form" class="two-thirds wp-form-control wpcf7-text" placeholder="Specify" name="mathDetails"></input>
                <div class="checkbox">
                  <input type="checkbox" name="subject" value="english"> English</input>
                </div>
                  <input type="form" class="two-thirds wp-form-control wpcf7-text" placeholder="Specify" name="englishDetails"></input>
                <div class="checkbox">
                  <input type="checkbox" name="subject" value="history"> History</input>
                </div>
                  <input type="form" class="two-thirds wp-form-control wpcf7-text" placeholder="Specify" name="historyDetails"></input>                
                <div class="checkbox">
                  <input type="checkbox" name="subject" value="spanish"> Spanish</input>
                </div>
                  <input type="form" class="two-thirds wp-form-control wpcf7-text" placeholder="Specify" name="spanishDetails"></input>               
                <div class="checkbox">
                  <input type="checkbox" name="subject" value="other"> Other</input>
                </div>
                  <input type="form" class="two-thirds wp-form-control wpcf7-text" placeholder="Specify" name="otherDetails"></input>                
            
                <h3>Availibility for Tutoring</h3>
                <div class="checkbox"> 
                  <input type="checkbox" name="day" value="monday"> Monday</input>
                </div>
                  <input type="form" class="two-thirds wp-form-control wpcf7-text" placeholder="Hours" name="mondayDetails"></input>
                <div class="checkbox">
                  <input type="checkbox" name="day" value="tuesday"> Tuesday</input>
                </div>
                  <input type="form" class="two-thirds wp-form-control wpcf7-text" placeholder="Hours" name="tuesdayDetails"></input>
                <div class="checkbox">
                  <input type="checkbox" name="day" value="wednesday"> Wednesday</input>
                </div>
                  <input type="form" class="two-thirds wp-form-control wpcf7-text" placeholder="Hours" name="wednesdayDetails"></input>                
                <div class="checkbox">
                  <input type="checkbox" name="day" value="thursday"> Thursday</input>
                </div>
                  <input type="form" class="two-thirds wp-form-control wpcf7-text" placeholder="Hours" name="thurdsayDetails"></input>               
                <div class="checkbox">
                  <input type="checkbox" name="day" value="friday"> Friday</input>
                </div>
                  <input type="form" class="two-thirds wp-form-control wpcf7-text" placeholder="Hours" name="fridayDetails"></input>   
                <div class="checkbox">
                  <input type="checkbox" name="day" value="saturday"> Saturday</input>
                </div>
                  <input type="form" class="two-thirds wp-form-control wpcf7-text" placeholder="Hours" name="saturdayDetails"></input>
                <div class="checkbox">
                  <input type="checkbox" name="day" value="sunday"> Sunday</input>
                </div>
                  <input type="form" class="two-thirds wp-form-control wpcf7-text" placeholder="Hours" name="sundayDetails"></input>
            
                <h3>Expected Time Committment</h3>
                <div class="checkbox-small">
                  <input type="checkbox" name="timeCommitment" value="1month"> 1 Month</input>
                </div>
                <div class="checkbox-small">
                  <input type="checkbox" name="timeCommitment" value="2month"> 2 Months</input>
                </div>
                <div class="checkbox-small">
                  <input type="checkbox" name="timeCommitment" value="3month"> 3 Months</input>
                </div>
                <div class="checkbox-small">
                  <input type="checkbox" name="timeCommitment" value="summerBreak"> Summer Break</input>
                </div>
                <div class="checkbox-small">
                  <input type="checkbox" name="timeCommitment" value="Other"> Other</input>
                </div>
                <input type="form" class="three-quarters wp-form-control wpcf7-text" placeholder="Specify" name="timeDetails"></input>

                </br>
                <p>We at Educate the Future strive to provide free high quality educational opportunities to all families in need. In the space provided below, please let us know what about our mission has attracted you to assisting in our goal.</p>
                
                <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder=""></textarea>

                <input type="checkbox" name="agreement" value="accept">
                  I allow the review panel of Educate the Future to perform a background check. I recognize the purpose of this check is to ensure the safety for the children of families, and denying this check will result in an incomplete registration form.
                  </br>
                </input>

                <input type="form" class="wp-form-control wpcf7-text" placeholder="Signature of Tutor" name="signature"></input>
                <input type="form" class="wp-form-control wpcf7-text" placeholder="Full Name of Legal Guardian (if under 18)" name="legalGuardian"></input>

                <input type="submit" class="wpcf7-submit"></input>
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