<!-- cards template -->

<section class="udemy_cards">
  <div class="container">
    <div class="row">

      <?php
// check if the repeater field has rows
if (have_rows('cards')) {

    while (have_rows('cards')) {
        the_row();

        $style = '';
        $logo_img = get_sub_field('logo_image');
        $course_url = get_sub_field('url');?>

      <!-- bgImage -->
      <?php if ($logo_img) {?>

      <?php $style = 'style="background: white url(\'' . wp_get_attachment_url($logo_img, 'full') . '\') no-repeat; background-position: 25px 25px; background-size: 50px 55px"';
        }?>

      <div class="col-md-6 col-lg-12 col-xl-6">
        <div class="course_card" <?php echo $style; ?>>
          <!-- url -->
          <?php if ($course_url) {?>
          <a class="course_link" href="<?php echo $course_url; ?>">
          </a>
          <?php }?>

          <!-- text -->
          <p class="course_name"><?php the_sub_field('text');?> </p>
          <!-- call to action -->
          <p class="cta"><?php the_sub_field('call_to_action');?> </p>
        </div>
      </div>
      <?php
}
}?>

    </div>
  </div>
</section>