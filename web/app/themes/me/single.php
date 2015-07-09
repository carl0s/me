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
    <div class="large-8 small-8 column post">
      <h2><a href="<?php echo get_the_permalink(); ?>" title="<?php echo str_replace('<br />',' ',get_the_title()); ?>"><?php echo get_the_title(); ?></a></h2>
    </div>
    <div id="mobile-share" class="social-share large-2 small-12 column">
      <h4>Condividi su:</h4>
      <ul>
        <li><a href="http://www.facebook.com/share.php?u=<?php echo get_permalink(); ?>" target="_blank" class="icon-facebook"></a></li>
        <li><a href="https://twitter.com/share?url=<?php echo get_permalink(); ?>&amp;via=carl0s_&amp;text=<?php echo get_the_title(); ?>" target="_blank" class="icon-twitter"></a> </li>
      </ul>
    </div>
  </div>
</section>
<section id="article" class="sliding">
  <?php get_template_part('partials/hamburger', 'menu'); ?>
  <?php get_template_part('partials/internal', 'excerpt'); ?>

  <div class="row excerpt">
    <div class="large-2 small-12 column">
      <div class="post-ctas row">
        <div class="hide-for-medium-up mobile-dates small-6 column">
          <span class="day"><?php the_time('d'); ?></span>
          <span class="month"><?php the_time('F'); ?></span>
          <span class="year"><?php the_time('Y'); ?></span>
        </div>
        <div class="large-12 small-6 column">
          <a href="#" class="icon-comments"><?php comments_number( '0 commenti', '1 commento', '% commenti' ); ?></a>
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
<div class="row">
  <div class"large-12 columns">
    <?php $category = get_the_category(); ?>
    <?php $other_posts_number = $category[0]->count - 1; ?>
    <?php if($other_posts_number > 0): ?>
      <h3 class="related-title hide-for-small">A proposito di <a href="/topics/<?php echo $category[0]->slug; ?>" title="<?php echo $category[0]->cat_name; ?>"><?php echo $category[0]->cat_name; ?></a> ho scritto <?php echo ($other_posts_number==1)?'un altro articolo':'altri ' . $other_posts_number . ' articoli'; ?></h3>
    <?php endif; ?>
  </div>
</div>
<?php
  $relatedcategory = $category[0]->slug;
  if(isset($category) && $other_posts_number > 0):
?>
<div class="related-container hide-for-small">
    <?php
      $actual_post_id = $post->ID;
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'category_name' => $relatedcategory,
      );
      $related = new WP_Query( $args );
      // The Loop
      if ( $related->have_posts() ):
        if ($post->ID != $related->ID):

    ?>
    <div class="fotorama" data-width="100%" data-ratio="19/10">
      <?php
            $related->get_posts();
            while ( $related->have_posts() ):
              $related->the_post();
                if($actual_post_id != get_the_ID()):
      ?>
              <div class="single-related-news">
                <?php get_template_part('partials/internal', 'excerpt'); ?>
              </div>
      <?php
           endif;
        endwhile;
      ?>
  </div>
<?php endif; ?>
  <?php
      endif;
    endif;
    wp_reset_query();
    wp_reset_postdata();
  ?>
</div>
<?php
get_footer();
?>
