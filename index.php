
    <?php get_header(); ?>
      <?php wp_nav_menu( $args ); ?>
      <?php while ( have_posts() ) : the_post(); ?>
          <h1> <?php the_title(); ?></h1>
          <h2> <?php the_date(); ?></h2>
          <?php the_content(); ?>
      <?php endwhile; ?>





      <?php get_footer(); ?>
