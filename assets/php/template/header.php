<?php
	require('headerFunctions.php');
	
	if(isset($webpage_title)){
		$titleHTML = generateTitle($webpage_title);
	}else{
		$titleHTML = generateTitle();
	}
	
	if(isset($webpage_desctiption)){
		$descriptionHTML = generateDescription($webpage_desctiption);
	}else{
		$descriptionHTML = generateDescription();
	}
	
	if(isset($webpage_author)){
		$authorHTML = generateAuthor($webpage_author);
	}else{
		$authorHTML = generateAuthor();
	}
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo($titleHTML); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo($descriptionHTML); ?>">
    <meta name="author" content="<?php echo($authorHTML); ?>">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/fonts/fonts.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>

  <body>

  <div class="container">
	<div class="masthead">
      <div class="row-fluid">
       	<a href="http://www.hythewindowcleaning.co.uk" class="ir" id="mastheadlogo"><h3 class="muted">Hythe Window Cleaning</h3></a>
       	<div class="span4 pull-right" id="masthead-quote">
        	<p>CALL NOW FOR YOUR <span>FREE</span> QUOTE</p>
        	<p class="masthead-telephone">01234 567 890</p>
        </div>
      </div>
        <div class="navbar">
        <div class="navbar-inner">
          <div class="container">
            <ul class="nav">
              <li><a href="http://www.hythewindowcleaning.co.uk/">Home</a></li>
              <li><a href="http://www.hythewindowcleaning.co.uk/services">Services</a></li>
              <li><a href="http://www.hythewindowcleaning.co.uk/gallery">Gallery</a></li>
              <li><a href="http://www.hythewindowcleaning.co.uk/testimonials">Testimonials</a></li>
              <li><a href="http://www.hythewindowcleaning.co.uk/contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </div><!-- /.navbar -->
    </div>
    <!-- End of header -->
    <?php 
    echo("reched the end");
    ?>