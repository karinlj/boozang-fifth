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


            <!-- boxes -->
            <section class="boxes">
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
		<div class="box darkblue">
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
</section> 


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