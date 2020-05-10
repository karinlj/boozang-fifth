<?php get_header();?>

<div class="container_blog">
  <div class="blog_flow section_spacing_top_small">
    <div class="container">
      <div class="row">

        <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post();?>

        <!--get content.php-->
        <?php get_template_part('parts/content', get_post_format());?>

        <?php endwhile;?>

        <?php else: ?>
        <p><?php __('No Posts Found');?></p>
        <?php endif;?>

      </div>

      <!-- newsletter widget -->
      <div class="row">
        <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
          <section class="newsletter single">
            <div class="newsletter_content">

              <!--JetMail widget for newsletter-->
              <?php if (is_active_sidebar('newsletter')):

    dynamic_sidebar('newsletter');
endif;
?>
            </div>
          </section>
        </div>
      </div>

    </div>
    <?php // comments_template();?>
  </div>

  <?php get_footer();?>