  <!--listing of categories on blog-->

  <div class="blog_sidebar">
      <div class="container">
          <?php if (is_active_sidebar('sidebar-blog')) : ?>
              <?php dynamic_sidebar('sidebar-blog'); ?>
          <?php endif; ?>
      </div>
  </div>