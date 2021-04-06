<?php
/*
 * Template Name: Forum
 * Description: Template for Forum
 */
?>
<?php get_header();?>

<section class="forum_section section_spacing_top_medium">
    <div class="container">
        <div class="row">
            <div class="col-xl-9">

                <?php while (have_posts()):
    the_post();

    get_template_part('parts/content-forum');

    // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()):
        comments_template();
    endif;

endwhile; // End the loop.
?>
            </div>
            <div class="col-xl-3">

                <?php get_template_part('parts/sidebar-forum');?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>