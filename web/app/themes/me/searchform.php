<div class="search-form">
  <form role="search" method="get" id="searchform" autocomplete="off" action="<?php echo home_url( '/' ); ?>">
    <label class="screen-reader-text" for="s">Cerca semplicemente</label>
    <input type="text" value="" name="s" id="s" placeholder="scrivi qui."/>
    <input type="submit" id="searchsubmit" value="Cerca" />
  </form>
  <?php
  $args = array(
    'orderby' => 'name',
    'order' => 'ASC'
    );
  $categories = get_categories($args);
    foreach($categories as $category):
      echo '<div class="" style="float:left">Category: <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </div> ';
    endforeach;
  ?>

  <div class="close-search-form"></div>
</div>
