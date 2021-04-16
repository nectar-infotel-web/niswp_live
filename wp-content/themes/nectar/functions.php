<?php

// 4 sidebars

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'id' => 'hyy',
        'name' => 'Left Sidebar',
        'before_widget' => '<li>',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widgetTitle">',
        'after_title' => '</h3>',
    ));
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Right Sidebar',
        'id' => 'tt',
        'before_widget' => '<li class="sidebar_widget">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widgetTitle">',
        'after_title' => '</h3>',
    ));
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Footer widget 1',
        'id'  => 'footer1',
        'before_widget' => '<li>',
        'after_widget' => '</li>',
        'before_title' => '<h4 class="widgetTitle">',
        'after_title' => '</h4>',
    )); 
    if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Footer widget 2',
        'id'  => 'footer2',
        'before_widget' => '<li>',
        'after_widget' => '</li>',
        'before_title' => '<h4 class="widgetTitle">',
        'after_title' => '</h4>',
    )); 
    if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Footer widget 3',
        'id'  => 'footer3',
        'before_widget' => '<li>',
        'after_widget' => '</li>',
        'before_title' => '<h4 class="widgetTitle">',
        'after_title' => '</h4>',
    )); 
    if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Copyright',
        'id'  => 'footer4',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    )); 

    // enable logo in customizer
    add_theme_support( 'custom-logo', array(
        'height'      => 248,
        'width'       => 248,
        'flex-height' => true,
    ) );
    // support post thumbnails
    add_theme_support('post-thumbnails');

    // register nav menus
    register_nav_menus( array('header_Menu' => __( 'Header Menu', 'nectar' ),'footer_menu'=> __( 'Footer Menu', 'nectar' ),'side_menu'=> __( 'Side Menu', 'nectar' ) ));

    // menu class hook
    function add_additional_class_on_li($classes, $item, $args) {
        if(isset($args->add_li_class)) {
            $classes[] = $args->add_li_class;
        }
    return $classes;
    }
    add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


    add_filter( 'get_custom_logo', 'change_logo_class' );
    function change_logo_class( $html ) {
        $html = str_replace( 'custom-logo-link', 'navbar-brand', $html );
        return $html;
    }

    //wp version removing
    add_filter('the_generator', 'version');
    function version() {
        return '';
    }


    // Theme options page
    /*add_action( 'admin_menu', 'theme_option_page' );
    function theme_option_page(){
    add_menu_page( 
        __( 'Theme Option', 'textdomain' ),
        'Theme Option',
        'manage_options',
        'themeoption',
        'themeoption_fun',
       get_template_directory_uri().'/images/logo.png',
        6
    ); 
    }
    
    function themeoption_fun(){
        include('inc/themeoptions.php'); 
    }*/

    // custom post type registration
    add_action( 'init', 'reg_custom_post_type' );
    function reg_custom_post_type() {
    $args = array(
      'public' => true,
      'label'  => 'Image Slider',
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_post_type( 'slider', $args );
    // taxonomy for image slider
    $args_slider = array(
        'label'        => __( 'Categories', 'textdomain' ),
        'hierarchical' => true
    );
    register_taxonomy( 'slider_category', 'slider', $args_slider ); 
    $args1 = array(
      'public' => true,
      'label'  => 'Services',
      'show_in_rest' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_post_type( 'services', $args1 );
    $args_tech = array(
      'public' => true,
      'label'  => 'Technologies',
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_post_type( 'technologies', $args_tech );

    $args_solution = array(
      'public' => true,
      'label'  => 'Solutions',
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_post_type( 'solutions', $args_solution );


    $args2 = array(
        'public' => true,
        'label'  => 'Logo Slider',
       'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_post_type( 'logoslider', $args2 );
	$args_logoslider = array(
        'label'        => __( 'Categories', 'textdomain' ),
        'hierarchical' => true
    );
    register_taxonomy( 'logoslider_category', 'logoslider', $args_logoslider ); 
    $args3 = array(
      'public' => true,
      'label'  => 'Product Slider',
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_post_type( 'productslider', $args3 );
    $args4 = array(
      'public' => true,
      'label'  => 'Partners',
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_post_type( 'partners', $args4 );
    $args5 = array(
      'public' => true,
      'label'  => 'Industries',
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_post_type( 'industries', $args5 );

    // case studies post type by Rahul start
    $args3 = array(
        'public' => true,
        'label'  => 'Case Studies',
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
      );
      register_post_type( 'case_studies', $args3 );

      $args_case = array(
        'label'        => __( 'Categories', 'textdomain' ),
        'hierarchical' => true
    );
    register_taxonomy( 'case_category', 'case_studies', $args_case );
    // case studies post type by Rahul End

    // testimonial post type by Rahul start
    $args4 = array(
        'public' => true,
        'label'  => 'Testimonials',
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
      );
   register_post_type( 'testimonial', $args4 );

     $args_testi = array(
        'label'        => __( 'Categories', 'textdomain' ),
        'hierarchical' => true
    );
    register_taxonomy( 'testimonial_category', 'testimonial', $args_testi );
    
    // testimonial post type by Rahul End
    
    $args_product = array(
        'public' => true,
        'label'  => 'Products',
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'show_in_rest' => true,
        'has_archive' => true

      );
      register_post_type( 'products', $args_product );
    

     // testimonial post type by Rahul End
    
    $args_jobs = array(
        'public' => true,
        'label'  => 'Jobs',
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'show_in_rest' => true,
        'has_archive' => true
       

      );
      register_post_type( 'jobs', $args_jobs );
	  
	$args_certificates = array(
        'public' => true,
        'label'  => 'Certificates',
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'show_in_rest' => true,
        'has_archive' => true
       

      );
      register_post_type( 'certificates', $args_certificates );

} 

    // navwalker menu
  //require get_template_directory() . '/bootstrap-navwalker.php';
    require get_template_directory() . '/wp_bootstrap4-mega-navwalker.php';

    // enquestyles

    add_action('wp_enqueue_scripts', 'nectar_theme_files');

    function nectar_theme_files() { 

    // enque bootstrap styles
   wp_enqueue_style('bootstrap-styles', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');

   // enque bootstrap styles
   wp_enqueue_style('bxslider-styles', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.css');


   wp_enqueue_style('nectar_main_style', get_stylesheet_uri()); 

     // font-awesome bootstrap
    wp_enqueue_style('fontawesome-styles', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

    //other styles
    wp_enqueue_style('nectar_style1_style', get_theme_file_uri('css/style_1.css'));
    wp_enqueue_style('nectar_style2_style', get_theme_file_uri('css/style_2.css'));
    wp_enqueue_style('nectar_responsive_style', get_theme_file_uri('css/responsive.css'));

    // jquery 
    wp_enqueue_script( 'jQuery','https://code.jquery.com/jquery-3.5.1.min.js', array(),1,true );


     //isotop js
    wp_enqueue_script( 'isotop','https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js', array( 'jquery' ),'',true );

    // bxslider js
    // wp_enqueue_script( 'bxslider','https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js', array( 'jquery' ),'',true );

    // other scripts
    wp_enqueue_script( 'Browser-selecter',get_theme_file_uri('jq/css_browser_selector.js'), array( 'jquery' ),'',true );
    wp_enqueue_script( 'bxslider',get_theme_file_uri('jq/jquery.bxslider.js'), array( 'jquery' ),'',true );

     wp_enqueue_script( 'custom_js',get_theme_file_uri('jq/custom_js.js'), '',2,true);

   
    } 

    // admin enqueue scripts

    add_action( 'admin_enqueue_scripts', 'load_custom_script' );
    function load_custom_script() {
        wp_enqueue_script('admin_script', get_bloginfo('template_url').'/jq/admin_script.js', array('jquery'));
    }
  

    // rahul's function.php
    include('inc/function-1.php'); 

    // priya's function.php
    include('inc/function-2.php'); 
    
    // required plugins admin notice
    add_action( 'admin_notices', 'my_theme_dependencies');
    function my_theme_dependencies() {
        // add notice for cotact form 7 plugin
        $pluginslist = get_option('active_plugins', array());
        $plugin ="contact-form-7/wp-contact-form-7.php";
        if(in_array( $plugin, $pluginslist )){

        }else{
        echo '<div class="error"><p>' . __( 'Warning: The theme needs Plugin Contact Form 7 to function', 'nectar' ) . '</p></div>';
        }
    }

// Breadcrumbs shortcode
function get_cpt_single_pg_breadcrumbs($atts) {
    global $post;
    $a = shortcode_atts( array(
    'cpt' => 'services' // default will be services
    ), $atts );
    $post_type = get_post_type_object( get_post_type($post) );
    if($a['cpt']){
    $cp_archive_link = get_post_type_archive_link( $a['cpt'] );
    }
    $html = '<div class="bread_crumb"><a class="bc_home" href="'.home_url().'" rel="nofollow">Home</a>&nbsp;&#47&nbsp';
    if($cp_archive_link && !in_array($post_type->label,array('Pages','Posts'))){
     $html .= '<a class="bc_cpt_archive" href="'.$cp_archive_link.'">'.$post_type->label.'</a>&nbsp;&#47;&nbsp';
    } elseif($a['cpt'] == 'case_studies') {
        $html .= '<a class="bc_cpt_archive" href="'.home_url().'/case-studies/">'.$post_type->label.'</a>&nbsp;&#47;&nbsp';
    }
     $html .= '<span class="bc_cpt_title">'.get_the_title().'</span></div>';
     return $html;
}
add_shortcode('bread', 'get_cpt_single_pg_breadcrumbs');

// Logoslider shortcode
function get_logoslider($atts) {
    global $post;
    $a = shortcode_atts( array(
        'cat' => 'home' // default will be home logoslider
        ), $atts );

    $logoslider = '<section id ="'.$a['cat'].'-logosliders" class="logoinnerslider '.$a['cat'].'">
    <div class="container">
	<div class="row">
		<div id="'.$a['cat'].'-logoslider" class="bxslider3">
              ';
				$args = array(  
			    'post_type' => 'logoslider',
			    'post_status' => 'publish',
                'posts_per_page' => -1, 
                'tax_query' => array(
                    array(
                    'taxonomy' => 'logoslider_category',
                    'field' => 'name',
                    'terms' => $a['cat'] 
                     )));
		    	$loop = new WP_Query( $args ); 
			    while ( $loop->have_posts() ) : $loop->the_post(); 
                    $logoslider .= '<div class="logo_outer">';
                    $logo_link = get_post_meta( $post->ID, '_logoslider_link_key', true );
                    $logo_title = get_post_meta( $post->ID, '_logoslider_title_key', true );
                    if ($logo_link) : 
                        $logoslider .= '<a href="'.$logo_link.'" target="_blank">';
                    endif;
                        $logoslider .= '<div class="imgouter_sepc"><img src="'.get_the_post_thumbnail_url().'" alt="'.get_the_title().'"></div>'; 
                        if ($logo_title) : 
                            $logoslider .= '<p class="logo_title">'.$logo_title.'</p>';
                        endif;
                    if ($logo_link) : 
                        $logoslider .= '</a>';
                    endif; 
                    $logoslider .= '</div>';
				    endwhile; 
					wp_reset_postdata(); 
                    $logoslider .= '</div></div></div></section>';
    return $logoslider;
}
add_shortcode('slider', 'get_logoslider');

// pagination
function page_navi($before = '', $after = '') {
    global $wpdb, $wp_query;
    $request = $wp_query->request;
    $posts_per_page = intval(get_query_var('posts_per_page'));
    $paged = intval(get_query_var('paged'));
    $numposts = $wp_query->found_posts;
    $max_page = $wp_query->max_num_pages;
    if ( $numposts <= $posts_per_page ) { return; }
    if(empty($paged) || $paged == 0) {
        $paged = 1;
    }
    $pages_to_show = 7;
    $pages_to_show_minus_1 = $pages_to_show-1;
    $half_page_start = floor($pages_to_show_minus_1/2);
    $half_page_end = ceil($pages_to_show_minus_1/2);
    $start_page = $paged - $half_page_start;
    if($start_page <= 0) {
        $start_page = 1;
    }
    $end_page = $paged + $half_page_end;
    if(($end_page - $start_page) != $pages_to_show_minus_1) {
        $end_page = $start_page + $pages_to_show_minus_1;
    }
    if($end_page > $max_page) {
        $start_page = $max_page - $pages_to_show_minus_1;
        $end_page = $max_page;
    }
    if($start_page <= 0) {
        $start_page = 1;
    }
         
    echo $before.'<div class="pagination"><ul class="clearfix">'."";
    if ($paged > 1) {
        $first_page_text = "«";
        echo '<li class="prev"><a href="'.get_pagenum_link().'" title="First">'.$first_page_text.'</a></li>';
    }

    for($i = $start_page; $i  <= $end_page; $i++) {
        if($i == $paged) {
            echo '<li class="active"><a href="#">'.$i.'</a></li>';
        } else {
            echo '<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
        }
    }
    echo '<li class="">';
    next_posts_link('>>');
    echo '</li>';
    if ($end_page < $max_page) {
        $last_page_text = "»";
        echo '<li class="next"><a href="'.get_pagenum_link($max_page).'" title="Last">'.$last_page_text.'</a></li>';
    }
    echo '</ul></div>'.$after."";
}
// support webp image type uploading
add_filter('upload_mimes',"image_upload_fun");
function image_upload_fun($mime_types){
    $mime_types['webp'] = 'image/webp';
    return $mime_types;
}

// remove excerpt brackets
function sydney_child_elipsis($content) {
    return str_replace('[&hellip;]', ' ', $content);
}
add_filter('the_excerpt', 'sydney_child_elipsis');

// fullwidth slider
add_shortcode('full_slider', 'fullsliderfun');

// pagination
function fullsliderfun($atts) {
       global $post;
    $a = shortcode_atts( array(
        'cat' => 'home' // default will be home logoslider
        ), $atts );

    $logoslider = '<section  class="fullinnerslider '.$a['cat'].'">
    <div id="'.$a['cat'].'" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">';
                $args = array(  
                'post_type' => 'slider',
                'post_status' => 'publish',
                'posts_per_page' => -1, 
                'tax_query' => array(
                    array(
                    'taxonomy' => 'slider_category',
                    'field' => 'slug',
                    'terms' => $a['cat'] 
                     )
                  )
                 );
                $loop = new WP_Query( $args ); $i=0;
                while ( $loop->have_posts() ) : $loop->the_post(); 
                    $active ="";
                    if($i == 0){
                        $active = "active";
                    }
                    $logoslider .= '<div class="carousel-item innerpageslider '.$active .'">';
                    $logoslider .= '<img src="'.get_the_post_thumbnail_url().'" alt="'.get_the_title().'">'; 
                    $logoslider .= '</div>';
                    $i++;
                endwhile; 
                 
                $logoslider .= '
                  <a class="carousel-control-prev" href="#'.$a['cat'].'" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                  </a>
                  <a class="carousel-control-next" href="#'.$a['cat'].'" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                  </a>
        </div>
    </div>
    </section>';
    wp_reset_postdata();
    return $logoslider;
}

// joblisting shortcode
add_shortcode('jobs', 'jobs_fun');

// pagination
function jobs_fun($atts) {
       global $post;

    $logoslider = '<section  class="joblisting ">';
                $args = array(  
                'post_type' => 'jobs',
                'post_status' => 'publish',
                'posts_per_page' => -1, 
                'order' => 'ASC'
                 );
                $loop = new WP_Query( $args ); $i=0;
                while ( $loop->have_posts() ) : $loop->the_post(); 
                    $active ="odd";
                    if($i%2 == 0){
                        $active = "even";
                    }
                    $links = get_option('home')."/apply-now";
                    $links2 = get_the_permalink();
                    $location  = get_post_meta( $post->ID, 'job_location', true );
                    $logoslider .= '<div class="row jobbox '.$active .'">';
                    $logoslider .= '<div class="col-md-4 col-sm-12 jobtitle"><p>'.get_the_title(). '</p></div>';
                    $logoslider .= '<div class="col-md-4 col-sm-12 job_location"><p>'.$location. '</p></div>';
                     $logoslider .= '<div class="col-md-4 col-sm-12 applynowbox" ><a href="'.$links2.'" class="jobbutton moreread">View More</a></div>';
                    $logoslider .= '</div>';
                    $i++;
                endwhile; 
                 
                $logoslider .= '</section>';
    wp_reset_postdata();
    return $logoslider;
}

// add shortcode for employee testimonial
add_shortcode("emp_testimonials","emp_testifunction");

function emp_testifunction(){
     $data = '<section id="testimonial" class="test2"><i class="fa fa-quote-left"></i><div id="carouselTestimonialIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">';
            $args = array(  
                'post_type' => 'testimonial',
                'post_status' => 'publish',
                'posts_per_page' => -1, 
                'tax_query' => array(
                    array(
                      'taxonomy' => 'testimonial_category',
                      'field' => 'name',
                      'terms' => 'employee' 
                     )
                  )
            );
            $testimonials = new WP_Query( $args ); 
            $i=0;
            while ( $testimonials->have_posts() ) : $testimonials->the_post(); 
            $active ="";
                if($i == 0){
                    $active = "active";
                } 
          $data .= '<div class="carousel-item '.$active.'">
            <div class="row slider_row testipage">
                <div class="col-sm-12 col-md-3">';
                $logo_link = get_post_meta( get_the_ID(), '_logoslider_meta_key');
                    if ($logo_link) : 
                     $data .= '<a href="'.$logo_link.'" target="_blank">';
                   endif; 
                    $auth = get_post_meta( get_the_ID(), '_testimonial_author_meta_key',true);
                     $data .= '<div class="testi2_img_box"><img src="'.get_the_post_thumbnail_url().'" alt="'.get_the_title().'"> <div class="testimonial-author-info">
                          <div class="author-name">'.$auth.'</div>
                          <div class="author-company">'.get_the_title().'</div>
                        </div></div>';
                    if ($logo_link) :   
                        $data .= '</a>';
                    endif;
                   
                 $data .= '</div>
                <div class="col-sm-12 col-md-9">
                    <div class="testimonial-content">
                        <div class="testimonial-text">
                         '.get_the_content().'</div>
                    </div>
                </div>
            </div>
          </div>';
            $i++;
            endwhile;
            wp_reset_postdata();
            $i--;
        $data .= '<ol class="carousel-indicators">';
       if($i > 0){ $j =0;
          while($i >=0){
            if($i == 0) { $activeclass="active"; } else  $activeclass ='';
          $data .= '<li data-target="#carouselTestimonialIndicators" class="'.$activeclass.'" data-slide-to="'.$j.'" ></li>';
          $i--; $j++;
          }
        }
         $data .= '</ol></div></div><i class="fa fa-quote-right"></i></section>';
     return $data;    
}
/** social share icons ***/
function crunchify_social_sharing_buttons($id) {
    global $post;
    if(is_singular() || is_home()){
    
        // Get current page URL 
        $crunchifyURL = urlencode(get_permalink($id));
 
        // Get current page title
        $crunchifyTitle = htmlspecialchars(urlencode(html_entity_decode(get_the_title($id), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');
        // $crunchifyTitle = str_replace( ' ', '%20', get_the_title());
        
        // Get Post Thumbnail for pinterest
        $crunchifyThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'full' );
 
        // Construct sharing URL without using any script
        $twitterURL = 'https://twitter.com/intent/tweet?text='.$crunchifyTitle.'&amp;url='.$crunchifyURL.'&amp;via=Crunchify';
        $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$crunchifyURL;
        $googleURL = 'https://plus.google.com/share?url='.$crunchifyURL;
        $bufferURL = 'https://bufferapp.com/add?url='.$crunchifyURL.'&amp;text='.$crunchifyTitle;
        $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$crunchifyURL.'&amp;title='.$crunchifyTitle;
 
        // Based on popular demand added Pinterest too
        $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$crunchifyURL.'&amp;media='.$crunchifyThumbnail[0].'&amp;description='.$crunchifyTitle;
 
        // Add sharing button at the end of page/page content
        $content .= '<span class="crunchify-social sociall_icons">';
        $content .= '<h5>Share </h5>';
        $content .= '<a class="crunchify-link crunchify-facebook" href="'.$facebookURL.'" target="_blank"><i class="fa fa-facebook"></i></a>';
        $content .= ' <a class="crunchify-link crunchify-twitter" href="'. $twitterURL .'" target="_blank"><i class="fa fa-twitter"></i></a>';
        $content .= '<a class="crunchify-link crunchify-googleplus" href="'.$googleURL.'" target="_blank"><i class="fa fa-google-plus"></i></a>';
       // $content .= '<a class="crunchify-link crunchify-buffer" href="'.$bufferURL.'" target="_blank">Buffer</a>';
        $content .= '<a class="crunchify-link crunchify-linkedin" href="'.$linkedInURL.'" target="_blank"><i class="fa fa-linkedin"></i></a>';
        $content .= '<a class="crunchify-link crunchify-pinterest" href="'.$pinterestURL.'" data-pin-custom="true" target="_blank"><i class="fa fa-pinterest"></i></a>';
        $content .= '</span>';
        
        return $content;
    }else{
        // if not a post/page then don't include sharing button
        return $content;
    }
}
?>