<!doctype HTML>

<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width: device-width, initial-scale=1.0'>
  <title><?php wp_title(); ?></title>

  <?php wp_head(); ?>
</head>
<div id='masthead'>
  <div class='main'>
    <nav>
      <?php

      $defaults = array(
        'container' => false,
        'theme_location' => 'primary-menu',
        'menu_class' => false,
        );

      wp_nav_menu( $defaults );

      ?>

    </nav>
    <div id='contact_info'>
      <a href='tel:661-123-4567'>661-123-4567</a>
      <span>Call for a Free Discovery Session</span>
    </div>
  </div>
</div>

<body <?php body_class(); ?> >