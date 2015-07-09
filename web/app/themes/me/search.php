<?php get_header('pages'); ?>
<?php get_template_part('partials/off', 'canvas'); ?>
<?php get_template_part('partials/hamburger', 'menu'); ?>
<header id="small-hero" class="fixed hide-for-small">
  <div class="row">
    <div class="large-9 column">
      <h1>Ciao io sono Carlo, benvenuti nel mio Blog.</h1>
      <div class="ctas">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu clearfix' ) ); ?>
      </div>
    </div>
    <div class="large-3 social hide-for-medium hide-for-small column">
      <?php get_template_part('partials/social', 'links'); ?>
    </div>
  </div>
</header>
<?php wp_reset_postdata(); ?>

<section id="search-result" class="search-result">

  <div class="row collapse">
    <div class="large-8 columns large-centered medium-10 medium-centered small-12 clearfix">
      <div class="title-container">
        <h1 class="title">Risultati della ricerca per: <strong><?php the_search_query(); ?></strong></h1>
        <span class="double-line big"></span>
      </div>
    </div>
  </div>

  <div class="row collapse back-white">
    <div class="medium-8 medium-centered small-12 small-centered columns">
      <!-- risultati qui -->
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post">
          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
          <div class="post-excerpt">
            <?php the_excerpt(); ?>
          </div>
        </div>
      <?php endwhile; else: ?>
      <div class="no-results">
        <h2>Nessun risultato per <?php the_search_query(); ?></h2>
      </div>
      <?php endif; ?>
    </div>
  </div>

</section>

<?php get_footer(); ?>
