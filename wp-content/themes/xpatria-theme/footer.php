<footer>
  <nav>
    <?php

    $defaults = array(
      'container' => false,
      'theme_location' => 'primary-menu',
      'menu_class' => 'footer-menu',
      );

    wp_nav_menu( $defaults );

    ?>
  </nav>
  <div class='main-footer'>
    <div class='css-table main'>
      <div class='table-cell social-media'>
        <?php

        $defaults = array(
          'container' => false,
          'theme_location' => 'social-menu',
          'menu_class' => 'social-menu',
          );

        wp_nav_menu( $defaults );

        ?>
      </div>
      <div class='table-cell logo'>
        Logo Here
      </div>
      <div class='table-cell contact-info'>
        <a href='tel:661-123-4567'>661-123-4567</a>
        <span>Call for a <b>Free</b> Discovery Session</span>
      </div>
    </div>
  </div>
  <div class='footer-two'>
    <small>Copyright 2015, all rights reserved</small>
  </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>