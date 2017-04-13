<?php get_header(); ?>

<div class="container-fluid">

	<?php get_template_part( 'partials', 'carousel' ); ?>

  <div class="row">
    <div class="col-sm-3">

			<!-- left widget area -->
			<?php if ( is_active_sidebar( 'index_widget_1' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'index_widget_1' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>
			<!-- end widget area -->

			<!-- search form -->
	    <?php get_search_form( ); ?>

  	</div>

    <main class="col-sm-6">

			<h2> <?php _e('Ooops!'); ?> </h2>
			<p> <?php _e('I could not find whatever you\'re looking for.'); ?> </p>

    </main>

    <aside class="col-sm-3">
			<?php get_sidebar(); ?>
    </aside>

  </div><!-- row -->
</div><!-- .container -->

<?php get_footer(); ?>
