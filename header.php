<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset=" <?php bloginfo('charset');?> ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content=" <?php bloginfo('description');?>">
    <!-- <link rel="icon" href="../../favicon.ico">-->

    <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
    <title><?php bloginfo('name');?> | <?php is_front_page() ? bloginfo('description') : wp_title();?>
    </title>

    <?php wp_head();?>

</head>

<body <?php body_class();?>>

    <?php //header field variables
$col_class = 'col-md-8 offset-md-2 col-lg-6 offset-lg-3';
$header_class = 'header_small';
$style = '';
$color = '';
$header_bgImage = get_field('header_image');
$overlay_color = '';
$header_heading_pages = get_field('header_heading_pages');
$header_text_pages = get_field('header_text_pages');
?>

    <?php if (is_singular('post')) {
    $col_class = 'col-md-10 offset-md-1';
}

// header class
if (is_front_page() || is_page('lp1') || is_page('lp2') || is_page('lp3') || is_page('lp4')) {
    $header_class = 'header_big';
}

// header background
if (get_field('color_theme')) {
    $color = get_field('color_theme');
} elseif (get_field('color_default', 'option')) { //default header background
    $color = get_field('color_default', 'option');
}

// header background image
if ($header_bgImage) {
    $style = 'style="background: url(\'' . wp_get_attachment_url($header_bgImage, 'full') . '\') no-repeat center;
  background-size: cover"';
    $overlay_color = get_field('overlay_color');
}

if (is_home() || is_singular('post') || is_archive()) {
    $color = get_field('color_theme', get_option('page_for_posts')); //for blog
    $header_bgImage = get_field('header_image', get_option('page_for_posts'));

    if ($header_bgImage) {
        $style = 'style="background: url(\'' . wp_get_attachment_url($header_bgImage, 'full') . '\') no-repeat center;
  background-size: cover"';
        $overlay_color = get_field('overlay_color', get_option('page_for_posts'));
    }
}
?>

    <header class="<?php echo $header_class; ?> <?php echo $color; ?> <?php echo $overlay_color; ?>"
        <?php echo $style; ?>>

        <!-- get menu -->
        <?php get_template_part('parts/main-menu');?>

        <div class="header_items_section">
            <div class="container">
                <div class="row">

                    <!-- column for pages-->
                    <div class="<?php echo $col_class; ?>">

                        <?php if (is_home() || is_archive()) { //for blog
    $header_heading_pages = get_field('header_heading_pages', get_option('page_for_posts'));
    $header_text_pages = get_field('header_text_pages', get_option('page_for_posts'));
}?>
                        <h1 class="header_heading">
                            <?php echo $header_heading_pages; ?>

                            <!-- title in header for single post -->
                            <?php if (is_singular('post')): the_title();endif;?>
                        </h1>

                        <p class="header_text">
                            <?php echo $header_text_pages; ?>
                        </p>
                    </div>


                    <!-- column / columns for front pages-->
                    <?php
if (is_front_page() || is_page('lp1') || is_page('lp2') || is_page('lp3') || is_page('lp4')) {

// half column width
    if (get_field('half_width') == 'small') {
        $col_class = 'col-12 col-lg-6';
    } elseif (get_field('half_width') == 'large') {
        $col_class = 'col-md-10 offset-md-1';
    } ?>
                    <div class="<?php echo $col_class; ?>">
                        <!-- heading, text, buttons -->
                        <?php //Loop flex content for layouts of header_items
    if (have_rows('header_items')) {
        while (have_rows('header_items')) {
            the_row();

            $layout = get_row_layout();
            // load the layout from  templates folder
            get_template_part('templates/' . $layout);
        }
    } ?>
                    </div>

                    <!-- header small image -->
                    <div class="col-12 col-lg-6">
                        <!-- <div class="header_image_section">
                            <?php $img_id = get_field('header_small_image');
    echo wp_get_attachment_image($img_id, 'full'); ?>
                        </div> -->

                        <!-- get feature_slider -->
                        <!-- <?php get_template_part('parts/feature_slider'); ?> -->
                        <section class="two-columns-section feature_slider ">

                            <div class="comes-first">
                                <div class="feat_slider_wrapper">

                                    <!-- I have 1-->

                                    <img id="1y_img" class="feat_img inactive active"
                                        src="https://localhost/Boozang/wp-content/uploads/2020/06/ide-style.png"
                                        alt="IDE-style interface">
                                    <!-- I have 2-->
                                    <img id="2y_img" class="feat_img inactive"
                                        src="https://localhost/Boozang/wp-content/uploads/2020/05/map-view.png"
                                        alt="Map view">
                                    <!-- I have 3-->
                                    <img id="3y_img" class="feat_img inactive"
                                        src="https://localhost/Boozang/wp-content/uploads/2020/05/cucumber-built-in.png"
                                        alt="Cucumber support built-in">
                                </div>
                            </div>
                            <div class="comes-last">
                                <div class="feat_list">
                                    <!-- <h3>Why use Boozang?</h3> -->
                                    <!-- <p class="feature-description-mobile">Automate all module operations and build upstream tests based on business requirements. All tests are recorded in natural language and run stable independent of coding details, making tests completely agnostic to underlying technology.</p> -->
                                    <ul id="features_menu">
                                        <!--I have 1-->
                                        <li id="1y" class="features_menu_item inactive active">
                                            <span id="1y">IDE-style interface</span>
                                            <!-- <p class="text">The user-friendly IDE-style interface uses tabs for quick test authoring.  No coding required.</p> -->
                                        </li>
                                        <!--I have 2-->
                                        <li id="2y" class="features_menu_item inactive">
                                            <span id="2y">Graphic maps</span>
                                            <!-- <p class="text">Generate graphic maps that shows all test relationships. Quickly find bugs and optimizations. </p> -->
                                        </li>
                                        <!--I have 3-->
                                        <li id="3y" class="features_menu_item inactive">
                                            <span id="3y">Cucumber support</span>
                                            <!-- <p class="text">Built-in support for BDD. Synchronize your Gherkin tests from XRay / Jira or your versioning system.</p> -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>

                    </div>
                    <?php
}
?>
                    <!-- row -->
                </div>
            </div>
        </div>
    </header>