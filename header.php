<?php
/**
 * file: header.php
 */
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Bootstrap theme</title>

		<meta http-equiv="content-type" content="text/html; charset=UTF-8">

		<!-- Latest compiled and minified Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- jquery (load this before the bootstrap js -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
		<?php wp_head(); // hook ?>

	</head>
<body>

<!-- Hardcoded bootstrap menu, @url: http://bootstrapdesigntools.com/tools/bootstrap-menu-builder/## -->
<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-left">
                <li>
									<a href="<?php bloginfo('url'); ?>">
										<span class="glyphicon glyphicon-home" aria-hidden="true"></span> 
										 Home</a>
                </li>
                <li>
									<a href="<?php bloginfo('url'); ?>/1md14y1-intro-day-2-xampp/">
										<span class="glyphicon glyphicon-ice-lolly-tasted" aria-hidden="true"></span> 
									 	Xampp Intro</a>
                </li>
                <li>
									<a href="<?php bloginfo('url'); ?>/about/">
										<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> 
										 About</a>
                </li>
                <li>
									<a href="<?php bloginfo('url'); ?>/sitemap/">
										<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 
										 Sitemap</a>
                </li>
            </ul>
        </div>
    </div>
</div><!-- ends bootstrap menu -->


<!-- markup inspired by @url: https://www.w3schools.com/bootstrap/ -->
<header class="jumbotron">

	<a href="/">
		<img 
					src="<?php bloginfo('template_directory'); ?>/images/multimusen.png" 
					alt="speaker" 
					id="logoImage">


  <h1><?php bloginfo('name'); ?></h1>

	</a>

</header>



<!-- ends: header.php -->
