<?php

// rahul's custom code

// Logo slider link custom field starts
function logoslider_add_custom_box() {

        add_meta_box(
            'logo_link_title',                
            'Logo Link and Title',      
            'logoslider_custom_box_html',  
            array('logoslider','productslider','partners','testimonial')                        
        );
        // enterprise solutions cpt: to link icon & title
        add_meta_box(
            'icon_title_link',                
            'Link icon & title',      
            'icon_title_link_fun',  
            'solutions'                      
        );
        add_meta_box(
            'icon_name1',                
            'Logo Font',      
            'icon_name_fun',  
            'industries'                      
        );
         add_meta_box(
            'accordian_box',                
            'Case Studies Category',      
            'case_studies_function',  
            'services'                      
        );
         // jobs post type for location
         add_meta_box(
            'job_location',                
            'Job Location',      
            'jobs_location_fun',  
            'jobs'                      
        );
        // banner image box for post
        add_meta_box( 'listingimagediv', __( 'Banner Image', 'text-domain' ), 'listing_image_metabox', array('post','jobs','case_studies'), 'side', 'low');
   
}
add_action( 'add_meta_boxes', 'logoslider_add_custom_box' );

function logoslider_custom_box_html( $post ) {
    $value_link = get_post_meta( $post->ID, '_logoslider_link_key', true );
    $value_title = get_post_meta( $post->ID, '_logoslider_title_key', true );
    ?>

    <label for="logoslider_link">Link logo & title to this URL: </label>
    <input name="logoslider_link" id="logoslider_link" value="<?php echo $value_link; ?>">
    
    <label for="logoslider_title">Logo title: </label>
    <input name="logoslider_title" id="logoslider_title" value="<?php echo $value_title; ?>">
    <?php
}
// enterprise solutions cpt: to link icon & title
function icon_title_link_fun( $post ) {
    $link = get_post_meta( $post->ID, '_sol_link_key', true );
    ?>

    <label for="sol_link">Enter relative URL: </label>
    <input name="sol_link" id="sol_link" value="<?php echo $link; ?>">

    <?php
}
function icon_name_fun( $post ) {
    $value = get_post_meta( $post->ID, 'icon_name', true );
    ?>

    <label for="icon_name_field">Icon font</label>
    <input name="icon_name_field" id="icon_name_field" value="<?php echo $value; ?>">
    
    <?php
}
function jobs_location_fun( $post){
    $job_location = get_post_meta( $post->ID, 'job_location', true );
    ?>

    <label for="job_location">Job Location</label>
    <input name="job_location" id="job_location" value="<?php echo $job_location; ?>">
    
    <?php
}
function save_jobs($post_id){
    if ( array_key_exists( 'job_location', $_POST ) ) {
        update_post_meta(
            $post_id,
            'job_location',
            $_POST['job_location']
        );
    }
}
// enterprise solutions cpt: to link icon & title
function save_solutions_link($post_id){
    if ( array_key_exists( 'sol_link', $_POST ) ) {
        update_post_meta(
            $post_id,
            '_sol_link_key',
            $_POST['sol_link']
        );
    }
}
function logoslider_save_postdata( $post_id ) {
    if ( array_key_exists( 'logoslider_link', $_POST ) ) {
        update_post_meta(
            $post_id,
            '_logoslider_link_key',
            $_POST['logoslider_link']
        );
    }
    if ( array_key_exists( 'logoslider_title', $_POST ) ) {
        update_post_meta(
            $post_id,
            '_logoslider_title_key',
            $_POST['logoslider_title']
        );
    }
}
function save_post_industries( $post_id ) {
    if ( array_key_exists( 'icon_name_field', $_POST ) ) {
        update_post_meta(
            $post_id,
            'icon_name',
            $_POST['icon_name_field']
        );
    }
}
add_action( 'save_post', 'logoslider_save_postdata' );
add_action( 'save_post_industries', 'save_post_industries' );
add_action( 'save_post_jobs', 'save_jobs' );
add_action( 'save_post_solutions', 'save_solutions_link' );
// Logo slider link custom field ends

// Testimonial author custom field starts
function testimonial_author_add_custom_box() {

    add_meta_box(
        'testimonial_author',                 // Unique ID
        'Testimonial Author',      // Box title
        'testimonial_author_custom_box_html',  // Content callback, must be of type callable
        array('testimonial')                        // Post type
    );

}
add_action( 'add_meta_boxes', 'testimonial_author_add_custom_box' );

function testimonial_author_custom_box_html( $post ) {
$value = get_post_meta( $post->ID, '_testimonial_author_meta_key', true );
?>

<label for="testimonial_author_field">Enter author name: </label>
<input name="testimonial_author_field" id="testimonial_author_field" value="<?php echo $value; ?>">

<?php
}

function testimonial_author_save_postdata( $post_id ) {
if ( array_key_exists( 'testimonial_author_field', $_POST ) ) {
    update_post_meta(
        $post_id,
        '_testimonial_author_meta_key',
        $_POST['testimonial_author_field']
    );
}
}
add_action( 'save_post_testimonial', 'testimonial_author_save_postdata' );
// Testimonial author custom field ends

// Adding rest footer widgets start
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Footer widget 4',
		'id'  => 'addresses',
        'before_widget' => '<li>',
        'after_widget' => '</li>',
        'before_title' => '<h4 class="widgetTitle">',
        'after_title' => '<i class="fa fa-map-marker"></i></h4>',
    ));	

    if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Bottom menu widget',
		'id'  => 'bottom_menu',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4 class="widgetTitle">',
        'after_title' => '</h4>',
    ));

/**case studies ****/
function case_studies_function($post){
    $casescat = get_post_meta( $post->ID, 'casestudies_cat', true );
    $casesttitle = get_post_meta( $post->ID, 'casestudies_title', true );

    ?>
    <fieldset>
    <label for="casestudies_title">Case Studies Title</label><br />
    <input name="casestudies_title" id="casestudies_title" value="<?php echo $casesttitle; ?>">
    </fieldset>
    <fieldset>
        <br />
   <label for="casestudies_cat">Select Case Studies Category</label><br />
    <select name="casestudies_cat" class="wp-core-ui select">
    <option value="">--</option>
    <?php
        $terms = get_terms( 'case_category' );
        foreach ( $terms as $term ) {
            $selected ="";
            if($casescat == $term->name){
            $selected ="selected";  
            }
            echo '<option value="'. $term->name .'" '.$selected.'>'. $term->name . '</option>';
    }
    ?>
    </select>
    </fieldset>
    <?php
}
function save_post_services_fun( $post_id ) {
    if ( array_key_exists( 'casestudies_cat', $_POST ) ) {
        update_post_meta(
            $post_id,
            'casestudies_cat',
            $_POST['casestudies_cat']
        );
    }
    if ( array_key_exists( 'casestudies_title', $_POST ) ) {
        update_post_meta(
            $post_id,
            'casestudies_title',
            $_POST['casestudies_title']
        );
    }
}
add_action( 'save_post_services', 'save_post_services_fun' );

 // adding image box

function listing_image_metabox ( $post ) {
    global $content_width, $_wp_additional_image_sizes;

    $image_id = get_post_meta( $post->ID, '_listing_image_id', true );

    $old_content_width = $content_width;
    $content_width = 254;

    if ( $image_id && get_post( $image_id ) ) {

        if ( ! isset( $_wp_additional_image_sizes['post-thumbnail'] ) ) {
            $thumbnail_html = wp_get_attachment_image( $image_id, array( $content_width, $content_width ) );
        } else {
            $thumbnail_html = wp_get_attachment_image( $image_id, 'post-thumbnail' );
        }

        if ( ! empty( $thumbnail_html ) ) {
            $content = $thumbnail_html;
            $content .= '<p class="hide-if-no-js"><a href="javascript:;" id="remove_listing_image_button" >' . esc_html__( 'Remove listing image', 'text-domain' ) . '</a></p>';
            $content .= '<input type="hidden" id="upload_listing_image" name="_listing_cover_image" value="' . esc_attr( $image_id ) . '" />';
        }

        $content_width = $old_content_width;
    } else {

        $content = '<img src="" style="width:' . esc_attr( $content_width ) . 'px;height:auto;border:0;display:none;" />';
        $content .= '<p class="hide-if-no-js"><a title="' . esc_attr__( 'Set listing image', 'text-domain' ) . '" href="javascript:;" id="upload_listing_image_button" id="set-listing-image" data-uploader_title="' . esc_attr__( 'Choose an image', 'text-domain' ) . '" data-uploader_button_text="' . esc_attr__( 'Set listing image', 'text-domain' ) . '">' . esc_html__( 'Set listing image', 'text-domain' ) . '</a></p>';
        $content .= '<input type="hidden" id="upload_listing_image" name="_listing_cover_image" value="" />';

    }

    echo $content;
}

add_action( 'save_post', 'listing_image_save', 10, 1 );
function listing_image_save ( $post_id ) {
    if( isset( $_POST['_listing_cover_image'] ) ) {
        $image_id = (int) $_POST['_listing_cover_image'];
        update_post_meta( $post_id, '_listing_image_id', $image_id );
    }
} 

