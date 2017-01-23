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
     <title>Educate the Future : Apply - Staff</title>

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
      <h2>Apply - Staff </h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="application">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="title_area">
              <h2 class="title_two">Staff/Volunteer Application</h2>
              <span></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="application_form wow fadeInLeft">
            <form>
              <h3>Personal Information</h3>
                <input type="text" class="half wp-form-control wpcf7-text" placeholder="First Name" name="firstName"></input>
                <input type="text" class="half wp-form-control wpcf7-text" placeholder="Last Name" name="lastName"></input>
                
                <h4>Address</h4>
                  <input type="text" class="wp-form-control wpcf7-text" placeholder="Street" name="streetAddress"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="City" name="cityAddress"></input>
                  <select class="half wp-form-control wpcf7-text" name="stateAddress">
                    <option value="" disabled selected>State</option>
                    <option value="NJ">New Jersey</option>
                  </select>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Phone Number" name="phoneNumber"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="EMail Address" name="email"></input>
              
              <h3>Position</h3>
                <input type="text" class="wp-form-control wpcf7-text" placeholder="How did you learn about our organization?" name="howDidYouLearn"></input>

                <input type="text" class="third wp-form-control wpcf7-text" placeholder="Position Sought" name="position"></input>
                <input type="text" class="third wp-form-control wpcf7-text" placeholder="Available Start Data" name="startDate"></input>
                <input type="text" class="third wp-form-control wpcf7-text" placeholder="Are you currently Employed?" name="currentlyEmployed"></input>
                
              <h3>Education</h3>
                <h4>High School</h4>
                  <input type="text" class="third wp-form-control wpcf7-text" placeholder="Name" name="highschoolName"></input>
                  <input type="text" class="two-thirds wp-form-control wpcf7-text" placeholder="Location" name="highschoolLocation"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Degree" name="highschoolDegree"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Major / Subjects of Study" name="highschoolMajor"></input>

                <h4>College or University</h4>
                  <input type="text" class="third wp-form-control wpcf7-text" placeholder="Name" name="universityName"></input>
                  <input type="text" class="two-thirds wp-form-control wpcf7-text" placeholder="Location" name="universityLocation"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Degree" name="universityDegree"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Major / Subjects of Study" name="universityMajor"></input>

                <h4>Specialized Training, Trade School, ect...</h4>
                  <input type="text" class="third wp-form-control wpcf7-text" placeholder="Name" name="tradeschoolName"></input>
                  <input type="text" class="two-thirds wp-form-control wpcf7-text" placeholder="Location" name="tradeschoolLocation"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Degree" name="tradeschoolDegree"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Major / Subjects of Study" name="tradeschoolMajor"></input>

                <h4>Other Education</h4>
                  <input type="text" class="third wp-form-control wpcf7-text" placeholder="Name" name="otherName"></input>
                  <input type="text" class="two-thirds wp-form-control wpcf7-text" placeholder="Location" name="otherLocation"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Degree" name="otherDegree"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Major / Subjects of Study" name="otherMajor"></input>
                
                <h4>Please list your areas of highest proficiency, special skills or other items that may contribute to your abilities in performing the above mentioned position.</h4>
                <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="" name="skillsBox"></textarea>

              <h3>Previous Experience</h3>
                <h4>Employer 1</h4>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Dates Employed" name="datesEmployed1"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Company Name" name="companyName1"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Location" name="location1"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Role/Title" name="title1"></input>
                  <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="Job Notes, tasks performed, and reason for leaving." name="jobBox1"></textarea>

                <h4>Employer 2</h4>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Dates Employed" name="datesEmployed2"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Company Name" name="companyName2"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Location" name="location2"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Role/Title" name="title2"></input>
                  <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="Job Notes, tasks performed, and reason for leaving." name="jobBox2"></textarea>

              <h3>References</h3>
                <h4>Reference 1</h4>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Reference Name" name="reference1"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Company Name" name="refCompanyName1"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Location" name="refLocation1"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Relation to Applicant" name="relation1"></input>
                  
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Phone Number" name="refPhoneNumber1"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="EMail Address" name="refEmail1"></input>


                <h4>Reference 2</h4>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Reference Name" name="reference2"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Company Name" name="refCompanyName2"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Location" name="refLocation2"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Relation to Applicant" name="relation2"></input>

                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="Phone Number" name="refPhoneNumber2"></input>
                  <input type="text" class="half wp-form-control wpcf7-text" placeholder="EMail Address" name="refEmail2"></input>


              <h3>Disclaimer and Signature</h3>
                <p>I certify that my answers are true and complete to the best of my knowledge.</br>If this application leads to employment, I understand that false or misleading information in my application or interview may result in my release.</p>
                <input type="form" class="wp-form-control wpcf7-text" placeholder="Signature" name="signature"></input>

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