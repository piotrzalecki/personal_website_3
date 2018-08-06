
<?php /* Template Name: Learning Path */ ?>

<?php get_header(); ?>

<header class="frontpage" style='background-image: url(<?php echo get_theme_mod('learningpath_banner_image', get_bloginfo('template_url').'/img/background-learning-path.jpg'); ?>);'>
  <section>
    <h1><i class="fas big-icons <?php echo get_theme_mod('box2_icon','fa-graduation-cap'); ?> fa-lg"></i><?php echo get_theme_mod('learningpath_banner_heading','Banner Heading'); ?></h1>
    <p><?php echo get_theme_mod('learningpath_banner_text','This is homepage banner default text'); ?></p>
  </section>
</header>

<div class="row">
  <div class="col-md-4">
    <?php if(is_active_sidebar('sidebar_learningpath')) : ?>
      <?php dynamic_sidebar('sidebar_learningpath'); ?>
    <?php endif; ?>
  </div>
  <div class="col-md-8">
    <section class="learing-path">
      <section>
        <table class="learning-path">
          <tr>
            <th>DATE</th>
            <th>DESCRIPTION</th>
            <th class="bigger-screen"></th>
          </tr>

          <?php $learningpath_query = new WP_Query(array('category_name'	=> 'learningpath')); ?>
        	<?php while($learningpath_query->have_posts()) : $learningpath_query->the_post(); ?>
            <tr>
              <td><h4><?php the_title(); ?></h4></td>
              <td>
                <?php the_content(); ?>
                <?php the_post_thumbnail('medium', ['class'=>'certyficate small-screen', 'id'=>'myImg']); ?>
              </td>
              <td class="bigger-screen"><?php the_post_thumbnail('medium', ['class'=>'certyficate', 'id'=>'myImg']); ?></td>
            </tr>
          <?php endwhile; ?>
        </table>
      </section>
    </section>
  </div>
  <div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
  </div>
</div>
<?php get_footer(); ?>
