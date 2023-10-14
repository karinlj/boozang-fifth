<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset=" <?php bloginfo('charset'); ?> ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content=" <?php bloginfo('description'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php //header field variables
    $col_class = 'col-md-8 offset-md-2 col-lg-6 offset-lg-3';
    $header_class = 'header_main';
    $style = '';
    $color = '';
    $header_bgImage = get_field('header_image');
    $overlay_color = '';
    $heading_pages = get_field('heading_pages');
    $header_text_pages = get_field('header_text_pages');
    $header_btn_links = get_field('btn_links');
    ?>
    <?php if (is_singular('post')) {
        $col_class = 'col-md-10 offset-md-1';
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
    } ?>

    <header id="header_top" class="<?php echo $header_class; ?>  <?php echo $color; ?> <?php echo $overlay_color; ?>" <?php echo $style; ?>>

        <!-- get menu -->
        <?php get_template_part('template-parts/navigation/main-menu'); ?>

        <div class="header_items_section">
            <div class="container">
                <div class="row">
                    <!-- column for pages-->
                    <div class="<?php echo $col_class; ?>">

                        <!-- vad är detta tro? -->
                        <?php if (is_home() || is_archive()) { //for blog
                            $heading_pages = get_field('heading_pages', get_option('page_for_posts'));
                        } ?>
                        <div class="header_heading">
                            <?php echo $heading_pages; ?>

                            <!-- title in header for single post -->
                            <?php if (is_singular('post')) : ?> <h1> <?php the_title(); ?></h1>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6">
                        <?php
                        if (have_rows('btn_links')) { ?>
                            <ul class="btn_links">

                                <?php while (have_rows('btn_links')) {
                                    the_row();
                                    $link = get_sub_field('link');

                                    $btn_color = get_sub_field('btn_color'); ?>
                                    <div class="btn_container">
                                        <?php
                                        if ($link) { ?>
                                            <a class="btn link <?php echo $btn_color; ?>" href="<?php echo $link['url']; ?>" rel="noopener noreferrer" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?>
                                            </a>
                                        <?php } ?>

                                    </div>
                                <?php
                                } ?>
                            </ul>
                        <?php  } ?>

                    </div>
                </div>
            </div>
        </div>
    </header>