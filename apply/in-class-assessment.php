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
     <title>Educate the Future : In Class Assessment</title>

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
      <h2>In Class Assessment</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="application">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="title_area">
              <h2 class="title_two">In Class Assessment</h2>
              <span></span>
              <p>Thank you for taking the time to complete the In-Class Assessment Form. Your input and expertise into the areas of difficulty for the student will provide our tutors with the needed information to refine each session. Please complete the requested information and return this form to the family requesting assistance, or to the indicated email at the bottom of the page.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="application_form wow fadeInLeft">
            <form>
              <h3>Parental Guardian(s)</h3>
                <h5>Guardian 1</h5>
                <input type="text" class="half wp-form-control wpcf7-text" placeholder="First Name" name="firstName1"></input>
                <input type="text" class="half wp-form-control wpcf7-text" placeholder="LastName" name="lastName1"></input>
                <!--</br>-->
                <h5>Guardian 2</h5>
                <input type="text" class="half wp-form-control wpcf7-text" placeholder="First Name" name="firstName2"></input>
                <input type="text" class="half wp-form-control wpcf7-text" placeholder="LastName" name="lastName2"></input>
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
              <h3>Student</h3>
                <input type="text" class="half wp-form-control wpcf7-text" placeholder="First Name" name="studentFirstName"></input>
                <input type="text" class="half wp-form-control wpcf7-text" placeholder="LastName" name="studentLastName"></input>
                <input type="text" class="third wp-form-control wpcf7-text" placeholder="Age" name="studentAge"></input>
                <input type="text" class="third wp-form-control wpcf7-text" placeholder="Grade" name="studentGrade"></input>
                <input type="text" class="third wp-form-control wpcf7-text" placeholder="Gender" name="studentGender"></input>
                
                <h4>Subject of Tutor</h4>
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
            
                <h4>Availibility for Tutoring</h4>
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
            
                </br></br></br></br></br>
                <h3>Please Deliver the In-Class Assessment Form to the Student's Teacher (1 per Subject)</h3>
                </br>

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