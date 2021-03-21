<?php //layout in front page blocks
$color = get_sub_field('color_theme');
?>

<div class="container">
    <div class="row">
       <div class="col">

        <section class="pillars-section section_spacing_top_medium">
          <div class="container">
            <div class="row align-items-start">

              <?php
        // check if the repeater field has rows
        if (have_rows('pillars_content')) {

            while (have_rows('pillars_content')) {
                the_row();
                ?>
              <div class="col-lg">
                <div class="pillars-item">
                  <h6 class="top-heading <?php echo $color; ?>"><?php the_sub_field('top_heading');?></h6>

                  <h4 class="heading"><?php the_sub_field('heading');?></h4>
                  <p class="text"><?php the_sub_field('text');?></p>
                </div>
              </div>
              <?php
        }
        }
        ?>
            </div>
          </div>
        </section>
</div>
</div>
</div>
  