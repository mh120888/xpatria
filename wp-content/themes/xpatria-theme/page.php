<?php get_header(); ?>

<main>
  <section class='main'>
    <?php if ( have_posts() ) : while ( have_posts() ) :  the_post();  ?>
  <!-- <h1><?#php the_title() ?></h1> -->

    <p><?php the_content() ?></p>

  <?php endwhile; else: ?>

  <p><?php _e('Sorry, there are no posts'); ?></p>

<?php endif; ?>
</section>
</main>
<?php get_footer(); ?>