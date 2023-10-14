<?php
//All resourses for the site

//Scripts
function bn_script_resourses()
{
    //name, absolute path, dependencies, version, in_footer
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.12.4', true);

    wp_register_script(
        'custom_script',
        home_url() . '/wp-content/themes/boozang-fifth/assets/js/custom_script.js',
        array('jquery'),
        '1.0.0',
        true
    );
    wp_enqueue_script('custom_script');
}
add_action('wp_enqueue_scripts', 'bn_script_resourses');

//Styles
function bn_style_resourses()
{
    //name, absolute path, dependencies, version, media
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');

    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0', 'all');

    wp_enqueue_style('font-awesome-5', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css', array(), null);

    wp_enqueue_style('boozang-fifth-custom', get_stylesheet_directory_uri() . '/assets/css/custom.css');
}
add_action('wp_enqueue_scripts', 'bn_style_resourses');

//Fonts
function google_fonts()
{
    //Av någon anledning knasar det med wp_enqueue_script
?>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

<?php
}
add_action('wp_head', 'google_fonts');

?>