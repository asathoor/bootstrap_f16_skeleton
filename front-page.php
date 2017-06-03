<?php
/**
 * file: front-page.php 
 * purpose: costum front page
 **/
?>

<!DOCTYPE html>
<html>

	<head>
			
		<?php wp_head(); ?>
		
		<!-- Behavioral Meta Data -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		
		<style>
			#container {
				position: relative;
				width: 640px;
				margin-left: auto;
				margin-right: auto;			
			}		
		</style>
		
		
	</head>

		<body>
		
			<!-- markup inspired by @url: https://www.w3schools.com/bootstrap/ -->
			<header class="jumbotron">
			<a href="/">
				<img src="<?php bloginfo('template_directory'); ?>/images/multimusen.png" 
						alt="speaker" 
						id="logoImage">
		
				<h1><?php bloginfo('name'); ?></h1>
			</a>	
			</header>

		
			<!-- Wagerfield's parallax -->
			<div id="container" class="container">
				<div id="scene" class="scene">
					<div class="layer" data-depth="1.00"><img src="<?php bloginfo('template_directory'); ?>/images/layer1.png"></div>
					<div class="layer" data-depth="0.80"><img src="<?php bloginfo('template_directory'); ?>/images/layer2.png"></div>
					<div class="layer" data-depth="0.60"><img src="<?php bloginfo('template_directory'); ?>/images/layer3.png"></div>
					<div class="layer" data-depth="0.40"><img src="<?php bloginfo('template_directory'); ?>/images/layer4.png"></div>
					<div class="layer" data-depth="0.20"><img src="<?php bloginfo('template_directory'); ?>/images/layer5.png"></div>
					<div class="layer" data-depth="0.00"><img src="<?php bloginfo('template_directory'); ?>/images/layer6.png"></div>
				</div>
			</div>
			
			<footer class="footer">
			   <div class="container">
			     <span class="text-muted">&copy; Multimusen.dk</span>
			   </div>
    		</footer>

			<!-- Jquery -->
			<?php wp_enqueue_script("jquery"); ?>

			<!-- Scripts: Wagerfield's Parallax -->
			<script src="<?php bloginfo('template_directory'); ?>/bower_components/parallax/deploy/parallax.js"></script>
		
			<script>	
				// Pretty simple huh?
				var scene = document.getElementById('scene');
				var parallax = new Parallax(scene);	
			</script>

			<?php wp_footer(); ?>		
		</body>
</html>