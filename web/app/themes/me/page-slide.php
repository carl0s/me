<?php
/*
 * Template Name: Slide
 */

get_header('slides');
?>

<section id="slides" class="sliding">
  <div class="row collapse">
    <div class="large-12 column title-section">
      <h1>Le mie slide</h1>
    </div>
  </div>
<?php wp_reset_query(); ?>
<?php wp_reset_postdata(); ?>
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
<?php echo ($slides->post_count > 5)?do_shortcode( '[ajax_load_more post_type="progetti" offset="5" category__not_in="99,97,100,98,101" pause="true" scroll="false" button_label="Carica più post"]' ):''; ?>
</section>
<?php
get_footer();
?>
