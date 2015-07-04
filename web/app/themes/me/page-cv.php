<?php
/*
* Template Name: CV
*/
get_header('pages');
wp_reset_postdata();
?>
<?php get_template_part('partials/off', 'canvas'); ?>
<?php if ( function_exists( 'pdfprnt_show_buttons_for_custom_post_type' ) ) echo pdfprnt_show_buttons_for_custom_post_type(); ?>
<header id="hero">
  <?php get_template_part('partials/hamburger', 'menu'); ?>

  <div class="internal-menu hide-for-small row">
    <div class="large-9 medium-9 column">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu clearfix' ) ); ?>
    </div>
    <div class="social large-3 large-3 column">
      <?php get_template_part('partials/social', 'links'); ?>
    </div>
  </div>
  <div class="row">
    <div class="large-7 columns">
      <h1>
        <?php the_title(); ?>
      </h1>
      <h3>
        <?php the_field('subtitle'); ?>
      </h3>
      <div class="cv_desc">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <div class="bottom-contact-down">
    <div class="row collapse">
      <div class="large-6 medium-6 hide-for-small column">
        <a href="mailto:me@carlofrinolli.it" class="icon-mail left">contattami</a>
      </div>
      <div class="large-6 medium-6 small-12 column">
        <a id="further" href="#job_experience"></a>
      </div>
    </div>
  </div>
</header>

<header id="small-hero" class="hide-for-small">
  <div class="row">
    <div class="large-9 column">
      <h1>Ciao io sono Carlo, benvenuti nel mio Blog.</h1>
      <div class="ctas">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu clearfix' ) ); ?>
      </div>
    </div>
    <div class="large-3 social hide-for-small column">
      <?php get_template_part('partials/social', 'links'); ?>
    </div>
  </div>
</header>
<section id="job_experience" class="sliding">
  <div class="intermediate">
    Esperienze di lavoro
  </div>
  <?php
  $xp_items = get_field('xp_item');
  $xp_reversed = array_reverse($xp_items);
  foreach ($xp_reversed as $xp_item):
  ?>
    <div class="job_item">
      <div class="row">
        <div class="large-3 medium-4 small-12 column years">
          <h4>
            da
            <?php $from_yr = $xp_item['da_anno']; $yr = explode('-', $from_yr); echo $yr[1] . '/' . $yr[0]; ?>
            <?php if($xp_item['a_anno']): ?>– a <?php $to_yr = $xp_item['a_anno']; $yr = explode('-', $to_yr); echo $yr[1] . '/' . $yr[0]; ?>
            <?php else: ?>ad oggi<?php endif; ?>
          </h4>
        </div>
        <div class="large-9 medium-8 small-12 column job_position">
          <h2><?php echo $xp_item['job_title']; ?></h2>
          <h3><?php echo $xp_item['company']; ?></h3>
          <div class="position_desc"><?php echo $xp_item['job_position']; ?></div>
          <div class="image">
            <?php $image = $xp_item['logo']; ?>
            <?php if($image != ''): ?>
              <a href="<?php echo $xp_item['company_link']; ?>">
                <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $xp_item['company']; ?>">
              </a>
            <?php endif; ?>
          </div>
          <div class="fotorama">
            <?php
            if( have_rows('esempi') ):
              while ( have_rows('esempi') ) : the_row();
              ?>
              <div class="gallery_item">
                <?php $image = $xp_item['immagine']; ?>
                <?php if($image != ''): ?><img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $xp_item['company']; ?>"><?php endif; ?>
                <figcaption>
                  <?php echo $xp_item['descrizione']; ?>
                </figcaption>
              </div>
              <?php
            endwhile;
          endif;
          ?>
        </div>
      </div>
    </div>
  </div>
  <?php
  endforeach;
?>
</section>
<?php
get_footer();
?>
