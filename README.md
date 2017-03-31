# WordPress Theme Crash Course

This theme is a WordPress theme crash course. It's a skeleton for something, where you can develop your own design. 
Bootstrap is used as a rapid development boiler plate. Since Bootstrap depends on Jquery, the theme is ready for that too.


## The Loop

In this theme the loop is extremely simple. You may want to improve the loop, here are the options:

* [The Loop Template Tags](https://codex.wordpress.org/Template_Tags)

## WordPres Template Howto

* [WP Theme Development](https://codex.wordpress.org/Theme_Development)

## Src: video, images, audio etc.

In the markup you need to add a link to the template directory. Use code along these lines:

~~~~
<img src="<?php get_stylesheet_directory() ?>/images/FILENAME.png" alt="">
~~~~

## Functions

Have a look at functions.php. Here we define theme options, like:

* Menus
* Widget areas
* Additional WordPress functionality


## Scripts and Stylesheets

In header.php the scripts and some stylesheets are loaded via html for clarity. However the recommended WordPress standard
is enqueueing via functions.php:

```
function petj_enqueue_style() {
	wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css', false );
}
add_action( 'wp_enqueue_scripts', 'petj_enqueue_style' );
```

See the WordPress [developer reference](https://developer.wordpress.org/reference/functions/wp_enqueue_style/).

## SEO

No SEO is used. Add meta-tags, see my [SEO II Exercise](https://github.com/asathoor/SEO-II-exercise)

## Test Content

* [WP Theme Unit Test](https://codex.wordpress.org/Theme_Unit_Test)
* [Test Content Download](https://wpcom-themes.svn.automattic.com/demo/theme-unit-test-data.xml)

## Further Development

For code adding functionality like costum header, logo, or background image, please refer to [petj-mvp](https://github.com/asathoor/petj-mvp).
