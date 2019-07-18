<?php get_header(); ?>
<!-- Archivo para usarlo de contenedor del contenido -->
<main class="Main">
  <section class="Main-container">
    <?php
    if (is_category()) :
      $term_title = __('Resultados para la categoría:', 'tswp');
    endif;

    if (is_tag()) :
      $term_title = __('Resultados para la etiqueta:', 'tswp');
    endif;
    ?>
    <div class="TermsResults">
      <h3><?php echo $term_title; ?></h3>
      <mark><?php single_term_title(); ?></mark>
      <div>
        <?php
        if (have_posts()) :
          while (have_posts()) :
            the_post();
            get_template_part('template-parts/home-content');
          endwhile;
          get_template_part('template-parts/pagination');
        else :
          get_template_part('template-parts/not-found');
        endif;
        ?>
  </section>
</main>
<?php
get_sidebar();
get_footer();
?>