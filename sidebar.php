<?php
/**
 * sidebar.php
 */
?>

  <!-- the sidebar --> 
  <aside id="sidebar">
    <!-- search form -->
    <?php get_search_form( ); ?>

    <!-- Menu -->  
    <h3> <?php _e('Sidebar Menu','petj_f16_bootstrap'); ?> </h3>


	    <?php wp_nav_menu( 
				array( 

					'theme_location' => 'sidebar-menu',
					'container' => 'nav',
					'container_id' => 'navSidebarMenu',
					'container_class' => 'sidebarMenu',
					'depth' => 0,
					'items_wrap' => 'ul'

				) ); ?>


    <!-- widget areas -->
    <h3> <?php _e('Widget area','petj_f16_bootstrap'); ?> </h3>

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
