  <div class="column  column--left">
    <nav class="menu-vertical  menu-vertical--closed  menu-vertical--nojs">
      <button class="menu-vertical__toggle" type="button">Открыть меню</button>
    <?php

    wp_nav_menu( array( // меню
      'theme_location'  => 'sidebar-menu',
      'menu'            => '',
      'container'       => false,
      'container_class' => '',
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
    </nav>
    <script>
      var navMain = document.querySelector('.menu-vertical');
      var navToggle = document.querySelector('.menu-vertical__toggle');

      navMain.classList.remove('menu-vertical--nojs');

      navToggle.addEventListener('click', function() {
        if (navMain.classList.contains('menu-vertical--closed')) {
          navMain.classList.remove('menu-vertical--closed');
          navMain.classList.add('menu-vertical--opened');
        } else {
          navMain.classList.add('menu-vertical--closed');
          navMain.classList.remove('menu-vertical--opened');
        }
      });
    </script>

    <aside id="first-widget-area" class="widget-area">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside><!-- #first -->

  </div>
