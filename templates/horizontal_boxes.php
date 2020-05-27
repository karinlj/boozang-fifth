<?php
// boxes layout for Pages Content block
if (get_row_layout() == 'horizontal_boxes') {?>

<section class="horizontal_boxes_section section_spacing_top_medium">

  <h3 class="heading text-center"><?php the_sub_field('heading');?></h3>

  <div class="container">
    <div class="row justify-content-center">

      <?php //horizontal_box repeater
    if (have_rows('horizontal_boxes')) {

        while (have_rows('horizontal_boxes')) {
            the_row();
            ?>

      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <div class="horizontal-box">

              <div class="row align-items-center justify-content-between">
                <div class="col-sm-9">
                  <h4 class="heading>"><?php the_sub_field('heading');?></h4>

                  <p class="text <?php echo $color; ?>"><?php the_sub_field('text');?></p>
                  <?php $link = get_sub_field('mail_link');?>

                  <p class="">
                    <a href="mailto:<?php echo $link; ?>" target="_blank"><i class="fas fa-envelope"
                        aria-hidden="true"></i> <?php echo $link; ?></a>
                  </p>
                </div>

                <div class="col-sm-3">
                  <div class="price">
                    <h3 class=""><?php the_sub_field('price');?></h3>
                    <p class="price-text"><?php the_sub_field('price_text');?></p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php
}
    }?>

    </div>
  </div>
</section>

<?php
}?>