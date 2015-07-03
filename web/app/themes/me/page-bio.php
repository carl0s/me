<?php
/*
 * Template Name: Home Page
 */

get_header('home');
?>
<section id="topics" class="sliding">
  <div class="row">
    <div class="large-12 column">
      <ul>
      <?php wp_list_categories('title_li=<h2>' . __('Nel blog parlo di:') . '</h2>' ); ?>
      </ul>
    </div>
  </div>
</section>
<section id="articles">
<?php wp_reset_query(); ?>
<?php wp_reset_postdata(); ?>
<?php
 $args = array(
  'post_type' => 'post',
  'posts_per_page' => -1,
 );
 $blog = new WP_Query( $args );

// The Loop
if ( $blog->have_posts() ):
 while ( $blog->have_posts() ):
   $blog->the_post();
 ?>
    <?php get_template_part('partials/simple', 'excerpt'); ?>
  <?php endwhile; ?>
<?php endif; ?>
</section>
<?php
get_footer();
?>
