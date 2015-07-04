<?php
get_header();

?>

<?php wp_reset_query(); ?>
<?php get_template_part('partials/off', 'canvas'); ?>

<section id="fixed-article-header" class="hide-for-small">
  <div class="row">
    <div class="large-2 small-4 column date">
      <span class="day"><?php the_time('d.m.Y'); ?></span>
    </div>
    <div class="large-10 small-8 column post end">
      <h2><a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a></h2>
    </div>
  </div>
</section>
<section id="article" class="sliding">
  <?php get_template_part('partials/hamburger', 'menu'); ?>
  <div class="image-wrapper">
    <div class="taxonomy">
      <?php the_category(); ?>
    </div>

    <?php if(get_field('video')): ?>
      <div class="fotorama" data-width="1440" data-height="740">
        <a href="<?php the_field('video'); ?>">
          <?php the_post_thumbnail(); ?>
        </a>
      </div>
      <?php
      else:
      ?>
      <div class="overlay">
        &nbsp;
      </div>
      <?php
        the_post_thumbnail();
      endif;
    ?>
    <div class="title-date">
      <div class="row">
        <div class="large-2 small-3 column date">
          <span class="day"><?php the_time('d'); ?></span>
          <span class="month"><?php the_time('F'); ?></span>
          <span class="year"><?php the_time('Y'); ?></span>
        </div>
        <div class="large-9 small-8 column post end">
          <h2><a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a></h2>
          <div class="icon-tag tags hide-for-small"><?php the_tags( '<span>TAGS: </span>', $sep = ', ', '' ); ?></div>
        </div>
      </div>
    </div>
  </div>
  <div class="row excerpt">
    <div class="large-2 small-12 column">
      <div class="post-ctas row">
        <div class="large-12 column">
          <a href="#" class="icon-comments"><?php comments_number( '0', '1', '%' ); ?></a>
        </div>
      </div>
    </div>
    <div class="large-10 small-12 column post-excerpt">
      <?php the_excerpt(); ?>
    </div>
  </div>
  <div class="internal-image row">
    <div class="fotorama" data-width="1200" data-height="600">
    <?php
      $counter = 1;
      if( have_rows('immagine_interna') ):
        while ( have_rows('immagine_interna') ) : the_row();
    ?>
      <div class="gallery_item">
        <div class="large-9 column">
          <?php $image = get_sub_field('immagine'); ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
        </div>
        <div class="image-desc large-2 end column">
          <h4><?php the_sub_field('didascalia'); ?></h4>
          <div class="fig-number">Fig. <?php echo $counter; ?></div>
        </div>
      </div>
    <?php
          $counter++;
        endwhile;
      endif;
    ?>
    </div>
  </div>
  <div class="row collapse">
    <div class="article-content large-9 large-offset-2 end column">

      <?php
      $content = get_the_content();
      $content = apply_filters('the_content', $content);
      echo $content;
      ?>
      <?php comments_template(); ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>
