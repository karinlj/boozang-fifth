<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset=" <?php bloginfo('charset'); ?> ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content=" <?php bloginfo('description'); ?>">
    <!-- <link rel="icon" href="../../favicon.ico">-->

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <?php //header field variables
    $col_class = 'col-md-8 offset-md-2 col-lg-6 offset-lg-3';
    $header_class = 'header_small';
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

    // header class
    if (is_front_page() || is_page('lp1') || is_page('lp2') || is_page('lp3') || is_page('beta')) {
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
    } ?>

    <header class="<?php echo $header_class; ?> <?php echo $color; ?> <?php echo $overlay_color; ?>"
        <?php echo $style; ?>>

        <!-- get menu -->
        <?php get_template_part('parts/main-menu'); ?>

        <div class="header_items_section">
            <div class="container">
                <div class="row">
                    <!-- column for pages-->
                    <div class="<?php echo $col_class; ?>">

                        <?php if (is_home() || is_archive()) { //for blog
                            $heading_pages = get_field('heading_pages', get_option('page_for_posts'));
                            $header_text_pages = get_field('header_text_pages', get_option('page_for_posts'));
                        } ?>
                        <h1 class="header_heading">
                            <?php echo $heading_pages; ?>
                            <!-- title in header for single post -->
                            <?php if (is_singular('post')) : the_title();
                            endif; ?>
                        </h1>
                        <p class="header_text">
                            <?php echo $header_text_pages; ?>
                        </p>
                    </div>

                    <!-- column / columns for front pages-->
                    <?php
                    if (is_front_page() || is_page('lp1') || is_page('lp2') || is_page('lp3') || is_page('beta')) {

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
                    <div class="col-12 col-lg-6">
                        <!-- header small image -->
                        <?php if (get_field('header_small_image')) { ?>
                        <div class="header_image_section">
                            <?php $img_id = get_field('header_small_image');
                                    echo wp_get_attachment_image($img_id, 'full'); ?>
                        </div>
                        <?php } ?>

                        <!-- feature_slider -->
                        <?php if (have_rows('feature_slider')) { ?>
                        <section class="feature_slider_new">
                            <?php
                                    $i = 0;
                                    while (have_rows('feature_slider')) {
                                        the_row();
                                        $i++; ?>
                            <!-- I have <?php echo $i; ?> I -->
                            <?php
                                        $image = get_sub_field('img');
                                        //echo $image;
                                        if (!empty($image)) { ?>
                            <img id="tab_id_<?php echo $i ?>" class="tab_content" src="<?php echo $image['url']; ?>"
                                alt="<?php echo $image['alt']; ?>" />

                            <?php }
                                        $video = get_sub_field('video');
                                        if (!empty($video)) {

                                            if ($i == 1) { ?>
                            <div id="tab_id_<?php echo $i ?>" class="tab_video_content active"><?php echo $video; ?>
                            </div>

                            <?php } else { ?>
                            <div id="tab_id_<?php echo $i ?>" class="tab_video_content "><?php echo $video; ?></div>
                            <?php }
                                        }
                                    } ?>
                            <ul class="tabs">
                                <?php $j = 0;
                                        while (have_rows('feature_slider')) {
                                            the_row();
                                            $j++; ?>
                                <!-- I have <?php echo $j; ?> J -->
                                <?php
                                            if (get_sub_field('tab_link')) { ?>
                                <li class="tab_link" data_tab="tab_id_<?php echo $j ?>">
                                    <span><?php the_sub_field('tab_link'); ?></span>
                                </li>
                                <?php
                                            }
                                        } ?>

                            </ul>
                        </section>
                        <?php } ?>
                    </div>
                    <?php
                    }
                    ?>
                    <!-- row -->
                </div>
                <!-- btn links -->
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-8">
                        <ul class="btn_links">
                            <!-- repeater field -->
                            <?php
                            if (have_rows('btn_links')) { ?>
                            <?php while (have_rows('btn_links')) {
                                    the_row();
                                    $link = get_sub_field('link'); ?>

                            <div class="btn_container">
                                <?php
                                        if ($link) { ?>
                                <a class="btn link" href="<?php echo $link['url']; ?>"
                                    target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?>
                                </a>
                                <?php } ?>

                            </div>
                            <?php
                                }
                            } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>