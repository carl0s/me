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
        <div class="large-2 hide-for-medium hide-for-small column date">
          <span class="day"><?php the_time('d'); ?></span>
          <span class="month"><?php the_time('F'); ?></span>
          <span class="year"><?php the_time('Y'); ?></span>
        </div>
        <div class="large-9 medium-12 small-12 column post end">
          <h2><a href="<?php echo get_the_permalink(); ?>" title="<?php echo str_replace('<br />',' ',get_the_title()); ?>"><?php echo get_the_title(); ?></a></h2>
          <div class="icon-tag tags hide-for-small"><?php the_tags( '<span>TAGS: </span>', $sep = ', ', '' ); ?></div>
        </div>
      </div>
    </div>
  </div>