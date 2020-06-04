<?php get_header();?>

<div class="container_blog">
  <div class="blog_flow section_spacing_top_medium">
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
    </div>
    <?php // comments_template();?>
  </div>

  <!-- MailJet newsletter widget -->
  <section class="newsletter section_spacing_top_medium">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="newsletter_content">

            <?php if (is_active_sidebar('newsletter')):

    dynamic_sidebar('newsletter');
endif;
?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer();?>