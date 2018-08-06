<footer >
  <div class="row">
    <section class="col-md-4">
      <p><?php echo get_theme_mod('footer_text','Maecenas sed diam eget risus varius blandit sit amet non magna.'); ?></p>
    </section>

    <section class="col-md-4">
      <h4>&copy; <?php bloginfo('author'); ?> <?php echo date('Y'); ?></h4>
    </section>

    <section class="col-md-4">
      <ul class="footer-social">
        <?php if(get_theme_mod('facebook_url', 'http://www.facebook.com') != '') : ?>
        <a href="<?php echo get_theme_mod('facebook_url', 'http://www.facebook.com'); ?>"><i class="fab fa-facebook fa-2x"></i></a>
        <?php endif; ?>

        <?php if(get_theme_mod('twitter_url', 'http://www.twitter.com') != '') : ?>
        <a href="<?php echo get_theme_mod('twitter_url', 'http://www.twitter.com'); ?>"><i class="fab fa-twitter fa-2x"></i></a>
        <?php endif; ?>

        <?php if(get_theme_mod('linkedin_url', 'http://www.linkedin.com') != '') : ?>
        <a href="<?php echo get_theme_mod('linkedin_url', 'http://www.linkedin.com'); ?>"><i class="fab fa-linkedin fa-2x"></i></a>
        <?php endif; ?>

        <?php if(get_theme_mod('googleplus_url', 'http://www.linkedin.com') != '') : ?>
        <a href="<?php echo get_theme_mod('googleplus_url', 'http://www.googleplus.com'); ?>"><i class="fab fa-google-plus fa-2x"></i></a>
        <?php endif; ?>

        <?php if(get_theme_mod('youtube_url', 'http://www.youtube.com') != '') : ?>
        <a href="<?php echo get_theme_mod('youtube_url', 'http://www.youtube.com'); ?>"><i class="fab fa-youtube fa-2x"></i></a>
        <?php endif; ?>

        <?php if(get_theme_mod('github_url', 'http://www.github.com') != '') : ?>
        <a href="<?php echo get_theme_mod('github_url', 'http://www.github.com'); ?>"><i class="fab fa-github-square fa-2x"></i></a>
        <?php endif; ?>
      </ul>

    </section>
  </div>
</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
