<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="Piotr,ZaZa&#x142&#x119;ckicki,Zalecki,CV,curriculum, portfolio">
    <meta name="author" content="Piotr Za&#x142&#x119;cki">
    <title><?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>
  </head>
  <body>
    <nav>
      <div class="nav-left">
        <?php if(has_custom_logo()) : ?>
          <?php the_custom_logo(); ?>
        <?php else : ?>
          <h1><?php bloginfo('name'); ?></h1>
        <?php endif; ?>
      </div>

      <div class="nav-right">
        <?php $args = array(
          'theme_location' => 'primary'
        );
        wp_nav_menu($args); ?>

        <form class="nav-search" action="<?php echo home_url(); ?>" method="get">
          <input type="text" name="s"  placeholder="Search...">
        </form>
      </div>

      <div class="mobile-menu">
        <i class="fa fa-bars mobile-menu-switcher big-icons"></i>
      </div>
    </nav>
