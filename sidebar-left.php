  <div class="column  column--left">
    <?php

    wp_nav_menu( array( // меню
      'theme_location'  => 'sidebar-menu',
      'menu'            => '',
      'container'       => 'nav',
      'container_class' => 'menu-vertical',
      'container_id'    => '',
      'menu_class'      => 'menu-vertical__list',
      'menu_id'         => '',
      'echo'            => true,
      'fallback_cb'     => false,
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '',
      'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      'depth'           => 0,
      'walker'          => new magomra_walker_nav_menu,
    ) );

    // function magomra_nav_menu( $menu_id ) {
  	// main navigation menu
    /*	$args = array(
    		'theme_location'    => 'sidebar-menu',
    		'container'     => 'nav',
    		'container_id'      => '',
    		'conatiner_class'   => 'menu-vertical',
    		'menu_class'        => 'menu-vertical__list menu main-menu menu-depth-0 menu-even',
    		'echo'          => true,
    		'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    		'depth'         => 10,
    		'walker'        => new magomra_walker_nav_menu
    	); */

  	// print menu
  	// wp_nav_menu( $args );
  // }
    ?>

    <aside id="first-widget-area" class="widget-area" role="complementary">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside><!-- #first -->

  </div>
