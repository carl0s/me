<?php
/*
* Template Name: CV
*/
get_header('pages');
wp_reset_postdata();
?>
<?php get_template_part('partials/off', 'canvas'); ?>
<header id="hero">
  <?php get_template_part('partials/hamburger', 'menu'); ?>

  <div class="social hide-for-small row">
    <div class="large-3 large-offset-9 column">
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
<section id="job_experience" class="sliding">
  <div class="intermediate">
    Esperienze di lavoro
  </div>
  <?php
  if( have_rows('xp_item') ):
    while ( have_rows('xp_item') ) : the_row();
    ?>
    <div class="job_item">
      <div class="row">
        <div class="large-3 medium-4 small-12 column years">
          <h4>
            da
            <?php $from_yr = get_sub_field('da_anno'); $yr = explode('-', $from_yr); echo $yr[1] . '/' . $yr[0]; ?>
            <?php if(get_sub_field('a_anno')): ?>– a <?php $to_yr = get_sub_field('a_anno'); $yr = explode('-', $to_yr); echo $yr[1] . '/' . $yr[0]; ?>
            <?php else: ?>ad oggi<?php endif; ?>
          </h4>
        </div>
        <div class="large-9 medium-8 small-12 column job_position">
          <h2><?php echo get_sub_field('job_title'); ?></h2>
          <h3><?php echo get_sub_field('company'); ?></h3>
          <div class="position_desc"><?php echo get_sub_field('job_position'); ?></div>
          <div class="image">
            <?php $image = get_sub_field('logo'); ?>
            <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php the_sub_field('company'); ?>">
          </div>
          <div class="fotorama">
            <?php
            if( have_rows('esempi') ):
              while ( have_rows('esempi') ) : the_row();
              ?>
              <div class="gallery_item">
                <?php $image = get_sub_field('immagine'); ?>
                <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php the_sub_field('company'); ?>">
                <figcaption>
                  <?php the_sub_field('descrizione'); ?>
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
endwhile;
endif;
?>
</section>
<?php
get_footer();
?>
