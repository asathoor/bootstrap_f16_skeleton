<form action="/" method="get">
    <label for="search">Search <?php echo home_url( '/' ); ?></label><br>
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" /><br>
    <input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" />
</form>
