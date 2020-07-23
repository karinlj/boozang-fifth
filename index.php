<?php get_header();?>

<div class="container_blog">

  <?php get_template_part('parts/blog-sidebar');?>

  <div class="blog_flow section_spacing_top_medium">
    <div class="container">
      <div class="row">

        <!--main post loop-->
        <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post();?>

        <!-- get content.php-->
        <?php get_template_part('parts/content', get_post_format());?>

        <?php endwhile;?>
      </div>

      <div class="paginate_links">
        <?php
$pages = array(

    'prev_text' => __('<i class="fas fa-angle-double-left"></i>'),
    'next_text' => __('<i class="fas fa-angle-double-right"></i>'),
);

if (paginate_links($pages)) {?>
        <button class=" btn">
          <?php echo paginate_links($pages); ?>
        </button>
        <?php }?>
      </div>

      <?php else: ?>
      <p><?php __('No Posts Found');?></p>
      <?php endif;?>
    </div>
  </div>
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