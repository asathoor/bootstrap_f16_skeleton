<?php
/**
 * file: carousel.php ( partial )
 * purpose: add carousel images to the webpage.
 */
function carousel_image( $cimage ) {
	?>

	<div class="item">
		  <img src="<?php get_bloginfo('url'); ?>/partials/carousel_images/<?php echo $cimage; ?>">
		  <div class="carousel-caption">The is the second slide</div>
	</div>

	<?php
} // ends carousel_image()

// NB: enqueue the carousel.css in functions.php
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
            <img src="<?php get_bloginfo('url'); ?>/partials/carousel_images/0.jpg" alt="image1">
            <div class="carousel-caption">The is a new first slide</div>
        </div>

				<?php
					/**
					 * loop slides out here
					 */
					for ($i = 1; $i <= 4; $i++){
						carousel_image( $i . '.jpg' ); // e.g. 1.jpg
					}
				?>

    </div><a class="left carousel-control" href="#custom-bootstrap-carousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control"
    href="#custom-bootstrap-carousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>
</div>
