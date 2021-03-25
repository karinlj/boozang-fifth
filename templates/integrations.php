<?php
// integrations layout for Front Page Block
?>
<section class="integrations_section section_spacing_top_medium">

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
</section>

<!-- two_columns_section -->
<section class="two_columns_section demo section_spacing_top_medium lightgrey">
	<div class="container">
		<div class="column_row">
			<!-- loopa flex content -->
			<div class="part text">
				<h3>The Lab</h3>
				<div>
					<h6> Welcome to the Boozang Test Lab!</h6>
					<div>Test different aspects of web applications and practice how to do test automation.</div>
					<h6>Testing ground for your automation tools.</h6>
					<div> Here you find a number of test categories, that each has a number of problems to solve. Each problem has a brief description and an information box of why this problem is worth solving. </div>
				</div>
			</div>

			<div class="part image"> 
        <a href="http://thelab.boozang.com/" class="img_link" target="_blank" rel="noreferrer noopener"></a>
        <img src="https://localhost/Boozang/wp-content/uploads/2021/03/thelabTablesImg.jpg" alt="Map view"></div>
		</div>
	</div>
</section>




 


 

