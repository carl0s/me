<?php
/*
 * Template Name: Progetti
 */

get_header('home');
?>

<section id="articles" class="sliding">
<?php wp_reset_query(); ?>
<?php wp_reset_postdata(); ?>
<?php
 $args = array(
  'post_type' => 'progetti',
  'posts_per_page' => 5,
 );
 $projects = new WP_Query( $args );

// The Loop
if ( $projects->have_posts() ):
 while ( $projects->have_posts() ):
   $projects->the_post();
 ?>
    <?php get_template_part('partials/simple', 'excerpt'); ?>
  <?php endwhile; ?>
<?php endif; ?>
<?php echo do_shortcode( '[ajax_load_more post_type="progetti" offset="5" category__not_in="99,97,100,98,101" pause="true" scroll="false" button_label="Carica più post"]' ); ?>
</section>
<?php
get_footer();
?>
