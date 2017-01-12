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
      'walker'          => new walker_vertical_nav_menu
    ) );
    ?>

    <aside id="first-widget-area" class="widget-area" role="complementary">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside><!-- #first -->

  </div>
