<?php
/*
 * Template Name: Events
 */

get_header('pages');
?>
<?php wp_reset_query(); ?>

<div class="row">
  <div class="large-7 columns">
    <h1>
      <?php the_title(); ?>
    </h1>
    <h3>
      <?php the_field('subtitle'); ?>
    </h3>
    <div class="desc">
      <?php the_excerpt(); ?>
    </div>
  </div>
</div>
<section id="page-content">
  <div class="row">
    <div class="large-12 column">
      <?php the_content(); ?>
    </div>
  </div>
</section>
<?php
get_footer();
?>
