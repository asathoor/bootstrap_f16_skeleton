<?php
/**
 * file: category.php
 * Display list of posts in a category.	
 */
get_header();
?>

<div class="container-fluid">

		<aside class="col-sm-3">
			<h3>Recommended</h3>

			<?php	petj_display_post(4872); ?>

		</aside>

    <main class="col-sm-6">
			<!-- loop start -->

				<div id="catDescription">
					<h3><?php single_cat_title('Currently browsing '); ?></h3>
					<p>
						<?php echo category_description(); ?>
					</p>
				</div>	

				<ul>
				<?php 

				if ( have_posts() ) {

					while ( have_posts() ) {
						the_post(); 
						//
						?>

						<li class="categoryItem">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_title(); ?>
							</a>
						</li>

						<?php
						//
					} // end while
				} // end if
				?>
				</ul>
			<!-- loop end -->
    </main>

    <aside class="col-sm-3">
			<?php get_sidebar(); ?>
    </aside>

  </div><!-- row -->
</div><!-- .container -->

<?php get_footer(); ?>
