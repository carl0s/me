<article class="row collapse">
  <figure class="large-6 medium-6 small-12 column">
    <a href="<?php the_field('link_slideshare'); ?>" title="<?php echo get_the_title(); ?>"><?php the_post_thumbnail(); ?></a>
  </figure>
  <div class="content large-6 medium-6 small-12 column">
    <h4><em>[<?php the_field('date'); ?>]</em> <?php the_field('occasion'); ?></h4>
    <?php the_title('<h2>','</h2>'); ?>
    <?php the_excerpt(); ?>
  </div>
</article>