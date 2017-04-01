<?php
/**
 * file: index.php
 */
get_header();
?>
<!-- file: index.php -->

<div class="container">

	<!-- first row: featured posts / pages -->
  <div class="row">

    <article class="col-sm-3">

			<?php hej_verden( 
				get_bloginfo('name'),
				get_bloginfo('description') . '<p>Editor: Per Thykjaer Jensen</p>'
			); // see: functions.php ?>

		</article>		


    <article class="col-sm-6">

			<h3><span class="glyphicon glyphicon-tower" aria-hidden="true"></span> Feature: XAMPP</h3>

			<p>We've got lots of questions about Xampp. Here's a howto with some of the best videos about XAMPP from YouTube.</p>

			<?php petj_display_post( 1173 ); // see: functions.php ?>

		</article>

    <article class="col-sm-3">

			<h3><span class="glyphicon glyphicon-star" aria-hidden="true"></span> New on Multimusen!</h3>

			<ul>
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

	</div><!-- row -->

	<div class="row">
		<div class="col-sm-12 aligncenter">
			<hr>
		</div>
	</div><!-- row -->




	<!-- second row -->
  <div class="row">
    <div class="col-sm-3">

			<!-- search form -->
			<p>
	    <?php get_search_form( ); ?>
			</p>


  	</div>

    <main class="col-sm-6">
			<!-- loop start -->
				<?php get_template_part( "loop" ); ?>
			<!-- loop end -->
    </main>

    <aside class="col-sm-3">

			<?php get_sidebar(); ?>

    </aside>

  </div><!-- row -->
</div><!-- .container -->

<?php get_footer(); ?>
