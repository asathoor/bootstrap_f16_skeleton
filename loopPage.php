<?php
/**
 * Costum Loop
 * See WP loop page, @url https://codex.wordpress.org/The_Loop
 */
?>
<!-- file: loopPage.php -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
 	<div class="post">
		<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

		<div class="date"><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></div>
		
	 	<div class="entry">
	 		<?php the_content(); ?>
	 	</div>

 	</div> <!-- closes the first div box -->

 <?php endwhile; else : ?>

 	<p><?php _e( 'I\'ve got nothing to display ...' ); ?></p>

 <?php endif; ?>
<!-- end: loopPage.php -->