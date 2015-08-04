<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8" />
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <title><?php echo get_bloginfo('name') ?> <?php wp_title( '//', true, 'left' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php get_template_part('partials/simple', 'loader'); ?>
    <?php get_template_part('partials/off', 'canvas'); ?>
    <header id="hero">
      <?php get_template_part('partials/hamburger', 'menu'); ?>

      <div class="social row">
        <div class="large-3 large-offset-9 hide-for-small column">
          <?php get_template_part('partials/social', 'links'); ?>
        </div>
      </div>
      <div class="row">
        <div class="large-7 medium-12 small-12 columns">
          <h1>
            Ciao,<br>
            io sono <a href="/">Carlo</a>
          </h1>
          <h3>
            benvenuti nel mio blog
          </h3>
          <div class="desc">
            <?php the_field('home_copywriting','option'); ?>
          </div>
          <div class="ctas">
            <?php wp_nav_menu( array( 'theme_location' => 'home-links', 'menu_class' => 'home-links' ) ); ?>
          </div>
        </div>
      </div>
      <div class="bottom-contact-down">
        <div class="row collapse">
          <div class="large-6 medium-6 hide-for-small column">
            <a href="mailto:me@carlofrinolli.it" class="icon-mail left">contattami</a>
          </div>
          <div class="large-6 medium-6 small-12 column">
            <a id="further" href="#topics"></a>
          </div>
        </div>
      </div>
    </header>
    <header id="small-hero" class="hide-for-small">
      <div class="row">
        <div class="large-12 column">
          <h1>Ciao io sono Carlo, benvenuti nel mio Blog.</h1>
          <div class="ctas">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu clearfix' ) ); ?>
          </div>
        </div>
      </div>
    </header>
