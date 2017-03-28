<?php
/**
 * Primitive loop
 * See WP loop page, @url https://codex.wordpress.org/The_Loop
 */
if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif;
?>
 
