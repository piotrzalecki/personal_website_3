<?php
/*////////////////////////////////
CUSTOMIZER SET UPS
///////////////////////////////*/


function personal_website_customize_register($wp_customize){
/*////////////////////////////////
HOMEPAGE SETTINGS
///////////////////////////////*/

  	$wp_customize->add_section('homepage', array(
  		'title'	=> __('Index Page', 'prsonal_website'),
  		'description'	=> sprintf(__('Options for homepage banner', 'prsonal_website')),
  		'priority'	=> 130
  	));

  	// Heading Setting
  	$wp_customize->add_setting('banner_heading', array(
  		'default'		=> _x('Banner Heading', 'prsonal_website'),
  		'type'			=> 'theme_mod'
  	));

  	// Heading Control
  	$wp_customize->add_control('banner_heading', array(
  		'label'			=> __('Heading', 'prsonal_website'),
  		'section'		=> 'homepage',
  		'priority'		=> 20
  	));

  	// Heading Text Setting
  	$wp_customize->add_setting('banner_text', array(
  		'default'		=> _x('This is homepage banner default text', 'prsonal_website'),
  		'type'			=> 'theme_mod'
  	));

  	// Heading Text Control
  	$wp_customize->add_control('banner_text', array(
  		'label'			=> __('Text', 'prsonal_website'),
  		'section'		=> 'homepage',
  		'priority'		=> 20
  	));


  	// Heading Background Image Setting
  	$wp_customize->add_setting('banner_image', array(
  		'default'		=> get_bloginfo('template_directory').'/img/background-homepage.jpg',
  		'type'			=> 'theme_mod'
  	));

  	// Heading Background Image Control
  	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
  			'label'	=> __('Background Image', 'prsonal_website'),
  			'section'	=> 'homepage',
  			'settings'	=> 'banner_image'
  	)));

/* SETTINGS FOR THREE HOMEPAGE BOXES */

// BOX 1
    // Box 1 Heading Setting
    $wp_customize->add_setting( 'box1_heading', array(
      'default'   => _x('Box 1 Heading', 'prsonal_website'),
      'type'      => 'theme_mod'
    ));

    // Box 1 Heading Control
    $wp_customize->add_control( 'box1_heading', array(
      'label'    => __('Box 1 Heading', 'prsonal_website'),
      'section'  => 'homepage',
      'priority' => 20,
    ));

      // Box 1 Text Setting
    $wp_customize->add_setting( 'box1_text', array(
      'default'              => _x('Maecenas sed diam eget risus varius blandit sit amet non magna.', 'prsonal_website'),
      'type'                 => 'theme_mod'
    ));

    // Box 1 Text Control
    $wp_customize->add_control( 'box1_text', array(
      'label'    => __('Box 1 Text', 'prsonal_website'),
      'section'  => 'homepage',
      'priority' => 20,
    ));

    $wp_customize->add_setting('box1_url', array(
      'default'		=> _x('/', 'prsonal_website'),
      'type'			=> 'theme_mod'
    ));

    // Button URL Control
    $wp_customize->add_control('box1_url', array(
      'label'			=> __('Visit URL', 'prsonal_website'),
      'section'		=> 'homepage',
      'priority'		=> 20
    ));


      // Box 1 Icon Setting
    $wp_customize->add_setting( 'box1_icon', array(
      'default'              => _x('fa-file-code', 'prsonal_website'),
      'type'                 => 'theme_mod'
    ));

    // Box 1 Icon Control
    $wp_customize->add_control( 'box1_icon', array(
      'label'    => __('Box 1 Icon', 'prsonal_website'),
      'section'  => 'homepage',
      'priority' => 20,
    ));


// BOX 2

 	// Box 2 Heading Setting
 	$wp_customize->add_setting( 'box2_heading', array(
 		'default'              => _x('Box 2 Heading', 'prsonal_website'),
 		'type'                 => 'theme_mod'
 	));

 	// Box 2 Heading Control
 	$wp_customize->add_control( 'box2_heading', array(
 		'label'    => __('Box 2 Heading', 'prsonal_website'),
 		'section'  => 'homepage',
 		'priority' => 20,
 	));

  // Box 2 Text Setting
 	$wp_customize->add_setting( 'box2_text', array(
 		'default'              => _x('Maecenas sed diam eget risus varius blandit sit amet non magna.', 'personal_website'),
 		'type'                 => 'theme_mod'
 	));

 	// Box 2 Text Control
 	$wp_customize->add_control( 'box2_text', array(
 		'label'    => __('Box 2 Text', 'personal_website'),
 		'section'  => 'homepage',
 		'priority' => 20,
 	));

  // Button URL Setting
  $wp_customize->add_setting('box2_url', array(
    'default'		=> _x('/', 'prsonal_website'),
    'type'			=> 'theme_mod'
  ));

  // Button URL Control
  $wp_customize->add_control('box2_url', array(
    'label'			=> __('Visit URL', 'prsonal_website'),
    'section'		=> 'homepage',
    'priority'		=> 20
  ));

    // Box 2 Icon Setting
	$wp_customize->add_setting( 'box2_icon', array(
		'default'              => _x('fa-graduation-cap', 'personal_website'),
		'type'                 => 'theme_mod'
	));

	// Box 2 Icon Control
	$wp_customize->add_control( 'box2_icon', array(
		'label'    => __('Box 2 Icon', 'personal_website'),
		'section'  => 'homepage',
		'priority' => 20,
	));


// BOX 3

	// Box 3 Heading Setting
	$wp_customize->add_setting( 'box3_heading', array(
		'default'              => _x('Box 3 Heading', 'personal_website'),
		'type'                 => 'theme_mod'
	));

	// Box 3 Heading Control
	$wp_customize->add_control( 'box3_heading', array(
		'label'    => __('Box 3 Heading', 'personal_website'),
		'section'  => 'homepage',
		'priority' => 20,
	));

  // Box 3 Text Setting
	$wp_customize->add_setting( 'box3_text', array(
		'default'              => _x('Maecenas sed diam eget risus varius blandit sit amet non magna.', 'personal_website'),
		'type'                 => 'theme_mod'
	));

	// Box 3 Text Control
	$wp_customize->add_control( 'box3_text', array(
		'label'    => __('Box 3 Text', 'personal_website'),
		'section'  => 'homepage',
		'priority' => 20,
	));

  // Button URL Setting
  $wp_customize->add_setting('box3_url', array(
    'default'		=> _x('/', 'prsonal_website'),
    'type'			=> 'theme_mod'
  ));

  // Button URL Control
  $wp_customize->add_control('box3_url', array(
    'label'			=> __('Visit URL', 'prsonal_website'),
    'section'		=> 'homepage',
    'priority'		=> 20
  ));

  // Box 3 Icon Setting
	$wp_customize->add_setting( 'box3_icon', array(
		'default'              => _x('fa-user', 'personal_website'),
		'type'                 => 'theme_mod'
	));

	// Box 3 Icon Control
	$wp_customize->add_control( 'box3_icon', array(
		'label'    => __('Box 3 Icon', 'personal_website'),
		'section'  => 'homepage',
		'priority' => 20,
	));


/*////////////////////////////////
  FOOTER SETTINGS
///////////////////////////////*/

  $wp_customize->add_section('footer', array(
  	'title'          => __('Footer', 'personal_website'),
  	'description'    => sprintf( __('Options for Footer', 'personal_website')),
  	'priority'       => 130,
  ));

  // Left Footer Box Setting
  $wp_customize->add_setting( 'footer_text', array(
  	'default'              => _x('Maecenas sed diam eget risus varius blandit sit amet non magna.', 'personal_website'),
  	'type'                 => 'theme_mod'
  ));

  // Left Footer Box Control
  $wp_customize->add_control( 'footer_text', array(
  	'label'    => __('Footer Left Box Text', 'personal_website'),
  	'section'  => 'footer',
  	'priority' => 20,
  ));

  // Facebook URL Setting
  $wp_customize->add_setting('facebook_url', array(
     'default'              => _x('http://www.facebook.com', 'prsonal_website'),
  	 'type'                 => 'theme_mod'
  ));

  // Facebook URL Control
  $wp_customize->add_control( 'facebook_url', array(
     'label'    => __('Facebook URL', 'prsonal_website'),
  	 'section'  => 'footer',
  	 'priority' => 3,
  ));

  // Twitter URL Setting
  $wp_customize->add_setting('twitter_url', array(
     'default'              => _x('http://www.twitter.com', 'prsonal_website'),
     'type'                 => 'theme_mod'
  ));

  // Twitter URL Control
  $wp_customize->add_control( 'twitter_url', array(
     'label'    => __('Twitter URL', 'prsonal_website'),
     'section'  => 'footer',
     'priority' =>4,
  ));

  // Linkedin URL Setting
  $wp_customize->add_setting('linkedin_url', array(
     'default'              => _x('http://www.linkedin.com', 'prsonal_website'),
     'type'                 => 'theme_mod'
  ));

  // Linkedin URL Control
  $wp_customize->add_control( 'linkedin_url', array(
     'label'    => __('LinkedIn URL', 'prsonal_website'),
     'section'  => 'footer',
     'priority' =>3,
   ));

  // G+ URL Setting
  $wp_customize->add_setting('googleplus_url', array(
     'default'              => _x('http://www.googleplus.com', 'prsonal_website'),
     'type'                 => 'theme_mod'
  ));

  // G+ URL Control
  $wp_customize->add_control( 'googleplus_url', array(
     'label'    => __('Google+ URL', 'prsonal_website'),
     'section'  => 'footer',
     'priority' =>4,
  ));

  // Youtube URL Setting
  $wp_customize->add_setting('youtube_url', array(
     'default'              => _x('http://www.youtube.com', 'prsonal_website'),
     'type'                 => 'theme_mod'
  ));

  // Youtube URL Control
  $wp_customize->add_control( 'youtube_url', array(
     'label'    => __('YouTube URL', 'prsonal_website'),
     'section'  => 'footer',
     'priority' =>5,
  ));

  // Github URL Setting
  $wp_customize->add_setting('github_url', array(
    'default'              => _x('http://www.github.com', 'prsonal_website'),
    'type'                 => 'theme_mod'
  ));

  // Github URL Control
  $wp_customize->add_control( 'github_url', array(
    'label'    => __('GitHub URL', 'prsonal_website'),
    'section'  => 'footer',
    'priority' =>5,
  ));




/*//////////////////////////////////////
PORTFOLIO
/////////////////////*/

  $wp_customize->add_section('portfolio', array(
    'title'	=> __('Portfolio page', 'prsonal_website'),
    'description'	=> sprintf(__('Options for portfolio page', 'prsonal_website')),
    'priority'	=> 130
  ));

    // Heading Setting
    $wp_customize->add_setting('portfolio_banner_heading', array(
      'default'		=> _x('Banner Heading', 'prsonal_website'),
      'type'			=> 'theme_mod'
    ));

    // Heading Control
    $wp_customize->add_control('portfolio_banner_heading', array(
      'label'			=> __('Heading', 'prsonal_website'),
      'section'		=> 'portfolio',
      'priority'		=> 20
    ));

    // Text Setting
    $wp_customize->add_setting('portfolio_banner_text', array(
      'default'		=> _x('This is portfolio banner default text', 'prsonal_website'),
      'type'			=> 'theme_mod'
    ));

    // Text Control
    $wp_customize->add_control('portfolio_banner_text', array(
      'label'			=> __('Text', 'prsonal_website'),
      'section'		=> 'portfolio',
      'priority'		=> 20
    ));


    // Background Image Setting
    $wp_customize->add_setting('portfolio_banner_image', array(
      'default'		=> get_bloginfo('template_directory').'/img/background-portfolio.jpg',
      'type'			=> 'theme_mod'
    ));

    // Background Image Control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'portfolio_banner_image', array(
        'label'	=> __('Background Image', 'prsonal_website'),
        'section'	=> 'portfolio',
        'settings'	=> 'banner_image'
    )));


    /*//////////////////////////////////////
    LEARNING PATH
    /////////////////////*/

    $wp_customize->add_section('learningpath', array(
      'title'	=> __('Learning Path page', 'prsonal_website'),
      'description'	=> sprintf(__('Options for learning path page', 'prsonal_website')),
      'priority'	=> 130
    ));

    // Heading Setting
    $wp_customize->add_setting('learningpath_banner_heading', array(
      'default'		=> _x('Banner Heading', 'prsonal_website'),
      'type'			=> 'theme_mod'
    ));

    // Heading Control
    $wp_customize->add_control('learningpath_banner_heading', array(
      'label'			=> __('Heading', 'prsonal_website'),
      'section'		=> 'learningpath',
      'priority'		=> 20
    ));

    // Text Setting
    $wp_customize->add_setting('learningpath_banner_text', array(
      'default'		=> _x('This is learning path banner default text', 'prsonal_website'),
      'type'			=> 'theme_mod'
    ));

    // Text Control
    $wp_customize->add_control('learningpath_banner_text', array(
      'label'			=> __('Text', 'prsonal_website'),
      'section'		=> 'learningpath',
      'priority'		=> 20
    ));


    // Background Image Setting
    $wp_customize->add_setting('learningpath_banner_image', array(
      'default'		=> get_bloginfo('template_directory').'/img/background-learning-path.jpg',
      'type'			=> 'theme_mod'
    ));

    // Background Image Control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'background-learning-path.jpg', array(
        'label'	=> __('Background Image', 'prsonal_website'),
        'section'	=> 'learningpath',
        'settings'	=> 'banner_image'
    )));


    /*/////////////////////
    ABOUT
    /////////////////////*/

    $wp_customize->add_section('about', array(
      'title'	=> __('About page', 'prsonal_website'),
      'description'	=> sprintf(__('Options for about page', 'prsonal_website')),
      'priority'	=> 130
    ));

    // Heading Setting
    $wp_customize->add_setting('about_banner_heading', array(
      'default'		=> _x('Banner Heading', 'prsonal_website'),
      'type'			=> 'theme_mod'
    ));

    // Heading Control
    $wp_customize->add_control('about_banner_heading', array(
      'label'			=> __('Heading', 'prsonal_website'),
      'section'		=> 'about',
      'priority'		=> 20
    ));

    // Text Setting
    $wp_customize->add_setting('about_banner_text', array(
      'default'		=> _x('This is about banner default text', 'prsonal_website'),
      'type'			=> 'theme_mod'
    ));

    // Text Control
    $wp_customize->add_control('about_banner_text', array(
      'label'			=> __('Text', 'prsonal_website'),
      'section'		=> 'about',
      'priority'		=> 20
    ));


    // Background Image Setting
    $wp_customize->add_setting('about_banner_image', array(
      'default'		=> get_bloginfo('template_directory').'/img/background-about.jpg',
      'type'			=> 'theme_mod'
    ));

    // Background Image Control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'background-about.jpg', array(
        'label'	=> __('Background Image', 'prsonal_website'),
        'section'	=> 'about',
        'settings'	=> 'banner_image'
    )));
}

	add_action('customize_register', 'personal_website_customize_register');
?>
