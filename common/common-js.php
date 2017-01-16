<?php 
    if(!isset($root)) {
      // Root was not set in file that this was imported to, assume already at root
      $root = "";
    }
?>

<!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!--<script src=<?php echo "'" . $root . "js/jquery-3.1.1.min.js'"; ?> type="text/javascript"></script>-->
    <!-- Preloader js file -->
    <script src=<?php echo "'" . $root . "js/queryloader2.min.js'"; ?> type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src=<?php echo "'" . $root . "js/wow.min.js'"; ?>></script>  
    <!-- Bootstrap js -->
    <script src=<?php echo "'" . $root . "js/bootstrap.min.js'"; ?>></script>
    <!-- slick slider -->
    <script src=<?php echo "'" . $root . "js/slick.min.js'"; ?> ></script>
    <!-- superslides slider -->
    <script src=<?php echo "'" . $root . "js/jquery.easing.1.3.js'"; ?>></script>
    <script src=<?php echo "'" . $root . "js/jquery.animate-enhanced.min.js'"; ?>></script>
    <script src=<?php echo "'" . $root . "js/jquery.superslides.min.js'"; ?> type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src=<?php echo "'" . $root . "index.php'"; ?>"js/jquery.tosrus.min.all.js"></script>   
   
    <!-- Custom js-->
    <script src=<?php echo "'" . $root . "js/custom.js'"; ?>></script>

    <script src=<?php echo "'" . $root . "js/educate.js'"; ?>></script> 