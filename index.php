<?php get_header(); ?>

  <?php if(!have_posts()) : ?>
    <?php echo apautop('Sorry, no posts were found'); ?>
  <?php endif; ?>

<?php get_footer(); ?>
