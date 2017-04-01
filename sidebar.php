<!-- from: sidebar.php --> 
  <aside id="sidebar">

    <!-- Menu -->  
    <h3> <?php _e('Menu','petj_f16_bootstrap'); ?> </h3>

		<nav>
	    <?php wp_nav_menu( array( 'theme_location' => 'sidebar-menu' ) ); ?>
		</nav>

    <!-- widget areas -->
    <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
	    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		    <?php dynamic_sidebar( 'home_right_1' ); // here the widget is printed  ?>
	    </div><!-- #primary-sidebar -->

      <!-- List all pages -->
      <h3><?php _e('Page List', 'petj_f16_bootstrap'); ?></h3>
        <ul>
          <?php wp_list_pages( array( 'title_li' => '' ) ); ?>
        </ul>

    <?php endif; ?>
  </aside>
