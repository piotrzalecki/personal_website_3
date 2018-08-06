
<?php /* Template Name: Portfolio Page */ ?>

<?php get_header(); ?>

<header class="frontpage" style='background-image: url(<?php echo get_theme_mod('portfolio_banner_image', get_bloginfo('template_url').'/img/background-portfolio.jpg'); ?>);'>
  <section>
    <h1><i class="fas big-icons <?php echo get_theme_mod('box1_icon','fa-file-code'); ?> fa-lg"></i><?php echo get_theme_mod('portfolio_banner_heading','Banner Heading'); ?></h1>
    <p><?php echo get_theme_mod('portfolio_banner_text','This is homepage banner default text'); ?></p>
  </section>
</header>

<div class="row">
  <div class="col-md-4">
    <?php if(is_active_sidebar('sidebar_portfolio')) : ?>
  		<?php dynamic_sidebar('sidebar_portfolio'); ?>
  	<?php endif; ?>
  </div>
  <div class="col-md-8">
    <section class="portfolio">
      <?php $portfolio_query = new WP_Query(array('category_name'	=> 'portfolio'));
      $counter = 1;
      ?>
  	  <?php while($portfolio_query->have_posts()) : $portfolio_query->the_post(); ?>
      <?php if($counter==1 || ($counter-1)%3 == 0 ){?>

      <div class="row">
      <?php } ?>
        <div class="col-md-4">
          <a href="<?php the_permalink(); ?>">
            <article class="portfolio-item">
              <?php if(has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('portfolio-thumb'); ?>
              <?php endif; ?>
              <h3><?php the_title(); ?></h3>
              <?php the_excerpt(); ?>
            </article>
          </a>
        </div>
      <?php if($counter==3 || $counter%3 == 0 ){?>
      </div>
      <?php } ?>
      <?php
        $counter++;
        endwhile;
        if($counter==2){?>
        </div>
        <?php } ?>
    </section>
  </div>
</div>
<?php get_footer(); ?>
