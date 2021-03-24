<?php
// integrations layout for Front Page Block
?>
<section class="integrations_section section_spacing_top_big">

  <div class="container">
    <!-- <div class="row align-items-center"> -->
    <div class="row">
      <div class="col-lg-6">
        <div class="text_section">
          <h2 class="">
            <?php the_sub_field('heading');?>
          </h2>
          <p>
            <?php the_sub_field('text');?>
          </p>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="icon_section">
          <div class="container">
            <div class="d-flex flex-wrap justify-content-between">
              <?php
// check if the repeater field has rows
if (have_rows('icon_box')) {

    while (have_rows('icon_box')) {
        the_row();
        ?>
              <div class="img_box">
                <span>
                  <?php $img_id = get_sub_field('icon_image');?>
                  <?php echo wp_get_attachment_image($img_id, 'full'); ?>
                </span>
              </div>
              <?php
}
}?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>






</section>