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
<?php
$args = array(
 'post_type' => 'slide',
 'posts_per_page' => -1,
 'meta_key' => 'date',
 'orderby' => 'meta_value_num',
 'order' => 'DESC'
);
$slides_all = new WP_Query( $args );
?>
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
<?php echo ($slides_all->post_count > 5)?do_shortcode( '[ajax_load_more repeater="template_1" post_type="slide" offset="5" scroll="false" button_label="Carica più slide"]' ):''; ?>
</section>
<?php
get_footer();
?>
