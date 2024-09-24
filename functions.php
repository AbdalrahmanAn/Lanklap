<?php 
if (!defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}
function university_files() { 
    wp_enqueue_style('lanklap_bootstrap', get_theme_file_uri('/assets/css/bootstrap.min.css'));
    wp_enqueue_style('lanklap_popup', get_theme_file_uri('/assets/css/magnific-popup.min.css'));
    wp_enqueue_style('lanklap_carousel', get_theme_file_uri('/assets/css/owl.carousel.min.css'));
    wp_enqueue_style('lanklap_theme_default', get_theme_file_uri('/assets/css/owl.theme.default.min.css'));
    wp_enqueue_style('lanklap_meanmenu', get_theme_file_uri('/assets/css/meanmenu.min.css'));
    wp_enqueue_style('lanklap_scrollcue', get_theme_file_uri('/assets/css/scrollCue.css'));
    wp_enqueue_style('lanklap_all_main_css', get_theme_file_uri('/assets/css/all.min.css'));
    wp_enqueue_style('lanklap_style_css', get_theme_file_uri('/assets/css/style.css'));
    wp_enqueue_style('lanklap_responsive', get_theme_file_uri('/assets/css/responsive.css'));

    

    wp_enqueue_script('lanklap_jquery', get_theme_file_uri('/assets/js/jquery.min.js'), array(), _S_VERSION, true);
    wp_enqueue_script('lanklap_bundle', get_theme_file_uri('/assets/js/bootstrap.bundle.min.js'), array(), _S_VERSION, true);
    wp_enqueue_script('lanklap_magnific', get_theme_file_uri('/assets/js/magnific-popup.min.js'), array(), _S_VERSION, true);
    wp_enqueue_script('lanklap_meanmenu_js', get_theme_file_uri('/assets/js/meanmenu.min.js'), array(), _S_VERSION, true);
    wp_enqueue_script('lanklap_carousel_js', get_theme_file_uri('/assets/js/owl.carousel.min.js'), array(), _S_VERSION, true);
    wp_enqueue_script('lanklap_scrollcue_js', get_theme_file_uri('/assets/js/scrollCue.min.js'), array(), _S_VERSION, true);
    wp_enqueue_script('lanklap_custom', get_theme_file_uri('/assets/js/custom.js'), array(), _S_VERSION, true);

}
add_action('wp_enqueue_scripts', 'university_files');

function lanklap_post_types() {
    //course Post Type
    register_post_type('course',array(
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'taxonomies' => array('category'),
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'menu_icon' => 'dashicons-book',
        'labels' => array(
            'name' => 'Courses',
            'edit_item' => 'Edit Course',
            'all_items' => 'All Courses',
            'add_new_item' => 'Add new Course',
            'singular_name' => 'Course'
        )
        ));

        //Feedback Post Type
    register_post_type('feedback',array(
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'menu_icon' => 'dashicons-admin-comments',
        'labels' => array(
            'name' => 'Feedbacks',
            'edit_item' => 'Edit Feedback',
            'all_items' => 'All Feedbacks',
            'add_new_item' => 'Add new Feedback',
            'singular_name' => 'Feedback'
        )
        ));

        //Team Post Type
    register_post_type('team',array(
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'menu_icon' => 'dashicons-groups',
        'labels' => array(
            'name' => 'Team',
            'edit_item' => 'Edit Team',
            'all_items' => 'All Teams',
            'add_new_item' => 'Add new Team',
            'singular_name' => 'Team'
        )
        ));
}

add_action('init' , 'lanklap_post_types');


function lanklap_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'lanklap_supports');

// Register Custom Taxonomy for Languages
function register_language_taxonomy() {
    $labels = array(
        'name'              => _x( 'Languages', 'taxonomy general name' ),
        'singular_name'     => _x( 'Language', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Languages' ),
        'all_items'         => __( 'All Languages' ),
        'parent_item'       => __( 'Parent Language' ),
        'edit_item'         => __( 'Edit Language' ),
        'update_item'       => __( 'Update Language' ),
        'add_new_item'      => __( 'Add New Language' ),
        'menu_name'         => __( 'Languages' ),
    );

    $args = array(
        'hierarchical'      => true, // مثل الفئات
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'language' ),
    );

    register_taxonomy( 'language', array('page'), $args );
}
add_action( 'init', 'register_language_taxonomy' );

function lanklap_adjust_queries($query){
    if(!is_admin() AND is_post_type_archive('course') AND $query->is_main_query()) {
        $query->set('posts_per_page', 6);
        $query->set('orderby', 'date');
        $query->set('order', 'ASC');
    }
}
add_action('pre_get_posts' , 'lanklap_adjust_queries');
?>