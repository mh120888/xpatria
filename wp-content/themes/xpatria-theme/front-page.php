<?php get_header(); ?>

<section id='hero'>
  <div class='info'>
    <img src="/images/logo.png" alt='logo'>
    <h1>Well-being without borders.</h1>
    <a href="/" class='btn'>Click here to learn more</a>
  </div>
</section>

<section id='ctas'>
  <header>
  <h2>Finding the right support is key</h2>
  <p>As your coach I will provide you with a safe and confidential space to pause, reflect, and design strategies to ensure that you and your family can thrive during these exciting times</p>
  </header>

  <?php

  $args = array(
    'post_type' => 'cta'
  );
  $query = new WP_Query( $args );

  ?>

  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

    <?php the_post_thumbnail( 'thumbnail' ); ?>
    
  <?php endwhile; endif; wp_reset_postdata(); ?>

</section>

<?php if ( have_posts() ) : while ( have_posts() ) :  the_post();  ?>

  <h1><?php the_title() ?></h1>
  <p>front pa</p>
  <p><?php the_content() ?></p>

<?php endwhile; else: ?>

  there are no posts

<?php endif; ?>

<?php get_footer(); ?>