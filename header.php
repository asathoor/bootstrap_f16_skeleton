<?php
/**
 * file: header.php
 */
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo('name'); ?></title>

		<meta http-equiv="content-type" content="text/html; charset=UTF-8">

		<!-- Bootstrap: responsive -->
		<meta name="viewport" content="width=device-width, initial-scale=1">


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
	<body <?php body_class(); ?>>
	
		<?php // get_template_part( "menu" ); ?>
	
		<!-- markup inspired by @url: https://www.w3schools.com/bootstrap/ -->
		<header class="jumbotron">
			<h1 class="h1 display-1 text-uppercase">
				<a href="/">
					<img src="<?php bloginfo('template_directory'); ?>/images/multimusen.png" 
						alt="speaker" 
						id="logoImage">
		
					<?php bloginfo('name'); ?>
				</a>
			</h1>
		</header>
	
		<!-- ends: header.php -->
