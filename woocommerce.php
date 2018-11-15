<?php get_header(); ?>
<div class="main-content">
  <div id="main">
    <h2><?php the_title(); ?></h2>
    <ul id="postlist">
      <?php woocommerce_content(); ?>
    </ul>
  </div>
</div>
<?php get_footer(); ?>
