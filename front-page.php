<?php
/**
 * file: front-page.php
 */
get_header();
?>
<!-- file: front-page.php -->

<div class="container-fluid">

  <div class="row">

    <article class="col-sm-12 col-lg-3">

			<?php //echo $f->petj_hello; // php class: property ?>
			<?php //echo $f->petj_hi( 'James Bond'  ); // php class: method ?>

			<!-- new on multimusen -->
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

			<hr>


		<!-- site description -->
			<?php hej_verden( 
				get_bloginfo('name'),
				get_bloginfo('description')
			); // see: functions.php ?>


		<!-- avatar -->

				<p><?php echo get_avatar(1,66); ?><br>
				Editor: Per Thykjaer Jensen</p>
				
				<hr>


	</article>

    <article class="col-sm-12 col-lg-6">

			<h3> Are Carousels Still Cool? </h3>
			<?php get_template_part( 'carousel' ); // Bootstrap carousel ?>

		</article>

    <article class="col-sm-12 col-lg-3">

			<!-- Feature -->
			<h3> Selected Articles </h3>
			<?php petj_display_post( 5347, 'hand-right'); ?>
			<?php petj_display_post( 5459, 'hand-right' ); // see: functions.php ?>
			<?php petj_display_post( 4880, 'hand-right'); ?>
			<?php petj_display_post( 5205, 'hand-right'); // links ?>
			<hr>

			<!-- search form -->
			<?php //get_search_form( ); ?>
		
		</article>

	</div><!-- row -->

</div><!-- .container -->

<?php get_footer(); ?>
