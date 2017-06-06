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
			<?php echo get_avatar(1,66); ?>
			<p>Per Thykjaer Jensen</p>
						
		</aside>

    <main class="col-sm-12 col-lg-6">
			<!-- loop start -->
				<?php get_template_part( "loopPage" ); ?>
			<!-- loop end -->
    </main>

    <aside class="col-sm-12 col-sm-3">
		<?php petj_one_mail( $domain, $email ); ?>
    </aside>

  </div><!-- row -->
</div><!-- .container -->

<?php get_footer(); ?>
