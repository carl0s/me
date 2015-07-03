<?php
/*
 * Template Name: Home Page
 */

get_header('home');
?>
<section id="topics" class="sliding">
  <div class="row">
    <div class="large-12 column">
    <h2>Nel blog parlo di:</h2>
    <?php
      $args = array(
        'orderby' => 'name',
        'order' => 'ASC',
        'hide_empty' => 0,
        'include' => '104,102,117,3,121,115'
      );
      $categories = get_categories($args);
      foreach($categories as $category):
      ?>
          <a href="<?php echo get_category_link( $category->term_id ) ?>"><span class="name"><?php echo $category->name ?></span></a>,
    <?php 
      endforeach; 
    ?>
     e altro...
    <?php wp_reset_postdata(); ?>
    </div>
  </div>
</section>
<section id="articles" class="sliding">
<?php wp_reset_query(); ?>
<?php wp_reset_postdata(); ?>
<?php
 $args = array(
  'post_type' => 'post',
  'posts_per_page' => 5,
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
<?php echo do_shortcode( '[ajax_load_more post_type="post" offset="5" category__not_in="99,97,100,98,101,126" pause="true" scroll="false" button_label="Carica più post"]' ); ?>
</section>
<?php
get_footer();
?>
