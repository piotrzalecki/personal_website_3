<?php get_header(); ?>
    <header class="frontpage" style='background-image: url(<?php echo get_theme_mod('banner_image', get_bloginfo('template_url').'/img/background-homepage.jpg'); ?>);'>
      <section>
        <h1><?php echo get_theme_mod('banner_heading','Banner Heading'); ?></h1>
        <p><?php echo get_theme_mod('banner_text','This is homepage banner default text'); ?></p>
      </section>
    </header>

    <section class="main">
    <div class="row">
      <div class="main-icon main-icon-small-screen">
        <i class="fas <?php echo get_theme_mod('box1_icon','fa-file-code'); ?> fa-10x big-icons"></i>
      </div>
      <div class="col-sm-6">
        <div class="main-content-left">
          <h3><?php echo get_theme_mod('box1_heading','Box 1 Heading'); ?></h3>
          <p><?php echo get_theme_mod('box1_text','Maecenas sed diam eget risus varius blandit sit amet non magna.') ?></p>
          <a href="<?php echo get_theme_mod('box1_url','/'); ?>" class="button">Visit</a>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="main-icon main-icon-bigger-screen">
          <i class="fas <?php echo get_theme_mod('box1_icon','fa-file-code'); ?> fa-10x big-icons"></i>
        </div>
      </div>
    </div>
    <div class="row">

    <div class="col-sm-6">
      <div class="main-icon">
        <i class="fas <?php echo get_theme_mod('box2_icon','fa-graduation-cap'); ?> fa-10x big-icons"></i>
      </div>
  </div>
  <div class="col-sm-6">

      <div class="main-content-right">
        <h3><?php echo get_theme_mod('box2_heading','Box 2 Heading'); ?></h3>
        <p><?php echo get_theme_mod('box2_text','Maecenas sed diam eget risus varius blandit sit amet non magna.') ?></p>
        <a href="<?php echo get_theme_mod('box2_url','/'); ?>" class="button">Visit</a>
      </div>
    </div>
  </div>
  <div class="row">
      <div class="main-icon main-icon-small-screen">
        <i class="fas big-icons <?php echo get_theme_mod('box3_icon','fa-user'); ?> fa-10x"></i>
      </div>
    <div class="col-sm-6">
      <div class="main-content-left">
        <h3><?php echo get_theme_mod('box3_heading','Box 3 Heading'); ?></h3>
        <p><?php echo get_theme_mod('box3_text','Maecenas sed diam eget risus varius blandit sit amet non magna.') ?></p>
        <a href="<?php echo get_theme_mod('box3_url','/'); ?>" class="button">Visit</a>
      </div>
    </div>
      <div class="col-sm-6">
      <div class="main-icon main-icon-bigger-screen">
        <i class="fas big-icons <?php echo get_theme_mod('box3_icon','fa-user'); ?> fa-10x"></i>
      </div>
    </div>
    </div>
    </section>

<?php get_footer(); ?>
