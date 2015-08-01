<?php
/*
 * Template Name: Home Page
 */

get_header('home');
?>
<section id="topics" class="sliding">
  <?php 
  $topics = get_field('topic', 'option');
  $topic_list = '';
  foreach ($topics as $topic):
    $topic_list .= $topic->term_id.',';
  endforeach;
  ?>
  <div class="row">
    <div class="large-12 column">
      <h2>Nel blog parlo di:</h2>
      <?php
        $args = array(
          'orderby' => 'name',
          'order' => 'ASC',
          'hide_empty' => 0,
          'include' => $topic_list,
        );
        $categories = get_categories($args);
        $count = 0;
        $cat_number = count($categories);
        foreach($categories as $category):
          $count++;
        ?>
            <a href="<?php echo get_category_link( $category->term_id ) ?>"><span class="name"><?php echo $category->name ?></span></a><?php echo ( $count < $cat_number)?', ':''; ?>
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
  $sticky = get_option( 'sticky_posts' );
  $args = array(
    'posts_per_page' => 1,
    'post__in'  => $sticky,
  );
  $sticky_post = new WP_Query( $args );
    if ( $sticky && $sticky[0] ):
    // The Loop
      if ( $sticky_post->have_posts() ):
        while ( $sticky_post->have_posts() ):
          $sticky_post->the_post();
?>
<?php get_template_part('partials/simple', 'excerpt'); ?>
<?php 
        endwhile;
      endif;
    endif;
?>
<?php
 $args = array(
  'post_type' => 'post',
  'posts_per_page' => 5,
  'post__not_in' => get_option( 'sticky_posts' )
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
<?php echo do_shortcode( '[ajax_load_more post_type="post" seo="true" offset="5" category__not_in="99,97,100,98,101,126" pause="true" scroll="false" button_label="Carica più post"]' ); ?>
</section>
<?php
get_footer();
?>
