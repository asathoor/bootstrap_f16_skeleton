<?php
/**
 * file: single.php
 */
get_header();
?>
<!-- file: index.php -->

<div class="container-fluid">

		<aside class="col-sm-12 col-md-2 col-lg-3">
			&nbsp;
		</aside>

    <main class="col-sm-12 col-md-8 col-lg-6">
			<!-- loop start -->
				<?php get_template_part( "loopPage" ); ?>
			<!-- loop end -->
    </main>

    <aside class="col-sm-12 col-md-2 col-lg-3">
			&nbsp;
    </aside>

  </div><!-- row -->
</div><!-- .container -->

<?php get_footer(); ?>
