<?php
/**
 * file: single.php
 */
get_header();
?>
<!-- file: index.php -->

<div class="container-fluid">

    <main class="col-sm-8">

		
				<?php echo get_avatar(1,66); ?><br><br>

				<?php hej_verden( 
					'Email',
					'Fill in the form if you want to send me an email.'
				); // see: functions.php ?>


				<!-- mail -->
				<?php petj_one_mail( 'multimusen.dk', 'per@multimusen.dk' ); ?>

    </main>

    <aside class="col-sm-4">
			<?php get_sidebar(); ?>
    </aside>

  </div><!-- row -->
</div><!-- .container -->

<?php get_footer(); ?>
