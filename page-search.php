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

    <main id="searchForm" class="col-sm-8">
				<h2> Find it on Multimusen </h2>
				<?php get_search_form(); ?>
    </main>

    <aside class="col-sm-4">
			<?php get_sidebar(); ?>
    </aside>

  </div><!-- row -->
</div><!-- .container -->

<?php get_footer(); ?>
