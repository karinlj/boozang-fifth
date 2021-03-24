<?php
// get started layout for Front Page Block

$style = '';
$color = get_sub_field('color_theme');
$bg_image = get_sub_field('background_image');
$link_url = get_sub_field('link_url');
$link_text = get_sub_field('link_text');

if ($bg_image) {
    $style = 'style="background:url(\'' . wp_get_attachment_url($bg_image, 'full') . '\') no-repeat center; background-size: cover"';
    $overlay_color = get_sub_field('overlay_color');
}?>


     <!-- aspect_wrapper -->
     <!-- <section class="two_columns_blocks section_spacing_top_big">
      <div class="aspect_wrapper text darkblue">
        <div class="box text">
          <div class="text_part">
            <div class="text_part_child"> <i class="fas fa-graduation-cap boxes-icon"></i>
              <h4>I'm baby retro tattooed pour-over</h4>
              <p></p>
              <p>I’m baby retro tattooed pour-over, I’m baby retro tattooed pour-over.</p>
              <p></p>
            </div>
          </div>
        </div>
      </div>
      <div class="aspect_wrapper image">
      <div class="box image"> <img src="https://localhost/Boozang/wp-content/uploads/2021/03/thelabTables.jpg" target="_blank" alt="theLab" /> </div>
      </div>
    </section>  -->

 


<section class="get_started_banner <?php echo $color; ?> <?php echo $overlay_color; ?> section_spacing_top_big"
  <?php echo $style; ?>>

  <div class="container">
    <div class="row">
      <div class="col-lg-6">

        <h2 class=""><?php the_sub_field('heading');?></h2>

        <div class="sub_info_part bigscreen">
          <p class=""><?php the_sub_field('text');?></p>

          <?php if ($link_url && $link_text) {?>

          <a href="<?php echo $link_url; ?>" class="banner_link"><?php echo $link_text; ?></a>
          <?php
}
?>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="action_items">
          <?php
// check if the repeater field has rows
if (have_rows('action_items')) {

    while (have_rows('action_items')) {
        the_row();
        ?>
          <div class="action_item">

            <h5><?php the_sub_field('action_heading');?></h5>
            <p><?php the_sub_field('action_text');?></p>
          </div>

          <?php
}
}
?>
        </div>
        <div class="sub_info_part smallscreen">
          <p class=""><?php the_sub_field('text');?></p>

          <?php
if ($link_url && $link_text) {?>

          <a href="<?php echo $link_url; ?>" class="banner_link"><?php echo $link_text; ?></a>
          <?php
}
?>
        </div>
      </div>

    </div>
  </div>
</section>