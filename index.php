<?php
/**
 * file: index.php
 */
get_header();
?>
<!-- file: index.php -->

<div class="container">

	<!-- first row: featured posts / pages -->
  <div class="row">

    <article class="col-sm-3">

			<?php hej_verden( 
				'Multimedia Tutorials!', 
				'Multimusen is a collection of 400+ articles and tutorials about multimedia, 
					and web programming. Here you\'ll find tips and tricks about: 
					HTML, CSS, JavaScript, PHP, MySQL, and WordPress.' 
			); // see: functions.php ?>

		</article>		


    <article class="col-sm-6">

			<h3>Feature Article:</h3>

			<?php petj_display_post( 1173 ); // see: functions.php ?>

		</article>

    <article class="col-sm-3">

			<h3>Feature Article:</h3>

			<?php petj_display_post( 1178 ); // see: functions.php ?>

		</article>

	</div><!-- row -->

	<div class="row">
		<div class="col-sm-12">
			<hr>
		</div>
	</div><!-- row -->




	<!-- second row -->
  <div class="row">
    <div class="col-sm-3">

			<!-- search form -->
			<p>
	    <?php get_search_form( ); ?>
			</p>


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
