<section class="video_section section_spacing_top_mini">

    <div class="video_filter">
        <div class="container">
            <div class="sidebar-module">
                <ul class="videos">

                    <?php $post_type = 'videos';

                    if (isset($_GET['filter'])) {
                        $filter = $_GET['filter'];
                    } else {
                        $filter = 'getting-started';
                    } ?>

                    <?php    // Get all the taxonomies for this post type
                    $taxonomies = get_object_taxonomies((object) array('post_type' => $post_type));
                    foreach ($taxonomies as $taxonomy) {
                        // Gets every "category" (term) in this taxonomy to get the respective posts
                        $terms = get_terms($taxonomy); ?>

                    <?php foreach ($terms as $term) {
                            if ($term->slug === $filter) {
                                $activeClass = 'current-cat';
                            } else {
                                $activeClass = '';
                            } ?>
                    <li class="cat-item <?php echo $activeClass ?>"><a
                            href="/Boozang/videos?filter=<?php echo $term->slug ?>">
                            <?php echo $term->name  ?></a>
                    </li>

                    <?php
                        }
                    } ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php
            $post_type = 'videos';

            // Get all the taxonomies for this post type
            $taxonomies = get_object_taxonomies((object) array('post_type' => $post_type));

            foreach ($taxonomies as $taxonomy) {

                // Gets every "category" (term) in this taxonomy to get the respective posts
                $terms = get_terms($taxonomy); ?>

            <?php foreach ($terms as $term) { ?>

            <?php $posts = new WP_Query("taxonomy=$taxonomy&term=$term->slug&posts_per_page=-1");

                    if ($posts->have_posts() && !isset($filter) || $term->slug === $filter) {
                        while ($posts->have_posts()) {
                            $posts->the_post(); ?>

            <div class="col-sm-6 col-lg-4">
                <div class="video_container">

                    <?php $video_url = get_field('url');
                                    $style = '';
                                    $bg_img = get_field('background_image'); ?>
                    <div class="embed_container" <?php echo $style; ?>>
                        <!-- url -->
                        <?php if ($video_url) { ?>
                        <a class="video_link" href="<?php echo $video_url; ?>">
                        </a>
                        <?php } ?>

                        <div class="img_container">

                            <?php $image = get_field('image');
                                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                            if ($image) {
                                                echo wp_get_attachment_image($image, $size);
                                            } ?>
                        </div>
                    </div>
                    <div class="content_container">
                        <?php echo '<span class="cat_badge">' . $term->name . '</span>'; ?>
                        <div class="content_container_inner">
                            <h6 class="title"><?php the_title(); ?></h6>
                            <p class="description"><?php the_field('description'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                        }
                    }
                }
            } ?>
        </div>
    </div>
    </div>
    </div>
</section>