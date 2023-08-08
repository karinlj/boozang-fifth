<?php get_header(); ?>

<div class="container_blog">

    <?php get_template_part('parts/blog-sidebar'); ?>

    <div class="blog_flow section_spacing_top_small">
        <div class="container">
            <div class="row">

                <!--main post loop-->
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <!-- get content.php-->
                        <?php get_template_part('parts/content', get_post_format()); ?>

                    <?php endwhile; ?>
            </div>

            <div class="paginate_links">
                <?php
                    $pages = array(

                        'prev_text' => __('<button aria-label="Next page"><i class="fas fa-angle-double-left" aria-hidden="true"></i></button>'),
                        'next_text' => __('<button aria-label="Previous page"><i class="fas fa-angle-double-right" aria-hidden="true"></i></button>'),
                    );

                    if (paginate_links($pages)) { ?>
                    <div class="btn">
                        <?php echo paginate_links($pages); ?>
                        </button>
                    <?php } ?>
                    </div>

                <?php else : ?>
                    <p><?php __('No Posts Found'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>


    <?php get_footer(); ?>