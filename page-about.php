<?php
/**
 * file: single.php
 */
get_header();
?>
<!-- file: index.php -->

<div class="container-fluid">

		<aside class="col-sm-12 col-lg-3">
		<!-- site description -->
			<?php hej_verden( 
				get_bloginfo('name'),
				get_bloginfo('description')
			); // see: functions.php ?>

			<!-- avatar -->
			<p><?php echo get_avatar(1,66); ?><br>
			Editor: Per Thykjaer Jensen</p>
				
			<hr>			
		</aside>

    <main class="col-sm-12 col-lg-6">
			<!-- loop start -->
				<?php get_template_part( "loopPage" ); ?>
			<!-- loop end -->
    </main>

    <aside class="col-sm-12 col-sm-3">
			<?php petj_display_post( 1263, 'hand-right'); // CV ?>
			<?php petj_display_post( 5347, 'hand-right'); // Dannebrog ?>
			<?php petj_display_post( 4853, 'hand-right'); // Comp. CMS art. ?>
			</hr>
    </aside>

  </div><!-- row -->
</div><!-- .container -->

<?php get_footer(); ?>
