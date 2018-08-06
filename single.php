<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>
  <?php if(in_category('portfolio',$post)): ?>

    <section class="portfolio-single">
      <div class="row">
          <div class="col-md-8">


  	    <section class="portfolio-single-main">
          <a href="javascript:history.go(-1)"><i class="fas fa-arrow-circle-left fa-2x"></i></a>
  	        <article >
              <h2><?php the_title(); ?></h2>
              <?php if(has_post_thumbnail()) : ?>
  	            <?php the_post_thumbnail('portfolio-thumb-big'); ?>
              <?php endif; ?>

              <h3>Used technologies:
              <?php $tags = wp_get_post_tags($post->ID);
                foreach($tags as $tag){
                    echo '<a href="'. get_tag_link($tag->term_id). '">';
                    switch($tag->slug){
                      case 'html5':
                        echo'<i class="fab fa-html5"></i></a>';
                        break;

                      case 'css3':
                        echo'<i class="fab fa-css3-alt"></i></a>';
                        break;

                      case 'js':
                        echo'<i class="fab fa-js-square"></i></a>';
                        break;

                      case 'php':
                        echo'<i class="fab fa-php"></i></a>';
                        break;

                      case 'java':
                        echo'<i class="fab fa-java"></i></a>';
                        break;

                      case 'laravel':
                        echo'<i class="fab fa-laravel"></i></a>';
                        break;

                      case 'aws':
                        echo'<i class="fab fa-aws"></i></a>';
                        break;

                      case 'linux':
                        echo'<i class="fab fa-linux"></i></a>';
                        break;

                    }
                }?>
            	</h3>
              <br>
              <h3>Description:</h3>
              <p><?php the_content(); ?></p>
            </article>
  	    </section>
      </div>
      <div class="col-md-4">
        <section class="portfolio-single-aside">
          <article>
            <h2>Other projects:</h2>
            <ul>
  						<?php $portfolio_query = new WP_Query(array('category_name'	=> 'portfolio', 'post__not_in'=> [$post->ID])); ?>
  						<?php while($portfolio_query->have_posts()) : $portfolio_query->the_post(); ?>
    	          <a href="<?php the_permalink() ?>"><li><?php the_title(); ?></li></a>
  						<?php endwhile; ?>
            </ul>
          </article>
        </section>
      </div>
    </div>
  </section>

	<?php elseif(in_category('learningpath',$post)): ?>

  <section class="learing-path">
    <a href="javascript:history.go(-1)"><i class="fas fa-arrow-circle-left fa-2x"></i></a>
      <section>
	      <table class="learning-path">
          <tr>
  	        <th>DATE</th>
            <th>DESCRIPTION</th>
            <th class="bigger-screen"></th>
          </tr>
	        <tr>
  	        <td><h4><?php the_title(); ?></h4></td>
    	      <td>
	  	      <?php the_content(); ?>
      	    <?php the_post_thumbnail('medium', ['class'=>'certyficate small-screen', 'id'=>'myImg']); ?>
		      </td>
      	<td class="bigger-screen"><?php the_post_thumbnail('medium', ['class'=>'certyficate', 'id'=>'myImg']); ?></td>
      </tr>
		</table>
	</section>

<?php endif; ?>
<?php endwhile; ?>

<?php get_footer(); ?>
