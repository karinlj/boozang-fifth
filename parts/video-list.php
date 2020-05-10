<section class="video_section section_spacing_top_medium">
  <div class="container">

    <div class="row">
      <div class="col-12">
        <div class="video_list">

          <?php
$post_type = 'videos';

// Get all the taxonomies for this post type
$taxonomies = get_object_taxonomies((object) array('post_type' => $post_type));

foreach ($taxonomies as $taxonomy) {

    // Gets every "category" (term) in this taxonomy to get the respective posts
    $terms = get_terms($taxonomy);?>

          <?php foreach ($terms as $term) {?>

          <?php $posts = new WP_Query("taxonomy=$taxonomy&term=$term->slug&posts_per_page=-1");

        if ($posts->have_posts()) {

            while ($posts->have_posts()) {

                $posts->the_post();?>

          <?php $video_url = get_field('url');
                $style = '';
                $bg_img = get_field('background_image');
                ?>

          <!-- bgImage -->
          <?php if ($bg_img) {?>

          <?php $style = 'style="background: #2e9ce6 url(\'' . wp_get_attachment_url($bg_img, 'full') . '\') no-repeat center; background-size: cover"';
                } else {
                    $style = 'style="background-image: linear-gradient(to right bottom, #0a3b5c, #0b4267, #0c4a73, #0e517e, #0f598a)"';
                }?>

          <div class="video_container">
            <div class="embed_container" <?php echo $style; ?>>

              <!-- url -->
              <?php if ($video_url) {?>
              <a class="video_link" href="<?php echo $video_url; ?>">
              </a>
              <?php }?>

              <p class="title_on_img"><?php the_title();?></p>
            </div>

            <?php echo '<span class="cat_badge">' . $term->name . '</span>'; ?>

            <h6 class="title"><?php the_title();?></h6>
            <p class="description"><?php the_field('description');?></p>
          </div>

          <?php
}

        }
    }
}?>
        </div>
      </div>
    </div>
  </div>

</section>