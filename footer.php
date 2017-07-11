<footer class="main-footer">
  <?php
    if( is_front_page() ) {
      echo '<div class="main-footer__map" id="yamap"></div>';
    }else {
      echo '<div class="main-footer__empty-block"></div>';
    }
  ?>

  <div class="footer-inner">
    <div class="column column--footer  column--left-footer">
      <div class="footer-inner__address">
        391200, Рязанская область,<br> г. Кораблино, ул. Маяковского, д. 17<br> тел./факс: +7 (49143) 5-04-25 / 5-07-07<br> e-mail:
        <a href="mailto:korablino@ryazangov.ru">
        korablino@ryazangov.ru
      </a>
      </div>
      <div class="footer-inner__metrika">
        <!-- Yandex.Metrika informer -->
        <a href="https://metrika.yandex.ru/stat/?id=21113743&amp;from=informer" target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/21113743/3_0_5284A0FF_326480FF_1_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="21113743" data-lang="ru" /></a>
        <!-- /Yandex.Metrika informer -->
      </div>
    </div>
    <div class="column  column--footer  column--middle-footer">
      <ul class="footer-inner__nav">
        <li><a href="/sitemap/">Карта сайта</a></li>
        <li><a href="#">Все рубрики</a></li>
        <li><a href="#">Хронология</a></li>
      </ul>
    </div>
    <div class="column  column--footer  column--right-footer">
      <div class="footer-inner__rights">
        © 2017 Все права защищены и охраняются законом. Использование материалов сайта допускается только с разрешения администрации Кораблинского района. При цитировании материалов в сети Интернет гиперссылка на <a href="/">korablino62.ru</a> обязательна.
      </div>
      <div class="footer-inner__autor">
        Разработка и сопровождение: <a href="http://blogsector.ru/">blogsector.ru</a>
      </div>
    </div>
  </div>
</footer>

<?php
  if( is_front_page() ) {
    echo "<script src='https://api-maps.yandex.ru/2.1/?lang=ru_RU' type='text/javascript'></script>";
  }
?>

<script src="
<?php echo get_template_directory_uri();
if( is_front_page() ){
echo'/js/korablino62.js';
}
else {
echo'/js/korablino62single.js';
}
?>"></script>
<!-- Yandex.Metrika counter + code in the file 'korablino62.js' -->

<noscript>
  <div><img src="https://mc.yandex.ru/watch/21113743" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
<!-- /Yandex.Metrika counter -->

<?php wp_footer(); ?>
</body>

</html>
