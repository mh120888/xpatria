<?php get_header(); ?>

<section id='hero'>
  <div class='info'>
    <img src="/images/logo.png" alt='logo'>
    <h1>Well-being without borders.</h1>
    <a href="/" class='btn'>Click here to learn more</a>
  </div>
</section>

<?php if ( have_posts() ) : while ( have_posts() ) :  the_post();  ?>

  <h1><?php the_title() ?></h1>
  <p>front pa</p>
  <p><?php the_content() ?></p>

<?php endwhile; else: ?>

  there are no posts

<?php endif; ?>

<?php get_footer(); ?>