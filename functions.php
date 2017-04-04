<?php
/**
 * File: functions.php
 * (the file is optional and works like a plugin)
 */

/**
 * Set content width (media)
 */
if ( ! isset( $content_width ) ) $content_width = 300;


/**
 * Enqueue styles
 * tip: let style.css be the last one.
 */
function themeslug_enqueue_style() {

	// style.css
	wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css', false );

	// bootstrap carousel
	wp_enqueue_style( 'bootstrap-carousel', get_template_directory_uri() . '/partials/carousel.css', false );
}
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );

/**
 * Title-tag
 **/
function theme_slug_setup() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );

/**
 * Automatic feed links
 */
add_theme_support( 'automatic-feed-links' );

/**
 * wp link pages
 */
$defaults = array(
	'before'           => '<p>' . __( 'Pages:' , "petj_f16_bootstrap"),
	'after'            => '</p>',
	'link_before'      => '',
	'link_after'       => '',
	'next_or_number'   => 'number',
	'separator'        => ' ',
	'nextpagelink'     => __( 'Next page', "petj_f16_bootstrap" ),
	'previouspagelink' => __( 'Previous page' , "petj_f16_bootstrap"),
	'pagelink'         => '%',
	'echo'             => 1
);
wp_link_pages( $defaults );

/**
 * A menu
 */
function register_my_menu() {
  register_nav_menu('sidebar-menu',__( 'Sidebar Menu' ));
}
add_action( 'init', 'register_my_menu' );

/**
 * Widget area
 */
function petjmvp_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'petjmvp_widgets_init' );

/**
 * Costum header
 * .. not implemented ..
 */

/**
 * Costum background
 * .. not implemented ..
 */
/*
$args = array(
	'default-color' => '000000',
	'default-image' => '%1$s/images/background.jpg',
);
add_theme_support( 'custom-background', $args );
*/

/**
 * Add editor styles
 */
add_editor_style();


/**
 * Theme thumbnails
 */
add_theme_support( "post-thumbnails" );


/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );

/**
 * Costum logo support
 * @url: https://codex.wordpress.org/Theme_Logo
 */

/*
function petj_mvp_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'petj_mvp_setup' );
*/

/**
 * Costum header image
 * (load via style.css)
 */
/*
$petjHeaderImage = array(
	'flex-width'    => true,
	'width'         => 820,
	'flex-height'    => true,
	'height'        => 200,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $petjHeaderImage );
*/

/**
 * COSTUM FUNCTIONS
 * ( use your functions anywhere in the theme ... )
 * Yep! That's why the file is called functions.php
 */
function hej_verden( $title, $text ) {

	echo '<h3 class="hejVerdenTitle"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span> ' 
	. $title 
	. '</h3>'
	. '<div class="hejVerdenText">' 
	. $text 
	. '</div>';

}

/**
 * Display any post by id
 * about get_post(): @url https://developer.wordpress.org/reference/functions/get_post/
 */
function petj_display_post( $postId, $glyph ) {
	
			if(!isset($glyph)) {
					$glyph = 'tent';
				}
	
			?>

			<hr>
			<h3></h3>
			<?php

				$feat_1 = get_post( $postId ); // see get_post() on Codex
				$title = $feat_1->post_title;

				echo '<div><h4><span class="glyphicon glyphicon-' . $glyph . '" aria-hidden="true"></span> <a href="'
				. get_bloginfo('url') 
				. '/?p=' 
				. $postId
				. '">' 
				. $title 
				. '</h4>';

				// read more link
				echo '<a href="'
				. get_bloginfo('url') 
				. '/?p=' 
				. $postId
				. '"> <span class="label label-success"> Read it Now! </span> </a></div>';

} // ends petj_display_post()
?>
