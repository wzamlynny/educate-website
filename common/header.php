<?php 
    if(!isset($root)) {
      // Root was not set in file that this was imported to, assume already at root
      //$root = dirname(dirname(__FILE__)) . '/' ;
      $root = "";
      //echo "<p>" . $root . "</p>";
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
            <!--<li class='active'><a href='index.php'>Home</a></li>-->
            <!--<li><a href=<?php echo "'" . $root . "index.php'"; ?>>Home</a></li>-->
            <li>
                <a href=<?php echo "'" . $root . "courses/course-archive.php'"; ?>>Courses</a>
            </li>

            <li>
              <a href=<?php echo "'" . $root . "scholarship'"; ?>'scholarship'>Scholarship</a>
            </li>

            <li>
              <a href=<?php echo "'" . $root . "events/events-archive.php'"; ?>>Events</a>
            </li>

            <li>
              <a href=<?php echo "'" . $root . "blog/blog-archive.php'"; ?>>Blog</a>
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

            <!--<li class='dropdown'>
              <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>Page<span class='caret'></span></a>
              <ul class='dropdown-menu' role='menu'>
                <li><a href=<?php echo "'" . $root . "404.php'"; ?>>404 Page</a></li>
                <li><a href='#'>Link Two</a></li>
                <li><a href='#'>Link Three</a></li>               
              </ul>
            </li>-->

            <li>
              <a href=<?php echo "'" . $root . "donate'"; ?>>Donate</a>
            </li>

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