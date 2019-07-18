<aside class="Widgets">
  <section class="Widgets-container">
    <?php
    if (is_active_sidebar('sidebar_main')) :
      dynamic_sidebar('sidebar_main');
    else :
      ?>
      <article class="Widget">
        <h3><?php _e('Buscar', 'tswp'); ?></h3>
        <?php get_search_form(); ?>
      </article>
    <?php endif; ?>
  </section>
</aside>