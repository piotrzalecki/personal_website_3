
<?php /* Template Name: Contact*/ ?>

<?php get_header(); ?>

<header class="frontpage" style='background-image: url(<?php echo get_theme_mod('about_banner_image', get_bloginfo('template_url').'/img/background-about.jpg'); ?>);'>
  <section>
    <h1><i class="fas big-icons <?php echo get_theme_mod('box3_icon','fa-user'); ?> fa-lg"></i><?php echo get_theme_mod('about_banner_heading','Banner Heading'); ?></h1>
    <p><?php echo get_theme_mod('about_banner_text','This is homepage banner default text'); ?></p>
  </section>
</header>

<div class="content-wraper row">
  <div class="col-md-4">
    <?php if(is_active_sidebar('sidebar_about')) : ?>
  		<?php dynamic_sidebar('sidebar_about'); ?>
  	<?php endif; ?>
  </div>
  <div class="col-md-8">
    <section class="learing-path">
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

      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
              <?php the_content(); ?>
            </article>

        <?php endwhile; ?>
      <?php endif; ?>
    </section>
  </div>
  <div class="clearfix"></div>
</div>
<?php get_footer(); ?>
