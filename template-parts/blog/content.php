<?php
//blog variables - default: (!is_single()
$col_class = 'col-sm-6 col-md-4 col-lg-3';
$post_class = 'post_card';
?>

<!-- column size -->
<?php if (is_single()) {
    $col_class = 'col-lg-10 offset-lg-1';
} ?>
<div class="<?php echo $col_class; ?>">

    <?php if (is_single()) {
        $post_class = 'post_card single';
    } ?>
    <article class="<?php echo $post_class; ?>">
        <?php the_post_thumbnail(); ?>

        <!-- link if blog page  -->
        <?php if (!is_single()) { ?>
            <a class="post_link" href="<?php the_permalink(); ?>" aria-label="<?php the_title(); ?>">
            </a>
        <?php } ?>

        <div class="post_content">
            <?php $categories = get_the_category();
            $separator = ", ";
            $output = '';

            if ($categories) {
                foreach ($categories as $category) {
                    // categories as a link separated by comma
                    $output .= '<a class ="category" href=" ' . get_category_link($category->term_id) . ' ">' . $category->cat_name . '</a>' . $separator;
                }
                //trim takes $output and removes $separator
                echo trim($output, $separator);
            }
            ?>
            <?php if (!is_single()) { ?>
                <div class="post_content_inner">
                <?php } ?>

                <header class="post_heading">
                    <h2 class="blog_post_title">
                        <?php the_title(); ?>
                    </h2>
                </header>
                <!-- meta - single-->
                <?php if (is_single()) { ?>
                    <div class="blog_post_meta">

                        <p>by <?php the_author(); ?> &nbsp; | &nbsp;</p>
                        <p><?php echo get_the_date('F j, Y'); ?></p>
                    </div>
                <?php } ?>

                <main class="post_text">
                    <!-- content and exerpt-->
                    <!--if search.php or archive.php -> show only excerpts-->
                    <?php if (is_search() or is_archive()) { ?>
                        <p><?php echo get_the_excerpt(); ?></p>
                        <?php } else {

                        /*if excerpt used in adminGUI -> show excerpt*/
                        if ($post->post_excerpt) { ?>

                            <p><?php echo get_the_excerpt(); ?></p>
                    <?php } else {
                            the_content();
                        }
                    } ?>
                </main>

                <?php if (!is_single()) { ?>
                    <!--/end  post_content_inner -->
                </div>
            <?php } ?>

            <!-- meta - blog page-->
            <?php if (!is_single()) { ?>
                <footer class="blog_post_meta">
                    <p>by <?php the_author(); ?></p>
                    <p><?php echo get_the_date('F j, Y'); ?></p>
                </footer>
            <?php } ?>

        </div>
    </article>
</div>