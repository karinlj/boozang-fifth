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
</section>

   <!-- aspect_wrapper -->
   <section class="two_columns_blocks">
	<div class="aspect_wrapper text">
		<div class="box text myblue">
			<div class="text_part">
				<div class="text_part_child">
        <h4>Read more about all the Boozang features</h4>
				<ul>
          <li>Feature overview</li>
          <li>BDD/Cucumber support</li>
          <li>Data Handling</li>
        </ul>
					<p></p>
				</div>
			</div>
		</div>
	</div>
  <div class="aspect_wrapper text">
		<div class="box text newblue">
			<div class="text_part">
				<div class="text_part_child">
        <i class="fas fa-graduation-cap boxes-icon"></i>
					<h4>theLab </h4>
					<p></p>
					<p>I’m baby retro tattooed pour-over, I’m baby retro tattooed pour-over.</p>
					<p></p>
				</div>
			</div>
		</div>
	</div>
  <div class="aspect_wrapper image">
	<div class="box image"> 
  <img src="https://localhost/Boozang/wp-content/uploads/2021/03/thelabTables.jpg" target="_blank" alt="theLab"/>            
</div>
</div>
</section>
  <!-- boxes -->
  <!-- <section class="boxes">
	<div class="boxes_inner">
		<!-- <div class="box" style="background: url(&quot;/static/media/leaves_small.770460e1.jpg&quot;);">
			<div class="text-part-outer">
				<div class="text-part-inner"><i class="fas fa-laptop boxes-icon"></i>
					<h3 class="heading"> Web Technologies &amp; other</h3>
					<div class="text">
						<p><b>Git</b>, NPM, Webpack, Azure DevOps, Firebase.</p>
					</div>
				</div>
			</div>
		</div> -->
		<!-- <div class="box blue">
			<div class="text-part-outer">
				<div class="text-part-inner">
					<h3 class="heading">Create your account for free!</h3>
					<div class="text">
            <p>No credit card required.</p>
            <div class="btn_container">

            <a class="btn signup_btn" href="https://ai.boozang.com/#security/signup" target="">Sign Up today                  </a>

                </div>
					</div>
				</div>
			</div>
		</div>
		<div class="box extraLightBlue">
			<div class="text-part-outer">
				<div class="text-part-inner"><i class="fas fa-wordpress boxes-icon"></i><i class="fab fa-wordpress boxes-icon"></i>
					<h3 class="heading">Read more about all the Boozang features</h3>
					<div class="text">
          <p>I’m baby retro tattooed pour-over, I’m baby retro tattooed pour-over.</p>					</div>
				</div>
			</div>
		</div>
	</div>
</section>  --> 


 

