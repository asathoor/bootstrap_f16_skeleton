<?php
/**
 * file: post.php
 */
get_header();
?>
<!-- file: index.php -->

<div class="container">

    <main class="col-sm-8">
			<!-- loop start -->
				<?php get_template_part( "loop" ); ?>
			<!-- loop end -->
    </main>

    <aside class="col-sm-4">
			<?php get_sidebar(); ?>
    </aside>

  </div><!-- row -->
</div><!-- .container -->

<?php get_footer(); ?>