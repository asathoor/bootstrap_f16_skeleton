# wp petj_f16_bootstrap

**Quick'n dirty experimental bootstrap theme.**

## The Loop

In this theme the loop is extremely simple. You may want to improve the loop, here are the options:

* [The Loop Template Tags](https://codex.wordpress.org/Template_Tags)

## WordPres Template Howto

* [WP Theme Development](https://codex.wordpress.org/Theme_Development)

## Src: video, images, audio etc.

In the markup you need to add a link to the template directory. Use code along these lines:

~~~~
<img src="<?php bloginfo('template_directory'); ?>/images/FILENAME.png" alt="" width="" height="" />
~~~~

## Functions

Have a look at functions.php. Here we define theme options, like:

* Menus
* Widget areas
* Additional WordPress functionality

## SEO

No SEO is used. Add meta-tags, see my [SEO II Exercise](https://github.com/asathoor/SEO-II-exercise)

## Test Content

* [WP Theme Unit Test](https://codex.wordpress.org/Theme_Unit_Test)
* [Test Content Download](https://wpcom-themes.svn.automattic.com/demo/theme-unit-test-data.xml)
