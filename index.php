<?php
/**
 * file: index.php
 */
get_header();
?>

<!-- markup inspired by @url: https://www.w3schools.com/bootstrap/ -->
<div class="jumbotron text-center">
  <h1><?php bloginfo('name'); ?></h1>
  <p><?php bloginfo('description'); ?></p> 
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor..</p>
      <p>Ut enim ad..</p>
    </div>
    <div class="col-sm-4">

			<!-- loop start -->
				<?php get_template_part( "loop" ); ?>
			<!-- loop end -->

    </div>
    <div class="col-sm-4">
			<?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
