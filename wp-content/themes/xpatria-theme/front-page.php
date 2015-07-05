<?php get_header(); ?>

<section id='hero'>
  <div class='info'>
    <img src="/images/logo.png" alt='logo'>
    <h1>Well-being without borders.</h1>
    <a href="/" class='btn'>Click here to learn more</a>
  </div>
</section>

<main>
  <section id='ctas'>
    <header>
      <h2>Finding the right support is key</h2>
      <p>As your coach I will provide you with a safe and confidential space to pause, reflect, and design strategies to ensure that you and your family can thrive during these exciting times</p>
    </header>
    <div class='cta-row css-table'>
      <?php

      $args = array(
        'post_type' => 'cta'
        );
      $query = new WP_Query( $args );

      ?>

      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

      <div class='individual-cta table-cell'>
        <?php 

        $image = get_field('image');

        if( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

      <?php endif; ?>
      <p class='cta-title'><?php the_field('name') ?></p>
      <p class='cta-description'><?php the_field('description') ?></p>
    </div>


  <?php endwhile; ?>
</div>


<?php endif; wp_reset_postdata(); ?>

</section>

<section id='blog'>

  <header>
    <h2>Recent Blog Articles</h2>
  </header>
  <div class='blog-row css-table'>
    <?php

      $args = array(
        'post_type' => 'post',
        'posts_per_page' => '2'
        );
      $query = new WP_Query( $args );

      ?>

    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

    <div class='individual-blog-post table-cell'>
    <p class='blog-title'><?php the_title() ?></p>
    <p class='blog-description'><?php the_content() ?></p>
  </div>

<?php endwhile; ?>
</div>
<a href='/blog/' class='btn'>Visit my blog</a>


<?php endif; wp_reset_postdata(); ?>


</section>

<?php if ( have_posts() ) : while ( have_posts() ) :  the_post();  ?>

  <h1><?php the_title() ?></h1>
  <p>front pa</p>
  <p><?php the_content() ?></p>

<?php endwhile; else: ?>

  there are no posts

<?php endif; ?>
</main>

<?php get_footer(); ?>
