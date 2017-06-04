<?php
/**
 * file: search.php
 * purpose: searchform.
 * @url https://codex.wordpress.org/Creating_a_Search_Page
 */
get_header();
?>

<!-- file: search.php -->
<div class="container-fluid">

	<!-- search form -->
    <main id="searchForm" class="col-sm-8 align-center">
		<?php get_search_form(); ?>
    </main>

	<!-- sidebar -->
    <aside class="col-sm-4">
			<?php get_sidebar(); ?>
    </aside>

  </div><!-- row -->
</div><!-- .container -->

<?php get_footer(); ?>
