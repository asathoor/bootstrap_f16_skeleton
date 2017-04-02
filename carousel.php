<?php
/**
 * File: carousel.php
 *
 * Purpose: Theme partial. Will add a carousel of images to the webpage.
 * Important: enqueue the carousel.css in functions.php.
 *
 */

// this function will create image markup
function carousel_image( $cimage ) {
	?>

	<div class="item">
		  <img src="<?php bloginfo('template_directory'); ?>/partials/carousel_images/<?php echo $cimage; ?>" alt="Carousel">
	</div>

	<?php
} // ends carousel_image()
?>

<!-- Bootstrap Carousel -->

		<div id="custom-bootstrap-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
				<ol class="carousel-indicators">
				    <li data-target="#custom-bootstrap-carousel" data-slide-to="0" class="active"></li>
				    <li data-target="#custom-bootstrap-carousel" data-slide-to="1"></li>
				    <li data-target="#custom-bootstrap-carousel" data-slide-to="2"></li>
				    <li data-target="#custom-bootstrap-carousel" data-slide-to="3"></li>
				    <li data-target="#custom-bootstrap-carousel" data-slide-to="4"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
				    <div class="item active">
				        <img src="<?php bloginfo('template_directory'); ?>/partials/carousel_images/0.JPG" alt="image1">
				    </div>

						<?php
							/**
							 * loop slides out here
							 */
							for ($i = 1; $i <= 4; $i++){
								carousel_image( '4-' . $i . '.JPG' ); // e.g. 1.jpg
							}
						?>

				</div><a class="left carousel-control" href="#custom-bootstrap-carousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control"
				href="#custom-bootstrap-carousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>
		</div><!-- carousel -->

