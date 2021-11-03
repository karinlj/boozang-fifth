<?php
/*
 * Template Name: Videos
 * Description: Template for Video Tutorials Page
 */
?>
<?php get_header();?>
<!-- <section class="alternative_blocks section_spacing_top_small"> -->
<section class="alternative_blocks">

    <div class="container">
        <div class="row justify-content-between">

            <?php // for layouts of content_block_pages
if (function_exists('have_rows')) {
    if (have_rows('alternative_blocks')) {
        while (have_rows('alternative_blocks')) {
            the_row();

            $layout = get_row_layout();
            // load the layout from the templates folder
            get_template_part('templates/' . $layout);
        }
    }
}?>

        </div>
    </div>
</section>
<!-- get video-list -->
<?php get_template_part('parts/video-list');?>
<?php wp_reset_postdata();?>

<?php // for layouts of content_block_pages
if (function_exists('have_rows')) {
    if (have_rows('content_block_pages')) {
        while (have_rows('content_block_pages')) {
            the_row();

            $layout = get_row_layout();
            // load the layout from the templates folder
            get_template_part('templates/' . $layout);
        }
    }
}?>


<?php get_footer();?>