<?php
function adv_theme_support(){
  // Featured Image Support
  add_theme_support('post-thumbnails');
  add_image_size('portfolio-thumb', 200, 150);
  add_image_size('portfolio-thumb-big', 400, 300);


  // Nav Menus
  register_nav_menus(array(
    'primary' 	=> __('Primary Menu'),
    'about_menu' => __('About Menu')

  ));

  add_theme_support( 'custom-logo');
  // add_theme_support('post-formats', array('aside', 'gallery','acme_product'));

}



add_filter( 'get_custom_logo', 'change_logo_class' );


add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}


function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo', 'logo-image', $html );


    return $html;
}

add_action('after_setup_theme', 'adv_theme_support');

function init_widgets($id){
  register_sidebar(array(
    'name'	=> 'Portfolio Sidebar',
    'id'	=> 'sidebar_portfolio',
    'before_widget'	=> '<aside>',
    'after_widget'	=> '</aside>',
    'before_title'	=> '<h3>',
    'after_title'	=> '</h3>'
  ));

  register_sidebar(array(
    'name'	=> 'Learning Path Sidebar',
    'id'	=> 'sidebar_learningpath',
    'before_widget'	=> '<aside>',
    'after_widget'	=> '</aside>',
    'before_title'	=> '<h3>',
    'after_title'	=> '</h3>'
  ));

  register_sidebar(array(
    'name'	=> 'About Sidebar',
    'id'	=> 'sidebar_about',
    'before_widget'	=> '<aside>',
    'after_widget'	=> '</aside>',
    'before_title'	=> '<h3>',
    'after_title'	=> '</h3>'
  ));

  register_sidebar(array(
    'name'	=> 'CV Sidebar',
    'id'	=> 'sidebar_cv',
    'before_widget'	=> '<aside>',
    'after_widget'	=> '</aside>',
    'before_title'	=> '<h3>',
    'after_title'	=> '</h3>'
  ));


}

add_action('widgets_init','init_widgets');


// search all taxonomies, based on: http://projects.jesseheap.com/all-projects/wordpress-plugin-tag-search-in-wordpress-23

function atom_search_where($where){
  global $wpdb;
  if (is_search())
    $where .= "OR (t.name LIKE '%".get_search_query()."%' AND {$wpdb->posts}.post_status = 'publish')";
  return $where;
}

function atom_search_join($join){
  global $wpdb;
  if (is_search())
    $join .= "LEFT JOIN {$wpdb->term_relationships} tr ON {$wpdb->posts}.ID = tr.object_id INNER JOIN {$wpdb->term_taxonomy} tt ON tt.term_taxonomy_id=tr.term_taxonomy_id INNER JOIN {$wpdb->terms} t ON t.term_id = tt.term_id";
  return $join;
}

function atom_search_groupby($groupby){
  global $wpdb;

  // we need to group on post ID
  $groupby_id = "{$wpdb->posts}.ID";
  if(!is_search() || strpos($groupby, $groupby_id) !== false) return $groupby;

  // groupby was empty, use ours
  if(!strlen(trim($groupby))) return $groupby_id;

  // wasn't empty, append ours
  return $groupby.", ".$groupby_id;
}

add_filter('posts_where','atom_search_where');
add_filter('posts_join', 'atom_search_join');
add_filter('posts_groupby', 'atom_search_groupby');


/*
FUNCTIONS FOR ABOUT SUBMENU
*/
function get_top_parent(){
  global $post;
  if($post->post_parent){
    $ancestors = get_post_ancestors($post->ID);
    return $ancestors[0];
  }

  return $post->ID;
}

function page_is_parent(){
  global $post;
  $pages = get_pages('child_of='.$post->ID);
  return count($pages);
}

add_filter('jpeg_quality', function($arg){return 100;});

require get_template_directory() . '/inc/customizer.php';
 ?>
