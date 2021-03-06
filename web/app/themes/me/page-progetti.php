<?php
/*
 * Template Name: Slide
 */

get_header('home');
?>

<section id="articles" class="sliding">
<?php wp_reset_query(); ?>
<?php wp_reset_postdata(); ?>
<?php
 $args = array(
  'post_type' => 'slides',
  'posts_per_page' => 5,
 );
 $slides = new WP_Query( $args );

// The Loop
if ( $slides->have_posts() ):
 while ( $slides->have_posts() ):
   $slides->the_post();
 ?>
    <?php get_template_part('partials/simple', 'excerpt'); ?>
  <?php endwhile; ?>
<?php endif; ?>
<?php echo do_shortcode( '[ajax_load_more post_type="slide" offset="5" category__not_in="99,97,100,98,101" pause="true" scroll="false" button_label="Carica più post"]' ); ?>
</section>
<?php
get_footer();
?>
