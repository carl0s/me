      <article class="post image">
        <div class="image-wrapper">
          <div class="taxonomy">
            <?php the_category(); ?>
          </div>
          <div class="overlay">
            &nbsp;
            <a href="<?php echo get_the_permalink(); ?>" title="<?php echo str_replace('<br />',' ',get_the_title()); ?>"></a>
          </div>
          <?php the_post_thumbnail(); ?>

        </div>
        <div class="content row">
          <div class="large-2 small-4 column date">
            <span class="day"><?php the_time('d'); ?></span>
            <span class="month"><?php the_time('F'); ?></span>
            <span class="year month"><?php the_time('Y'); ?></span>
            <a href="<?php echo get_the_permalink(); ?>" class="show-for-small-only icon-comments"><?php comments_number( '0', '1', '%' ); ?></a>
          </div>
          <div class="large-10 small-8 column post">
            <h2><a href="<?php echo get_the_permalink(); ?>" title="<?php echo str_replace('<br />',' ',get_the_title()); ?>"><?php echo get_the_title(); ?></a></h2>
            <div class="icon-tag tags hide-for-small"><?php the_tags( '<span>TAGS: </span>', $sep = ', ', '' ); ?></div>
            <div class="post-content hide-for-small">
              <?php the_excerpt(); ?>
            </div>
            <div class="post-ctas row">
              <div class="large-6 hide-for-small column">
                <a href="<?php echo get_the_permalink(); ?>" class="icon-comments"><?php comments_number( '0', '1', '%' ); ?></a>
              </div>
              <div class="large-6 hide-for-small column">
                <a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>" class="icon-circle-plus"></a>
              </div>
            </div>
          </div>
        </div>
      </article>
