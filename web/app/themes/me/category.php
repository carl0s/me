<?php
/*
 * Template Name: Home Page
 */

get_header();
?>
<?php get_template_part('partials/off', 'canvas'); ?>
<section id="topics">
  <?php get_template_part('partials/hamburger', 'menu'); ?>
  <div class="row">
    <div class="large-12 column">
      <h1><?php the_category(); ?></h1>
    </div>
  </div>
</section>
<section id="articles" class="sliding">

<?php
// The L<?phpoop
if(have_posts() ):
 while (have_posts() ):
  the_post();
 ?>
    <?php get_template_part('partials/simple', 'excerpt'); ?>
  <?php endwhile; ?>
<?php endif; ?>
</section>
<?php
get_footer();
?>
