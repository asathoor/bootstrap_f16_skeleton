# bootstrap-f16-skeleton

## A **WordPress in the Classroom** theme

>This theme is one of the themes I made for my book [WordPress in the Classroom](http://ipaper.ipapercms.dk/ErhvervsakademiAarhus/Forskningsrapportguides/wordpress-in-the-classroom/). The themes are not made for production. They are made for the classroom, that is for students, developers and teachers learning the [WordPress](http://www.wordpress.org) craft and code. 


## bootstrap-f16-skeleton

This theme is a WordPress theme crash course. It's a Bootstrap skeleton for something, where you can develop your own design. 
Bootstrap is used as a rapid development boiler plate. Since Bootstrap depends on Jquery, the theme is ready for that too.

This repo has two important branches:

1. The skeleton - Master: the present repo.
2. The implementatioon - [Multimusen](https://github.com/asathoor/bootstrap_f16_skeleton/tree/multimusen) - a sample used for the theme on [Multimusen.dk](http://www.multimusen.dk).


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

## Further Development

For code adding functionality like costum header, logo, or background image, please refer to [petj-mvp](https://github.com/asathoor/petj-mvp).


