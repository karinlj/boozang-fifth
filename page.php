<?php
/*
 * Template Name: Page
 * Description: Template for Default Page
 */
?>
<?php get_header();?>

<div class="content_container_page">
    <?php // for layouts of content_block_pages

//Loopa ACF flex Content
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
</div>

<?php get_footer();?>