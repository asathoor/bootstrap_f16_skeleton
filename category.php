<?php
/**
 * file: category.php
 * Display list of posts in a category.	
 */
get_header();
?>

<div class="container-fluid">

    <main class="col-sm-8">
			<!-- loop start -->
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

    <aside class="col-sm-4">
			<?php get_sidebar(); ?>
    </aside>

  </div><!-- row -->
</div><!-- .container -->

<?php get_footer(); ?>
