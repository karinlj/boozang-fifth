<?php

//Including all resourses for the site
function bn_script_resourses()
{
    //name, absolute path, dependencies, version, in_footer

    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.12.4', true);
}
add_action('wp_enqueue_scripts', 'bn_script_resourses');

function bn_style_resourses()
{

    //name, absolute path, dependencies, version, media

    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');

    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0', 'all');

    wp_enqueue_style('font-awesome-5', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css', array(), null);

    wp_enqueue_style('boozang-fifth-custom', get_stylesheet_directory_uri() . '/css/custom.css');
    wp_enqueue_style('comp', get_stylesheet_directory_uri() . '/css/comp.css');
}
add_action('wp_enqueue_scripts', 'bn_style_resourses');

function google_fonts()
{
    //Av någon anledning knasar det med wp_enqueue_script
?>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

<?php
}
add_action('wp_head', 'google_fonts');

function add_scripts()
{
    wp_register_script('custom_script', home_url() . '/wp-content/themes/boozang-fifth/js/custom_script.js', array('jquery'));
    wp_enqueue_script('custom_script');
}
add_action('wp_enqueue_scripts', 'add_scripts');

function favicon()
{ ?>
<link rel="apple-touch-icon" sizes="57x57"
    href="<?php echo get_stylesheet_directory_uri(); ?>/icon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32"
    href="<?php echo get_stylesheet_directory_uri(); ?>/icon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16"
    href="<?php echo get_stylesheet_directory_uri(); ?>/icon/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/icon/site.webmanifest">
<link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/icon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<?php }
add_action('wp_head', 'favicon', 99);

//Theme support
function bn_theme_setup()
{
    //Featured Image Support
    add_theme_support('post-thumbnails');
    //width, height, hard-or soft cropping(hard)
    add_image_size('small-thumbnail', 230, 144, true);
    add_image_size('normal-thumbnail', 320, 380, true);
    add_image_size('large-thumbnail', 500, 375, true);
}
add_action('after_setup_theme', 'bn_theme_setup');

//Excerpt lenght control
function set_excerpt_length()
{
    return 70;
}
add_filter('excerpt_length', 'set_excerpt_length');

//Menyer
//register Nav Walker class_alias
//require_once('wp-bootstrap-navwalker.php');

function boozang_register_menus()
{
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'boozang-fifth'),
    ));
}
add_action('after_setup_theme', 'boozang_register_menus');

//Widget locations
function wpb_init_widgets($id)
{
    //blog sidebar
    register_sidebar(array(
        'name' => 'Sidebar-blog',
        'id' => 'sidebar-blog',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    register_sidebar(array(
        'name' => 'Newsletter',
        'id' => 'newsletter',
        'before_widget' => '<div class="newsletter-form">',
        'after_widget' => '</div>',
    ));
    register_sidebar(array(
        'name' => 'Sidebar-forum',
        'id' => 'sidebar-forum',
        'before_widget' => '<div class="sidebar_forum">',
        'after_widget' => '</div>',
    ));
}
add_action('widgets_init', 'wpb_init_widgets');

//Custom Post Types
function bn_custom_post_types()
{
    $labels = array(
        'name' => __('Videos', ''),
        'singular_name' => __('Video', ''),
        'menu_name' => __('Videos', ''),
        'all_items' => __('All videos', ''),
        'add_new' => __('Add new', ''),
        'add_new_item' => __('Add new video', ''),
        'edit_item' => __('Edit item', ''),
        'new_item' => __('New video', ''),
        'view_item' => __('Show video', ''),
        'search_items' => __('Search for videos', ''),
        'not_found' => __('No videos found', ''),
        'not_found_in_trash' => __('No videos found in trash', ''),
        'featured_image' => __('Featured image for video', ''),
        'set_featured_image' => __('Choose Featured image for video', ''),
        'remove_featured_image' => __('Removed Featured image for video', ''),
        'use_featured_image' => __('Choose Featured image for this video', ''),
        'archives' => __('video-arkive', ''),
        'insert_into_item' => __('Add into video', ''),
        'uploaded_to_this_item' => __('Uploaded to this video', ''),
    );

    $args = array(
        'label' => __('Videos', ''),
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_rest' => false,
        'rest_base' => '',
        'has_archive' => false,
        'show_in_menu' => true,
        'exclude_from_search' => false,
        'capability_type' => 'page',
        'map_meta_cap' => true,
        'hierarchical' => true, //för under-videos
        'rewrite' => array('slug' => __('videos'), 'with_front' => true),
        'query_var' => 'videos',
        'menu_position' => 5,
        'menu_icon' => 'dashicons-cart',
        'supports' => array('title', 'revisions', 'page-attributes'),
    );

    register_post_type('videos', $args);
}
add_action('init', 'bn_custom_post_types');

//Custom Taxonomies
function bn_custom_taxonomies()
{
    // new custom taxonomy hierarchical for videos
    $labels = array(
        'name' => 'Film Categories',
        'singular_name' => ' Film Category',
        'search_items' => 'Search Film Category',
        'all_items' => 'All Film Categories',
        'parent_item' => 'Parent Film Category',
        'parent_item_colon' => 'Parent Film Category:',
        'edit_item' => 'Edit Film Category',
        'update_item' => 'Update Film Category',
        'add_new_item' => 'Add New Film Category',
        'new_item_name' => 'New Film Category Name',
        'menu_name' => 'Film Categories',
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'film-category'),
    );
    register_taxonomy('film-category', array('videos'), $args);
}
add_action('init', 'bn_custom_taxonomies');

//ACF options page
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'position' => 3.33,
    ));
}

function my_acf_admin_head()
{
?>
<script type="text/javascript">
(function($) {
    $(document).ready(function() {
        $('.layout').addClass('-collapsed');
        $('.acf-postbox').addClass('closed');
    });
})(jQuery);
</script>
<?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head');

/**
 * WCAG 2.0 Attributes for Dropdown Menus
 */
function wcag_nav_menu_link_attributes($atts, $item, $args, $depth)
{
    // Add [aria-haspopup] and [aria-expanded] to menu items that have children
    $item_has_children = in_array('menu-item-has-children', $item->classes);
    if ($item_has_children) {
        $atts['aria-haspopup'] = "true";
        $atts['aria-expanded'] = "false";
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'wcag_nav_menu_link_attributes', 10, 4);