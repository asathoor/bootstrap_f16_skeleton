# WordPress Theme for Multimusen.dk

In this branch the theme has been ported to my website Multimusen.dk. A few tweaks had to be made,
for instance the media width in functions.php. Apart from that the code is more or less the
same as the basic theme skeleton.

## The Loop

In this theme the loop is extremely simple. You may want to improve the loop, here are the options:

* [The Loop Template Tags](https://codex.wordpress.org/Template_Tags)

## WordPres Template Howto

* [WP Theme Development](https://codex.wordpress.org/Theme_Development)

## Src: video, images, audio etc.

In the markup you need to add a link to the template directory. Use code along these lines:

~~~~
... ( for themes ) ...

<img src="<?php bloginfo('template_directory'); ?>/images/FILENAME.png" alt="" width="100" height="*">


... ( for child themes ) ...
<img src="<?php get_stylesheet_directory() ?>/images/FILENAME.png" alt="">
~~~~

In this way you could add a logo, or similar.

## Functions

Have a look at functions.php. Here we define theme options, like:

* Menus
* Widget areas
* Additional WordPress functionality

## Costum Pages

* [WordPress Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/)

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

## The Menu

On this branch the menu is a hardcoded Bootstrap menu. The code was more or less made via the [Bootstrap Menu Builder](http://bootstrapdesigntools.com/tools/bootstrap-menu-builder/).

## Further Development

For code adding functionality like costum header, logo, or background image, please refer to [petj-mvp](https://github.com/asathoor/petj-mvp).


