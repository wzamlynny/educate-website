<?php 
    if(!isset($root)) {
      // Root was not set in file that this was imported to, assume already at root
      $root = "";
    }
?>
<header id='header'>
  <!-- BEGIN MENU -->
  <div class='menu_area'>
    <nav class='navbar navbar-default navbar-fixed-top' role='navigation'>  <div class='container'>
        <div class='navbar-header'>
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
            <span class='sr-only'>Toggle navigation</span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>
          <!-- LOGO -->
          <!-- IMG BASED LOGO  -->
          <a class='navbar-brand' href=<?php echo "'" . $root . "index.php'"; ?> >
            <img class='logo-wrapper' src= <?php echo "'" . $root . "img/educate_logo_v3.png'"; ?> alt='logo'>
          </a>
          <!-- TEXT BASED LOGO -->
          <a class='navbar-brand' href=<?php echo "'" . $root . "index.php'"; ?> >Educate the <span>Future</span></a>              
          
                  
        </div>
        <div id='navbar' class='navbar-collapse collapse'>
          <ul id='top-menu' class='nav navbar-nav navbar-right main-nav'>

            <li>
                <a href=<?php echo "'" . $root . "aboutUs'"; ?>>About Us</a>
            </li>

            <li class='dropdown'>
            <!-- LINK ON LOCATIONS - Disabled is not mobile friendly TODO -->
              <a href=<?php echo "'" . $root . "apply'"; ?> class='dropdown-toggle disabled' data-toggle='dropdown' role='button' aria-expanded='false'>Apply<span class='caret'></span></a>
              <ul class='dropdown-menu' role='menu'>
                <li><a href=<?php echo "'" . $root . "apply/families.php'"; ?> >Families</a></li>
                <li><a href=<?php echo "'" . $root . "apply/tutors.php'"; ?> >Tutors</a></li>
                <li><a href=<?php echo "'" . $root . "apply/staff.php'"; ?> >Staff</a></li>               
                <li><a href=<?php echo "'" . $root . "apply/forms.php'"; ?> >Forms</a></li>               
              </ul>
            </li>

            <li>
                <a href=<?php echo "'" . $root . "tutors'"; ?>>Meet our Tutors</a>
            </li>            

            <li class='dropdown'>
            <!-- LINK ON LOCATIONS - Disabled is not mobile friendly TODO -->
              <a href=<?php echo "'" . $root . "locations'"; ?> class='dropdown-toggle disabled' data-toggle='dropdown' role='button' aria-expanded='false'>Locations<span class='caret'></span></a>
              <ul class='dropdown-menu' role='menu'>
                <li><a href=<?php echo "'" . $root . "locations/hillside.php'"; ?> >Hillside, NJ</a></li>
                <li><a href=<?php echo "'" . $root . "locations/elizabeth.php'"; ?> >Elizabeth, NJ</a></li>
                <li><a href=<?php echo "'" . $root . "locations/union.php'"; ?> >Union, NJ</a></li>               
              </ul>
            </li>

            <li>
              <a href=<?php echo "'" . $root . "blog/blog-archive.php'"; ?>>Blog</a>
            </li>

            <!--<li>
              <a href=<?php echo "'" . $root . "donate'"; ?>>Donate</a>
            </li>-->

            <li>
              <a href=<?php echo "'" . $root . "contact'"; ?>>Contact</a>
            </li>

          </ul>           
        </div><!--/.nav-collapse -->
      </div>     
    </nav>  
  </div>
  <!-- END MENU -->    
</header>