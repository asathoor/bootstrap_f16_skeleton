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

	// google analytics script
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/petjGanalytics.js', '' , '1.0', true );

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

	register_sidebar( array(
		'name'          => 'Index widget area',
		'id'            => 'index_widget_1',
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
			<?php

				$feat_1 = get_post( $postId ); // see get_post() on Codex
				$title = $feat_1->post_title;

				echo '<div><h4><span class="glyphicon glyphicon-' . $glyph . '" aria-hidden="true"></span> <a href="'
				. get_bloginfo('url') 
				. '/?p=' 
				. $postId
				. '">' 
				. $title 
				. '</a></h4>';

				// read more link
				echo '<a href="'
				. get_bloginfo('url') 
				. '/?p=' 
				. $postId
				. '"> <span class="label label-success"> Read it Now! </span> </a></div>';

} // ends petj_display_post()

/**
 * Mailform from one.com
 * (Because: PHP mail() is disabled)
 * Enter the domain and email.
 */
function petj_one_mail( $domain, $email ){
	?>
	<form method="post" action="http://<?php echo $domain; ?>/cgi-bin/FormMail.pl" 
	accept-charset="ISO-8859-1" onsubmit="var originalCharset = document.charset; 
	document.charset = 'ISO-8859-1'; 
	window.onbeforeunload = function () {document.charset=originalCharset;};">
	Name
	<br>
	<input name="realname">
	<br>
	Email
	<br>
	<input name="email">
	<br>
	Message
	<br>
	<textarea cols="20" rows="10" name="Message"></textarea>
	<br>
	<input type="submit" value="Send">
	<input type="hidden" name="recipient" value="<?php echo $email; ?>">
	<input type="hidden" name="subject" value="Subject">
	<input type="hidden" name="redirect" value="http://<?php echo $domain; ?>/thanks/">
	<input type="hidden" name="missing_fields_redirect" value="http://<?php echo $domain; ?>/404">
	<input type="hidden" name="required" value="realname,email,Message">
	</form>
	<?php
} // end petj_one_mail()

/**
 * Write linkname
 * @dependency: wp_blogroll plugin
 * NB: the wp_blogroll is discontinued
 */
function petj_link_cat( $linkCatname ){
	?>
	<div class="links">
			<?php echo do_shortcode( '[wp-blogroll catname="'.$linkCatname.'"]' ); ?>
	</div>
	<hr>
	<?php
}

/**
 * Remove Head Junk
 * @url: https://scotch.io/tutorials/removing-wordpress-header-junk
 */
remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
remove_action('wp_head', 'wp_generator'); // remove wordpress version
remove_action('wp_head', 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links
remove_action('wp_head', 'index_rel_link'); // remove link to index page
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );

/**
 * PHP Class sample (OOP)
 */
class Myclass  
{  
	// property
	public $petj_hello = "Hello World!";

	// method ( = function)
	public function petj_hi( $name ){
		echo "Hi " . $name;
	}
}  
$f = new MyClass; // instantiate 
//echo $f->petj_hello;  

?>
