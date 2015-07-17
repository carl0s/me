<article class="row collapse">
  <figure class="large-6 medium-6 small-12 column">
    <a href="<?php the_field('link_slideshare'); ?>" title="<?php echo get_the_title(); ?>"><?php the_post_thumbnail(); ?></a>
  </figure>
  <div class="content large-6 medium-6 small-12 column">
    <h4><?php $terms = get_terms('occasion'); echo $terms[0]->name; ?></h4>
    <?php the_title('<h2>','</h2>'); ?>
    <?php the_content(); ?>
    <?php
    $date_format = "d/m/Y";
    $date = strtotime(get_field('date'));
    ?>
    <div class="bottom-details">
      <div class="tags">
        <?php the_tags(); ?>
      </div>
      <div class="date">
        <?php echo date_i18n($date_format, $date); ?>
      </div>
    </div>
  </div>
</article>
