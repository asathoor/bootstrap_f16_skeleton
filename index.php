<?php
/**
 * file: index.php
 */
get_header();
?>
<!-- file: index.php -->

<div class="container-fluid">

	<?php get_template_part( 'partials', 'carousel' ); ?>

  <div class="row">
    <div class="col-sm-3">
			<!-- search form -->
	    <?php get_search_form( ); ?>
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
