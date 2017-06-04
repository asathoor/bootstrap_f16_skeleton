<!-- from: sidebar.php --> 

    <!-- Menu -->  
	<?php wp_nav_menu( array( 'theme_location' => 'sidebar-menu' ) ); ?>

    <!-- widget areas -->
    <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
		    <?php dynamic_sidebar( 'home_right_1' ); // here the widget is printed  ?>
    <?php endif; ?>

<!-- ends sidebar.php -->
