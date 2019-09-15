<?php 

function Demo_Resource(){
	
	wp_enqueue_style('style',get_stylesheet_uri());
	
	}



add_action('wp_enqueue_scripts','Demo_Resource');





//Registers Nav Menu

register_nav_menus( array(
    'primary'   => __( 'Primary Menu')    
) );


// Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');


//Theme Setup

function FeatureImage(){
	
		register_nav_menus( array(
    'primary'   => __( 'Primary Menu')    
) );


	//Add Feaature image Support
	
	add_theme_support('post-thumbnails');
	add_image_size('small_thumbnail',350,250,array('left','top'));
	add_image_size('banner-image','1000','450',array('left','top'));
	
	//Post Formats Support
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link' ) );
	
	
	}

add_action('after_setup_theme','FeatureImage');


// Custom Excerpt length

function custom_excerpt_length(){
	return 50;
	}
	
add_filter('excerpt_length','custom_excerpt_length');	




//Add Our Widget Location

function OurWidgetInit(){
	
	register_sidebar(array(
	
	'name' => 'Sidebar Area 1',
	'id' => 'sidebar1',
	'description'   => __( 'A short description of the sidebar.' ),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>',
	
	));
	
	register_sidebar(array(
	
	'name' => 'Sidebar Area 2',
	'id' => 'sidebar2',
	'description'   => __( 'A short description of the sidebar.' ),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>',
	
	));
	
	register_sidebar(array(
	
	'name' => 'Sidebar Area 3',
	'id' => 'sidebar3',
	'description'   => __( 'A short description of the sidebar.' ),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>',
	
	));
	
	
	
	register_sidebar(array(
	
	'name' => 'Footer Area1',
	'id' => 'footer1',
	'description'   => __( 'A short description of the Footer Bar.' ),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title"><span>',
	'after_title'   => '</span></h3>',
	
	));
	
	register_sidebar(array(
	
	'name' => 'Footer Area2',
	'id' => 'footer2',
	'description'   => __( 'A short description of the Footer Bar.' ),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title"><span>',
	'after_title'   => '</span></h3>',
	
	));
	
	register_sidebar(array(
	
	'name' => 'Footer Area3',
	'id' => 'footer3',
	'description'   => __( 'A short description of the Footer Bar.' ),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title"><span>',
	'after_title'   => '</span></h3>',
	
	));
	
	register_sidebar(array(
	
	'name' => 'Footer Area4',
	'id' => 'footer4',
	'description'   => __( 'A short description of the Footer Bar.' ),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title"><span>',
	'after_title'   => '</span></h3>',
	
	));


}

add_action( 'widgets_init', 'OurWidgetInit' );



//Get Widget Title

function get_Widget_Title(){
	
	
	
	}

// Add Footer Callout Section to admin customize 


function editable_footer_callout($wp_customize){
	//wp Native object
	$wp_customize->add_section('editable_footer_callout_section',array(
	
	'title' => 'Footer Callout'
	
	));
	
	//Heading Code
	$wp_customize->add_setting('editable_footer_callout_heading',array(
	
	'default' => 'Example Healine Text'
	
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'editable_footer_callout_heading', array(
	
	'label' => 'Headline',
	'section' => 'editable_footer_callout_section',
	'setting' => 'editable_footer_callout_heading'
	
	)));
	
	
	//Paragraph Code Here
	$wp_customize->add_setting('editable_footer_callout_text',array(
	
	'default' => 'Example Paragraph Text'
	
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'editable_footer_callout_text', array(
	
	'label' => 'Paragraph',
	'section' => 'editable_footer_callout_section',
	'setting' => 'editable_footer_callout_text',
	'type' => 'textarea'
	
	)));
	
	//Link Code Here
	$wp_customize->add_setting('editable_footer_callout_link');
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'editable_footer_callout_link', array(
	
	'label' => 'Link',
	'section' => 'editable_footer_callout_section',
	'setting' => 'editable_footer_callout_link',
	'type' => 'dropdown-pages'
	
	)));
	
	//Image Code Here
	$wp_customize->add_setting('editable_footer_callout_image');
	
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'editable_footer_callout_image', array(
	
	'label' => 'Image',
	'section' => 'editable_footer_callout_section',
	'setting' => 'editable_footer_callout_image'
	
	)));
	
	}
	
add_action('customize_register','editable_footer_callout');


//Slider Code HEre
function editable_slider($wp_customize){
	//wp Native object
	$wp_customize->add_section('editable_slider_section',array(
	
	'title' => 'Image Slider'
	
	));

//<!--Start 1st Image-->
	
	//Heading-1 Code
	$wp_customize->add_setting('editable_slider_heading_1',array(
	
	'default' => 'Example Healine-1 Text'
	
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'editable_slider_heading_1', array(
	
	'label' => 'Headline-1',
	'section' => 'editable_slider_section',
	'setting' => 'editable_slider_heading_1'
	
	)));
	
	
	//Description Text-1 Code
	$wp_customize->add_setting('editable_slider_description_text_1',array(
	
	'default' => 'Example Description-1 Text'
	
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'editable_slider_description_text_1', array(
	
	'label' => 'DesCription Text-1',
	'section' => 'editable_slider_section',
	'setting' => 'editable_slider_description_text_1'
	
	)));
	
	//Image-1 Code Here
	$wp_customize->add_setting('editable_slider_image_1');
	
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'editable_slider_image_1', array(
	
	'label' => 'Image-1',
	'section' => 'editable_slider_section',
	'setting' => 'editable_slider_image_1',
	'width' => '1920',
	'height' => '350'
	
	)));

//<!--End 1st Image-->

//<!--Start 2nd Image-->
	
	//Heading-2 Code
	$wp_customize->add_setting('editable_slider_heading_2',array(
	
	'default' => 'Example Healine-2 Text'
	
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'editable_slider_heading_2', array(
	
	'label' => 'Headline-2',
	'section' => 'editable_slider_section',
	'setting' => 'editable_slider_heading_2'
	
	)));
	
	
	//Description Text-2 Code
	$wp_customize->add_setting('editable_slider_description_text_2',array(
	
	'default' => 'Example Description-2 Text'
	
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'editable_slider_description_text_2', array(
	
	'label' => 'DesCription Text-2',
	'section' => 'editable_slider_section',
	'setting' => 'editable_slider_description_text_2'
	
	)));
	
	//Image-2 Code Here
	$wp_customize->add_setting('editable_slider_image_2');
	
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'editable_slider_image_2', array(
	
	'label' => 'Image-2',
	'section' => 'editable_slider_section',
	'setting' => 'editable_slider_image_2',
	'width' => '1920',
	'height' => '350'
	
	)));
	
//<!--End 2nd Image-->	
	


//<!--Start 3rd Image-->

	//Heading-3 Code
	$wp_customize->add_setting('editable_slider_heading_3',array(
	
	'default' => 'Example Healine-3 Text'
	
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'editable_slider_heading_3', array(
	
	'label' => 'Headline-3',
	'section' => 'editable_slider_section',
	'setting' => 'editable_slider_heading_3'
	
	)));
	
	
	//Description Text-3 Code
	$wp_customize->add_setting('editable_slider_description_text_3',array(
	
	'default' => 'Example Description-3 Text'
	
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'editable_slider_description_text_3', array(
	
	'label' => 'DesCription Text-3',
	'section' => 'editable_slider_section',
	'setting' => 'editable_slider_description_text_3'
	
	)));
	
	//Image-3 Code Here
	$wp_customize->add_setting('editable_slider_image_3');
	
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'editable_slider_image_3', array(
	
	'label' => 'Image-3',
	'section' => 'editable_slider_section',
	'setting' => 'editable_slider_image_3',
	'width' => '1920',
	'height' => '350'
	
	)));

//<!--End 3rd Image-->	
	
	
//<!--Start 4th Image-->

	//Heading-4 Code
	$wp_customize->add_setting('editable_slider_heading_4',array(
	
	'default' => 'Example Healine-4 Text'
	
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'editable_slider_heading_4', array(
	
	'label' => 'Headline-4',
	'section' => 'editable_slider_section',
	'setting' => 'editable_slider_heading_4'
	
	)));
	
	
	//Description Text-4 Code
	$wp_customize->add_setting('editable_slider_description_text_4',array(
	
	'default' => 'Example Description-4 Text'
	
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'editable_slider_description_text_4', array(
	
	'label' => 'DesCription Text-4',
	'section' => 'editable_slider_section',
	'setting' => 'editable_slider_description_text_4'
	
	)));
	
	//Image-4 Code Here
	$wp_customize->add_setting('editable_slider_image_4');
	
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'editable_slider_image_4', array(
	
	'label' => 'Image-4',
	'section' => 'editable_slider_section',
	'setting' => 'editable_slider_image_4',
	'width' => '1920',
	'height' => '350'
	
	)));
	
	}

//<!--End 4th Image-->
	
add_action('customize_register','editable_slider');	

//<---End Slide Code Here-->




//Custom Post Code

// Register Custom Post Type
function custom_post_type() {
	

	$labels = array(
		'name'                => _x( 'Product Post Types', 'Product', 'text_domain' ),
		'singular_name'       => _x( 'Product Post Type', 'Product', 'text_domain' ),
		'menu_name'             => __( 'Product Types', 'text_domain' ),
		'name_admin_bar'        => __( 'Product Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Product Post Type', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,		
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'query_var' 			=> true,	
		'rewrite' => array( 'slug' => 'product_type', 'with_front' => true ),			
		'supports' => array('title','editor','author','thumbnail','excerpt','comments','post-formats')
		
	);
	register_post_type( 'product_type', $args );

}
add_action( 'init', 'custom_post_type');


function include_template_function( $template_path ) {
    if ( get_post_type() == 'product_type' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-product.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = get_template_directory_uri( __FILE__ ) . '/single-product.php';
            }
        }
    }
    return $template_path;
}
add_filter( 'template_include', 'include_template_function', 1 );



?>

