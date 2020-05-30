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
        $color = get_sub_field('color_theme');
        $logo_img = get_sub_field('logo_image');
        $course_url = get_sub_field('url');?>

      <!-- bgImage -->
      <?php if ($logo_img) {?>

      <?php $style = 'style="background: white url(\'' . wp_get_attachment_url($logo_img, 'full') . '\') no-repeat; background-position: 25px 25px; background-size: 50px 55px"';
        }?>

      <div class="col-md-6 col-lg-12 col-xl-6">
        <div class="course_card <?php echo $color; ?>" <?php echo $style; ?>>
          <!-- url -->
          <?php if ($course_url) {?>
          <a class="course_link" href="<?php echo $course_url; ?>">
          </a>
          <?php }?>

          <!-- text -->
          <h6 class="course_name"><?php the_sub_field('text');?> </h6>
          <!-- call to action -->
          <a class="arrow_link"><?php the_sub_field('call_to_action');?> </a>
        </div>
      </div>
      <?php
}
}?>

    </div>
  </div>
</section>