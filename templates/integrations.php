<?php
// integrations layout for Front Page Block
?>
<section class="integrations_section section_spacing_top_big">

  <div class="container">
    <div class="row align-items-center">
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

    <!-- aspect_wrapper -->
    <section class="two_columns_blocks section_spacing_top_big">
    <div class="aspect_wrapper image">
	<div class="box image"> 
  <img src="https://localhost/Boozang/wp-content/uploads/2021/03/thelabTables.jpg" target="_blank" alt="theLab"/>            
</div>
</div>

  <div class="aspect_wrapper text">
		<div class="box text">
			<div class="text_part">
				<div class="text_part_child">
        <i class="fas fa-graduation-cap boxes-icon"></i>
					<h4>I'm baby retro tattooed pour-over</h4>
					<p></p>
					<p>I’m baby retro tattooed pour-over, I’m baby retro tattooed pour-over.</p>
					<p></p>
				</div>
			</div>
		</div>
	</div>

</section> 




</section>