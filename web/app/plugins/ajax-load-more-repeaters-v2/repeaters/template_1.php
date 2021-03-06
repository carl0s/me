<article class="row collapse" id="<?php echo apply_filters('the_slug', basename( get_permalink() )); ?>">
  <figure class="large-6 medium-6 small-12 column">
    <a href="<?php the_field('link_slideshare'); ?>" title="<?php echo get_the_title(); ?>"><?php the_post_thumbnail(); ?></a>
    <div class="overlay"></div>
    <?php
    $date_format = "d/m/Y";
    $date = strtotime(get_field('date'));
    ?>
    <div class="bottom-details">
      <div class="row collapse">
        <div class="large-12 medium-12 small-12 column">
          <div class="date">
            <?php echo date_i18n($date_format, $date); ?>
          </div>
          <div class="tags">
            <?php the_tags(); ?>
          </div>
        </div>
      </div>
    </div>
  </figure>
  <div class="content large-6 medium-6 small-12 column">
    <h4><?php $terms = get_the_terms(get_the_ID(),'occasion'); echo (isset($terms) && !empty($terms))?$terms[0]->name:''; ?></h4>
    <h2><a href="<?php the_field('link_slideshare'); ?>" title="<?php echo get_the_title(); ?> su Slideshare"><?php echo get_the_title(); ?></a></h2>
    <?php the_content(); ?>
  </div>
</article>