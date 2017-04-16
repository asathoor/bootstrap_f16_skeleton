<?php
/**
 * Costum Loop
 * See WP loop page, @url https://codex.wordpress.org/The_Loop
 */
?>
<!-- Start the Loop. @url: https://codex.wordpress.org/The_Loop -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 
 	<div class="post">

 	<!-- Display the Title as a link to the Post's permalink. -->

 	<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>


 	<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

 	<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>


 	<!-- Display the Post's content in a div box. -->

 	<div class="entry">
 		<?php the_content(); ?>
 	</div>


 	<!-- Display a comma separated list of the Post's Categories. -->

	<hr>
 	</div> <!-- closes the first div box -->


 	<!-- Stop The Loop (but note the "else:" - see next line). -->

 <?php endwhile; else : ?>


 	<!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->
 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>
