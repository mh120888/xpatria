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
    <div class='main'>
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
</div>
</section>

<section id='blog'>
  <div class='main'>
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
</div>
</section>

<section id='bio'>
  <div class='main'>
    <div class='bio-row css-table'>
      <div class='photo table-cell'>
        <img src="/claire.jpg" alt='Claire Meurette'>
      </div>
      <div class='description table-cell'>
        <h1>Claire Meurette</h1>
        <h2>Life Coach</h2>
        <p>I have been an expat for more than 15 years, and feel lucky that I was able to discover and live in 5 countries on three different continents.  I am an "accompanying spouse" which is fore and foremost an enabler - a crucial role in an expat life.  I am also a mother of three and a professional life and expat coach.</p>
        <a href="/about/" class='btn'>Learn more about me</a>
      </div>
    </div>
    <div class='associations'>
      <img src="/images/associations.jpg" alt='association'>
    </div>
  </section>

  <section id='contact'>
    <div class='main'>
      <header>
        <h1>Get in touch</h1>
        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
      </header>
      <?php echo do_shortcode('[contact-form-7 id="47" title="Contact form 1"]'); ?>
    </div>
  </div>
</section>


</main>

<?php get_footer(); ?>
