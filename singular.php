<?php
/**
 * file: singular.php
 */
get_header();
?>

<!-- file: singular.php -->

<div class="container-fluid">

    <main class="col-sm-8">
			<!-- loop start -->
				<?php get_template_part( "loopPage" ); ?>
			<!-- loop end -->
    </main>

    <aside class="col-sm-4">
			<?php get_sidebar(); ?>
    </aside>

  </div><!-- row -->
</div><!-- .container -->

<?php get_footer(); ?>
