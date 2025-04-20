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
    $header_class = 'header_main';
    $style = '';
    $row_class = 'justify-content-start';
    $col_class = 'col-md-8 offset-md-2 col-lg-6 offset-lg-3';

    if (is_front_page()) {
        $header_class = 'header_main front';
        $row_class = 'justify-content-between';
        $col_class = 'col-12 col-md-6 col-xl-5';
        $header_image_front = get_field('header_image_front');
    }
    if (is_singular('post')) {
        // $col_class = 'col-md-10 offset-md-1';
        $header_class = 'header_main single_post';
    }

    $color = get_field('header_background');
    $heading_pages = get_field('heading_pages');
    $header_btn_links = get_field('btn_links');
    ?>

    <header id="header_top" class="<?php echo $header_class; ?> <?php echo $color; ?>"
        <?php echo $style; ?>>

        <!-- get menu -->
        <?php get_template_part('template-parts/navigation/main-menu'); ?>
           

        <div class="header_items_section">
            <div class="container">
                <div class="row align-items-center <?php echo $row_class; ?>">
                    <div class="<?php echo $col_class; ?>">

                        <!-- heading for blog -->
                        <?php if (is_home() || is_archive()) {
                            $heading_pages = get_field('heading_pages', get_option('page_for_posts'));
                        } ?>
                        <!-- heading and text-->
                        <div class="header_heading">
                            <?php echo $heading_pages; ?>

                            <!-- <?php if (is_singular('post')) : ?> <h1> <?php the_title(); ?></h1>
                            <?php endif; ?> -->
                        </div>

                        <!-- button links -->
                        <?php if (have_rows('btn_links')) { ?>
                            <div class="btn_container">
                                <?php while (have_rows('btn_links')) {
                                    the_row();
                                    $link = get_sub_field('link');

                                    $btn_color = get_sub_field('btn_color'); ?>
                                    <?php
                                    if ($link) { ?>
                                        <a class="btn_link <?php echo $btn_color; ?>" href="<?php echo $link['url']; ?>"
                                            rel="noopener noreferrer"
                                            target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?>
                                        </a>
                                <?php }
                                } ?>
                            </div>
                        <?php  } ?>
                    </div>

                    <!-- header image for Front page-->
                    <?php if (is_front_page()) { ?>
                        <div class="col-12 col-md-6 col-xl-7">
                            <?php $image = wp_get_attachment_image_src($header_image_front, 'full'); ?>
                            <?php $alt_text = get_post_meta($header_image_front, '_wp_attachment_image_alt', true); ?>

                            <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" class="header_image_front" />
                        </div> <?php } ?>
                </div>
            </div>
        </div>
    </header>