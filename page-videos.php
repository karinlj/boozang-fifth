<?php
/*
 * Template Name: Videos
 * Description: Template for Video Tutorials Page
 */
?>
<?php get_header();?>

<section class="videos_udemy_section section_spacing_top_medium">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <!-- get check list -->
        <?php get_template_part('parts/check-list');?>
      </div>

      <div class="col-lg-8">
        <!-- get cards -->
        <?php get_template_part('parts/cards');?>
      </div>
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