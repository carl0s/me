<?php
/*
 * Template Name: Slide
 */

get_header('slides');
?>
<?php wp_reset_query(); ?>
<?php wp_reset_postdata(); ?>


<section id="slides" class="sliding">
  <div class="row collapse">
    <div class="large-12 column title-section">
      <h1>Le mie slide</h1>
    </div>
  </div>
<?php

?>
<?php
 $args = array(
  'post_type' => 'slide',
  'posts_per_page' => 5,
  'meta_key' => 'date',
  'orderby' => 'meta_value_num',
  'order' => 'DESC'
 );
 $slides = new WP_Query( $args );

// The Loop
if ( $slides->have_posts() ):
 while ( $slides->have_posts() ):
   $slides->the_post();
 ?>
    <?php get_template_part('partials/simple', 'slide'); ?>
  <?php endwhile; ?>
<?php endif; ?>
<?php echo do_shortcode( '[ajax_load_more repeater="template_1"  post_type="slide" offset="5" posts_per_page="5" pause="true" button_label="Carica più slide"]' ); ?>
</section>
<?php
get_footer();
?>
