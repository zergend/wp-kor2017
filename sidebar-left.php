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
      'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '',
      'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      'depth'           => 0,
      'walker'          => '',
    ) );
    ?>
    
    <aside id="first-widget-area" class="widget-area" role="complementary">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside><!-- #secondary -->

    <nav class="menu-vertical">
      <ul class="menu-vertical__list">
        <li class="menu-vertical__item  current-menu-item">
          <a href="#">Главная</a>
        </li>
        <li class="menu-vertical__item">
          <a href="#">Администрация</a>
        </li>
        <li class="menu-vertical__item  menu-item-has-children">
          <a href="#">Новости</a>
          <ul class="menu-vertical__list  submenu">
            <li class="menu-vertical__item">
              <a href="#">Подменю 1</a>
            </li>
            <li class="menu-vertical__item">
              <a href="#">Подменю 2</a>
            </li>
          </ul>
        </li>
        <li class="menu-vertical__item">
          <a href="#">Дума</a>
        </li>
        <li class="menu-vertical__item">
          <a href="#">Отдел муниципального заказа и потребительского рынка</a>
        </li>
        <li class="menu-vertical__item">
          <a href="#">Пожарная безопасность</a>
        </li>
        <li class="menu-vertical__item">
          <a href="#">Поселения</a>
        </li>
      </ul>
    </nav>
  </div>
