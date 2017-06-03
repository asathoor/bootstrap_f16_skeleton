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
				
		<style>
			#container {
				position: relative;
				width: 640px;
				margin-left: auto;
				margin-right: auto;			
			}
			
			.avatar {
			    border-radius: 50%;
			}	
		</style>
		
	</head>

		<body>
					
			<!-- Wagerfield's parallax layers -->
			<div id="container" class="container">
				<div id="scene" class="scene">
					<div class="layer" data-depth="0.09"><img src="<?php bloginfo('template_directory'); ?>/images/multimusen_prlx_layer05.png"></div>
					<div class="layer" data-depth="0.80"><img src="<?php bloginfo('template_directory'); ?>/images/multimusen_prlx_layer02.png"></div>
					<div class="layer" data-depth="0.60"><img src="<?php bloginfo('template_directory'); ?>/images/multimusen_prlx_layer03.png"></div>
					<div class="layer" data-depth="0.40"><img src="<?php bloginfo('template_directory'); ?>/images/multimusen_prlx_layer04.png"></div>
					<div class="layer" data-depth="0.10"><img src="<?php bloginfo('template_directory'); ?>/images/multimusen_prlx_layer02.png"></div>
					<div class="layer" data-depth="0.40"><img src="<?php bloginfo('template_directory'); ?>/images/multimusen_prlx_layer01.png"></div>
				</div>
			</div>

			<!-- content -->
			<div class="container-fluid">
			  <div class="row">
	
				<!-- about section -->		  
				<article class="col-sm-12 col-lg-4">
					<h1>Multimusen.dk</h1>
					<p>Wicked multimedia experiments and tutorials.</p>
					
				</article>

				<!-- search form -->
				<article class="col-sm-12 col-lg-4">
					<!-- avatar -->	
					<p><?php echo get_avatar(1,66); ?><br>
					By: Per Thykjaer Jensen</p>
					<blockquote class="small">Multimusen is <a href="https://wordpress.org/">powered by WordPress!</a> <br> 
					Theme: <a href="https://github.com/asathoor/bootstrap_f16_skeleton/tree/multimusen">Bootstrap-F16-Skeleton</a>.</blockquote>
				</article>
		
					<!-- new on multimusen -->	    
				    <article class="col-sm-12 col-lg-4">
			
						<h3><span class="glyphicon glyphicon-star" aria-hidden="true"></span> New on Multimusen!</h3>
			
						<ul id="newOnMultimusen">
						<?php
							$args = array( 'numberposts' => '5', 'tax_query' => array(
									array(
										'taxonomy' => 'post_format',
										'field' => 'slug',
										'terms' => 'post-format-aside',
										'operator' => 'NOT IN'
									), 
									array(
										'taxonomy' => 'post_format',
										'field' => 'slug',
										'terms' => 'post-format-image',
						 				'operator' => 'NOT IN'
									)
							) );
							$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent ){
								echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   ( __($recent["post_title"])).'</a> </li> ';
							}
							wp_reset_query();
						?>
						</ul>
					
					</article>
										
				</div><!-- /row -->
			</div><!-- /container-fluid -->

			<!-- Jquery -->
			<?php wp_enqueue_script("jquery"); ?>

			<!-- Scripts: Wagerfield's Parallax -->
			<script src="<?php bloginfo('template_directory'); ?>/bower_components/parallax/deploy/parallax.js"></script>
		
			<script>
				// enable Wagerfield's parallax	
				var scene = document.getElementById('scene');
				var parallax = new Parallax(scene);	
			</script>

			<!-- Google Analytics -->
			<script src="<?php bloginfo('template_directory'); ?>/js/petjGanalytics.js"></script>


			<?php wp_footer(); ?>
			
			
		</body>
</html>