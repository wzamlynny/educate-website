<?php 
    if(!isset($root)) {
      // Root was not set in file that this was imported to, assume already at root
      $root = "";
    }
?>
<!-- Includes everything that is common between each page -->


<!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href=<?php echo "'" . $root . "img/favicon.png'"; ?> />

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href=<?php echo "'" . $root . "css/bootstrap.min.css'"; ?> rel="stylesheet">
    <!-- Font awesome css file-->
    <link href=<?php echo "'" . $root . "css/font-awesome.min.css'"; ?> rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href=<?php echo "'" . $root . "css/superslides.css'"; ?>>
    <!-- Slick slider css file -->
    <link href=<?php echo "'" . $root . "css/slick.css'"; ?> rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href=<?php echo "'" . $root . "css/animate.css'"; ?>> 
    <!-- preloader -->
    <link rel="stylesheet" href=<?php echo "'" . $root . "css/queryLoader.css'"; ?> type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href=<?php echo "'" . $root . "css/jquery.tosrus.all.css'"; ?> />    
    <!-- Default Theme css file -->
    <link id="switcher" href=<?php echo "'" . $root . "css/themes/lite-blue-theme.css'"; ?> rel="stylesheet">
    <!-- Main structure css file -->
    <link href=<?php echo "'" . $root . "style.css'"; ?> rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->