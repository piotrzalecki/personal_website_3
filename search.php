<?php get_header(); ?>

<header class="frontpage" style="background-image: url('<?php echo get_bloginfo('template_directory').'/img/background-search.jpg' ?>')">
  <section>
    <h1><i class="fas big-icons fa-search fa-lg"></i>Search results for: <?php echo get_search_query(); ?></h1>
  </section>
</header>


<section class="portfolio">
  <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
      <a href="<?php the_permalink(); ?>">
        <article class="portfolio-item">
          <?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('portfolio-thumb'); ?>
          <?php endif; ?>
          <h3><?php the_title(); ?></h3>
          <p><?php the_excerpt(); ?></p>
        </article>
      </a>
    <?php endwhile; ?>
	<?php else: ?>
    	<?php echo apautop('Sorry, no posts were found'); ?>
  <?php endif; ?>
</section>
</div>
<?php get_footer(); ?>
