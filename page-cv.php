
<?php /* Template Name: CV*/ ?>

<?php get_header(); ?>

<header class="frontpage" style='background-image: url(<?php echo get_theme_mod('about_banner_image', get_bloginfo('template_url').'/img/background-about.jpg'); ?>);'>
  <section>
    <h1><?php echo get_theme_mod('about_banner_heading','Banner Heading'); ?></h1>
    <p><?php echo get_theme_mod('about_banner_text','This is homepage banner default text'); ?></p>
  </section>
</header>

<section class="cv row">
  <div class="col-md-4">
    <?php if(is_active_sidebar('sidebar_cv')) : ?>
  		<?php dynamic_sidebar('sidebar_cv'); ?>
  	<?php endif; ?>
  </div>
  <section class="col-md-8">
    <?php if(page_is_parent() || $post->post_parent > 0) : ?>
      <nav class="sub-nav-about">
        <ul>
          <li><a href="<?php echo get_the_permalink(get_top_parent()); ?>"><?php echo get_the_title(get_top_parent()); ?></a></li>
          <?php
          $args = array(
              'child_of' => get_top_parent(),
              'title_li' => ''
            );?>
          <?php wp_list_pages($args); ?>
        </ul>
      </nav>
    <?php endif; ?>
    <h3 id="employment-history">Work experience <small class="cv-version"><a id="full-employment-history">(Show full employment history)</a><a id="short-employment-history">(Show short employment history)</a></small></h3>

    <?php while(have_posts()) : the_post(); ?>
      <?php the_content(); ?>

    <?php endwhile; ?>
  </section>
</section>
<?php get_footer(); ?>
