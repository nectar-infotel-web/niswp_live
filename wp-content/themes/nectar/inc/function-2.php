<?php

/****************CUSTOMIZER API SETTINGS*******************/

function firstest_news_theme_customize_register( $wp_customize ) {

   // White logo option under Site Entity section
  $wp_customize->add_setting('nectar_white_logo');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nectar_white_logo', array(
   'label'    =>esc_html( __('Nectar white logo', 'nectar')),
   'section'  => 'title_tagline',
   'setting' => 'nectar_white_logo',
   'priority' => 1
 )));

  // Add Theme Options Panel.
  $wp_customize->add_panel( 'theme_option_panel',
    array(
      'title'      => esc_html__( 'Home Page sections', 'nectar' ),
      'priority'   => 20,
      'capability' => 'edit_theme_options',
    ));

  // Section Start for how we work
  $wp_customize->add_section( 'how_we_work_section',
   array(
    'title' => __('How We Work', 'nectar'),
    'description' => sprintf(__('How We Work Contents', 'nectar')),
    'priority' => 130,
    'capability' => 'edit_theme_options',
    'panel'      => 'theme_option_panel' 
  ));

  // Settings for bg image
  $wp_customize->add_setting('how_we_work_settings');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'how_we_work_settings', array(
   'label'    =>esc_html( __('Image', 'nectar')),
   'section'  => 'how_we_work_section',
   'setting' => 'how_we_work_settings',
   'priority' => 1
 )));

  // Settings for Title
  $wp_customize->add_setting('how_we_work_heading');
  $wp_customize->add_control('how_we_work_heading', array(
   'label'    => esc_html(__('How We Work Heading', 'nectar')),
   'section'  => 'how_we_work_section',
   'priority' => 2
 ));
  // Settings for Content
  $wp_customize->add_setting('how_we_work_content');
  $wp_customize->add_control('how_we_work_content', array(
   'label'    => esc_html(__('How We Work Description', 'nectar')),
   'section'  => 'how_we_work_section',
   'priority' => 3,
   'type' => 'textarea',
   'sanitize_callback' => 'themeslug_sanitize_content',
 ));

   // Settings for URL
  $wp_customize->add_setting('how_we_work_link', array(
    'sanitize_callback' => 'themeslug_sanitize_url',
  ));
  $wp_customize->add_control('how_we_work_link', array(
   'label'    => esc_html(__('Button Link', 'nectar')),
   'section'  => 'how_we_work_section',
   'priority' => 4,
   'type' => 'url',
   'input_attrs' => array(
    'placeholder' => __( 'http://www.google.com' ),
  ),
 ));
  function themeslug_sanitize_url( $url ) {
    return esc_url_raw( $url );
  }
  function themeslug_sanitize_content($content){
    return $content;
  }

   // Settings for button text
  $wp_customize->add_setting('how_we_work_link_text');
  $wp_customize->add_control('how_we_work_link_text', array(
   'label'    => esc_html(__('Button Text', 'nectar')),
   'section'  => 'how_we_work_section',
   'priority' => 4,
   'type' => 'text',
   'input_attrs' => array(
    'placeholder' => __( 'KNOW MORE' ),
  ),
 ));


  // Section for Our partnerhip
  $wp_customize->add_section('partnership', array(
   'title' => __('Our Partnership', 'nectar'),
   'description' => sprintf(__('Options for showcase', 'nectar')),
   'priority' => 130,
   'capability' => 'edit_theme_options',
   'panel'      => 'theme_option_panel' 
 ));

  // Settings for partnership image
  $wp_customize->add_setting('partnership_img');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'partnership_img', array(
   'label'    =>esc_html( __('Partnership bg Image', 'nectar')),
   'section'  => 'partnership',
   'setting' => 'partnership_img',
   'priority' => 1
 )));

  // settings partnership heading
  $wp_customize->add_setting('partnership_head');
  $wp_customize->add_control('partnership_head', array(
   'label'    => esc_html(__('Partnership Heading', 'nectar')),
   'section'  => 'theme-option',
   'priority' => 2,
   'type' => "text",
   'input_attrs' => array(
    'placeholder' => __( 'Our Partnerships' ),
  ),
   'section'  => 'partnership',
 ));

  // Section Start for Indusries We serve
  $wp_customize->add_section( 'indus_we_serve_section',
   array(
    'title' => __('Indusries We serve', 'nectar'),
    'description' => sprintf(__('Indusries We serve Contents', 'nectar')),
    'priority' => 130,
    'capability' => 'edit_theme_options',
    'panel'      => 'theme_option_panel' 
  ));

  // Settings for bg image
  $wp_customize->add_setting('indus_we_serve_img');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'indus_we_serve_img', array(
   'label'    =>esc_html( __('Image', 'nectar')),
   'section'  => 'indus_we_serve_section',
   'setting' => 'indus_we_serve_img',
   'priority' => 1
 )));

  // Settings for Title
  $wp_customize->add_setting('indus_we_serve_heading');
  $wp_customize->add_control('indus_we_serve_heading', array(
   'label'    => esc_html(__('Industry we serve Heading', 'nectar')),
   'section'  => 'indus_we_serve_section',
   'priority' => 2
 ));
  // Settings for Content
  $wp_customize->add_setting('indus_we_serve_content');
  $wp_customize->add_control('indus_we_serve_content', array(
   'label'    => esc_html(__('Industry we serve Description', 'nectar')),
   'section'  => 'indus_we_serve_section',
   'priority' => 3,
   'type' => 'textarea',
   'sanitize_callback' => 'themeslug_sanitize_content',
 ));

   // Settings for URL
  $wp_customize->add_setting('indus_we_serve_link', array(
    'sanitize_callback' => 'themeslug_sanitize_url',
  ));
  $wp_customize->add_control('indus_we_serve_link', array(
   'label'    => esc_html(__('Button Link', 'nectar')),
   'section'  => 'indus_we_serve_section',
   'priority' => 4,
   'type' => 'url',
   'input_attrs' => array(
    'placeholder' => __( 'http://www.google.com' ),
  ),
 ));
  // Settings for button text
  $wp_customize->add_setting('indus_we_serve_link_text');
  $wp_customize->add_control('indus_we_serve_link_text', array(
   'label'    => esc_html(__('Button Text', 'nectar')),
   'section'  => 'indus_we_serve_section',
   'priority' => 4,
   'type' => 'text',
 ));

  // Section Start for Great place to work 
  $wp_customize->add_section( 'great_place_to_work_section',
   array(
    'title' => __('Great place to work', 'nectar'),
    'description' => sprintf(__('Great place to work Contents', 'nectar')),
    'priority' => 130,
    'capability' => 'edit_theme_options',
    'panel'      => 'theme_option_panel' 
  ));

  // Settings for bg image
  $wp_customize->add_setting('great_place_to_work');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'great_place_to_work', array(
   'label'    =>esc_html( __('Image', 'nectar')),
   'section'  => 'great_place_to_work_section',
   'setting' => 'great_place_to_work',
   'priority' => 1
 )));

  // Settings for Title
  $wp_customize->add_setting('great_place_to_heading');
  $wp_customize->add_control('great_place_to_heading', array(
   'label'    => esc_html(__('Great place to work Heading', 'nectar')),
   'section'  => 'great_place_to_work_section',
   'priority' => 2
 ));
  // Settings for Content
  $wp_customize->add_setting('great_place_to_content');
  $wp_customize->add_control('great_place_to_content', array(
   'label'    => esc_html(__('Great place to work Description', 'nectar')),
   'section'  => 'great_place_to_work_section',
   'priority' => 3,
   'type' => 'textarea',
   'sanitize_callback' => 'themeslug_sanitize_content',
 ));

   // Settings for URL
  $wp_customize->add_setting('great_place_to_link', array(
    'sanitize_callback' => 'themeslug_sanitize_url',
  ));
  $wp_customize->add_control('great_place_to_link', array(
   'label'    => esc_html(__('Button Link', 'nectar')),
   'section'  => 'great_place_to_work_section',
   'priority' => 4,
   'type' => 'url',
   'input_attrs' => array(
    'placeholder' => __( 'http://www.google.com' ),
  ),
 ));
  // Settings for button text
  $wp_customize->add_setting('great_place_to_link_text');
  $wp_customize->add_control('great_place_to_link_text', array(
   'label'    => esc_html(__('Button Text', 'nectar')),
   'section'  => 'great_place_to_work_section',
   'priority' => 4,
   'type' => 'text',
 ));

  // Lets Talk about your project section
  $wp_customize->add_section( 'lets_talk_about_pjt_section',
   array(
    'title' => __('Lets Talk about your project', 'nectar'),
    'description' => sprintf(__('Lets Talk about your project Contents', 'nectar')),
    'priority' => 130,
    'capability' => 'edit_theme_options',
    'panel'      => 'theme_option_panel' 
  ));

  // Settings for bg image
  $wp_customize->add_setting('lets_talk_about_pjt_bg');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'lets_talk_about_pjt_bg', array(
   'label'    =>esc_html( __('Image', 'nectar')),
   'section'  => 'lets_talk_about_pjt_section',
   'setting' => 'lets_talk_about_pjt_bg',
   'priority' => 1
 )));

  // Settings for Title
  $wp_customize->add_setting('lets_talk_about_pjt_heading');
  $wp_customize->add_control('lets_talk_about_pjt_heading', array(
   'label'    => esc_html(__('Lets Talk about your project Heading', 'nectar')),
   'section'  => 'lets_talk_about_pjt_section',
   'priority' => 2
 ));
  // Settings for Content
  $wp_customize->add_setting('lets_talk_about_pjt_content');
  $wp_customize->add_control('lets_talk_about_pjt_content', array(
   'label'    => esc_html(__('Contact form shortcode', 'nectar')),
   'section'  => 'lets_talk_about_pjt_section',
   'priority' => 3,
   'type' => 'textarea',
   'sanitize_callback' => 'themeslug_sanitize_content',
 ));

   // solution section
  $wp_customize->add_section( 'solution_section',
   array(
    'title' => __('Solution', 'nectar'),
    'description' => sprintf(__('Enterprise solutions Contents', 'nectar')),
    'priority' => 130,
    'capability' => 'edit_theme_options',
    'panel'      => 'theme_option_panel' 
  ));

  // Settings for bg image
  $wp_customize->add_setting('solution_section_bg');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'solution_section_bg', array(
   'label'    =>esc_html( __('Image', 'nectar')),
   'section'  => 'solution_section',
   'setting' => 'solution_section_bg',
   'priority' => 1
 )));

  // Settings for Title
  $wp_customize->add_setting('solution_heading');
  $wp_customize->add_control('solution_heading', array(
   'label'    => esc_html(__('Solution Heading', 'nectar')),
   'section'  => 'solution_section',
   'priority' => 2
 ));
  

  // Section Start for Home page all titles settings
  $wp_customize->add_section( 'Home page Title and contents',
    array(
      'title' => __('Home page Titles and Contents', 'nectar'),
      'description' => sprintf(__('Home page titles and sub title contents', 'nectar')),
      'priority' => 130,
      'capability' => 'edit_theme_options',
      'panel'      => 'theme_option_panel' 
    ));

  // Section start for Our Product
  // Settings for Title
  $wp_customize->add_setting('our_product_main_title_heading');
  $wp_customize->add_control('our_product_main_title_heading', array(
    'label'    => esc_html(__('Our Product Main title', 'nectar')),
    'section'  => 'Home page Title and contents',
    'priority' => 2
  ));
  // Settings for sub Title
  $wp_customize->add_setting('our_product_sub_title_heading');
  $wp_customize->add_control('our_product_sub_title_heading', array(
   'label'    => esc_html(__('Our Product Sub title', 'nectar')),
   'section'  => 'Home page Title and contents',
   'priority' => 2
 ));
  
  // Section start for Certificates
  // Settings for Title
  $wp_customize->add_setting('certificates_title_heading');
  $wp_customize->add_control('certificates_title_heading', array(
    'label'    => esc_html(__('Certificates Title', 'nectar')),
    'section'  => 'Home page Title and contents',
    'priority' => 2
  ));

  // Section start for Case Studies
  // Settings for Title
  $wp_customize->add_setting('case_studies_title_heading');
  $wp_customize->add_control('case_studies_title_heading', array(
    'label'    => esc_html(__('Case Studies Title', 'nectar')),
    'section'  => 'Home page Title and contents',
    'priority' => 2
  ));

  // Settings for Title
  $wp_customize->add_setting('technologies_title_heading');
  $wp_customize->add_control('technologies_title_heading', array(
    'label'    => esc_html(__('Technologies Title', 'nectar')),
    'section'  => 'Home page Title and contents',
    'priority' => 10
  ));

   // Settings for Title
  $wp_customize->add_setting('solutions_title_heading');
  $wp_customize->add_control('solutions_title_heading', array(
    'label'    => esc_html(__('Solution Title', 'nectar')),
    'section'  => 'Home page Title and contents',
    'priority' => 11
  ));

  // Section start for Insights & Newsrooms
  // Settings for Title
  $wp_customize->add_setting('insights_newrooms_title_heading');
  $wp_customize->add_control('insights_newrooms_title_heading', array(
   'label'    => esc_html(__('Insights & Newsrooms Title', 'nectar')),
   'section'  => 'Home page Title and contents',
   'priority' => 2
 ));
  
  // Section start for Testimonials
  // Settings for Title
  $wp_customize->add_setting('testimonial_main_title_heading');
  $wp_customize->add_control('testimonial_main_title_heading', array(
    'label'    => esc_html(__('Testimonials Main title', 'nectar')),
    'section'  => 'Home page Title and contents',
    'priority' => 2
  ));
  // Settings for sub Title
  $wp_customize->add_setting('testimonial_sub_title_heading');
  $wp_customize->add_control('testimonial_sub_title_heading', array(
    'label'    => esc_html(__('Testimonials Sub title', 'nectar')),
    'section'  => 'Home page Title and contents',
    'priority' => 2
  ));

  // Section Start for Get Our Newsletter
  $wp_customize->add_section( 'Get Our Newsletter',
    array(
      'title' => __('Get Our Newsletter', 'nectar'),
      'description' => sprintf(__('Get Our Newsletter titles and sub title', 'nectar')),
      'priority' => 130,
      'capability' => 'edit_theme_options',
      'panel'      => 'theme_option_panel' 
    ));
  
  // Settings for Title
  $wp_customize->add_setting('get_our_newsletter_title_heading');
  $wp_customize->add_control('get_our_newsletter_title_heading', array(
    'label'    => esc_html(__('Get Our Newsletter Title', 'nectar')),
    'section'  => 'Get Our Newsletter',
    'priority' => 2
  ));
  // Settings for contents
  $wp_customize->add_setting('get_our_newsletter_content');
  $wp_customize->add_control('get_our_newsletter_content', array(
   'label'    => esc_html(__('Get Our Newsletter Contents', 'nectar')),
   'section'  => 'Get Our Newsletter',
   'priority' => 3,
   'type' => 'textarea',
   'sanitize_callback' => 'themeslug_sanitize_content',
 ));

  // Social media links section
  $wp_customize->add_section( 'social_media_links',
    array(
     'title' => __('Social Media Links', 'nectar'),
     'description' => sprintf(__('Enter links for various social media', 'nectar')),
     'capability' => 'edit_theme_options',
     'panel'      => '' 
   ));

  // Settings for facebook Link
  $wp_customize->add_setting('fb_link', array(
    'sanitize_callback' => 'themeslug_sanitize_url',
  ));
  $wp_customize->add_control('fb_link', array(
   'label'    => esc_html(__('Facebook Link', 'nectar')),
   'section'  => 'social_media_links',
   'priority' => 1,
   'type' => 'url',
   'input_attrs' => array(
    'placeholder' => __( 'https://www.facebook.com/' ),
  ),
 ));

  // Settings for linkedin Link
  $wp_customize->add_setting('linkedin_link', array(
    'sanitize_callback' => 'themeslug_sanitize_url',
  ));
  $wp_customize->add_control('linkedin_link', array(
   'label'    => esc_html(__('Linkedin Link', 'nectar')),
   'section'  => 'social_media_links',
   'priority' => 2,
   'type' => 'url',
   'input_attrs' => array(
    'placeholder' => __( 'https://www.linkedin.com/' ),
  ),
 ));

  // Settings for Instagram Link
  $wp_customize->add_setting('insta_link', array(
    'sanitize_callback' => 'themeslug_sanitize_url',
  ));
  $wp_customize->add_control('insta_link', array(
   'label'    => esc_html(__('Instagram Link', 'nectar')),
   'section'  => 'social_media_links',
   'priority' => 3,
   'type' => 'url',
   'input_attrs' => array(
    'placeholder' => __( 'https://www.instagram.com/' ),
  ),
 ));

  // Settings for Twitter Link
  $wp_customize->add_setting('twitter_link', array(
    'sanitize_callback' => 'themeslug_sanitize_url',
  ));
  $wp_customize->add_control('twitter_link', array(
   'label'    => esc_html(__('Twitter Link', 'nectar')),
   'section'  => 'social_media_links',
   'priority' => 4,
   'type' => 'url',
   'input_attrs' => array(
    'placeholder' => __( 'https://twitter.com/' ),
  ),
 ));

  // Settings for Youtube Link
  $wp_customize->add_setting('youtube_link', array(
    'sanitize_callback' => 'themeslug_sanitize_url',
  ));
  $wp_customize->add_control('youtube_link', array(
   'label'    => esc_html(__('Youtube Link', 'nectar')),
   'section'  => 'social_media_links',
   'priority' => 5,
   'type' => 'url',
   'input_attrs' => array(
    'placeholder' => __( 'https://www.youtube.com/' ),
  ),
 ));
  
  
  // Banner button links and text section
  $wp_customize->add_section( 'banner_buttons',
    array(
     'title' => __('Banner Buttons', 'nectar'),
     'description' => sprintf(__('Banner button texts and links', 'nectar')),
     'capability' => 'edit_theme_options',
     'panel'      => '' 
   ));

  // Settings for get in touch Link
  $wp_customize->add_setting('getintouch', array(
    'sanitize_callback' => 'themeslug_sanitize_url',
  ));
  $wp_customize->add_control('getintouch', array(
   'label'    => esc_html(__('Get In Touch Link', 'nectar')),
   'section'  => 'banner_buttons',
   'priority' => 1,
   'type' => 'url',
   'input_attrs' => array(
    'placeholder' => __( 'https://www.google.com/' ),
  ),
 ));

   // Settings for home page button text
  $wp_customize->add_setting('getintouch_text');
  $wp_customize->add_control('getintouch_text', array(
   'label'    => esc_html(__('Button Text', 'nectar')),
   'section'  => 'banner_buttons',
   'priority' => 2,
   'type' => 'text',
   'input_attrs' => array(
    'placeholder' => __( 'GET IN TOUCH' ),
  ),
 ));

  // Settings for play video Link
  $wp_customize->add_setting('play_video', array(
    'sanitize_callback' => 'themeslug_sanitize_url',
  ));
  $wp_customize->add_control('play_video', array(
   'label'    => esc_html(__('Video Link', 'nectar')),
   'section'  => 'banner_buttons',
   'priority' => 3,
   'type' => 'url',
   'input_attrs' => array(
    'placeholder' => __( 'https://www.google.com/' ),
  ),
 ));

   // Settings for play video button text
  $wp_customize->add_setting('play_video_text');
  $wp_customize->add_control('play_video_text', array(
   'label'    => esc_html(__('Button Text', 'nectar')),
   'section'  => 'banner_buttons',
   'priority' => 4,
   'type' => 'text',
   'input_attrs' => array(
    'placeholder' => __( 'PLAY VIDEO' ),
  ),
 ));


}
add_action( 'customize_register', 'firstest_news_theme_customize_register' );
?>
