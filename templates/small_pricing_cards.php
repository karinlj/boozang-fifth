<?php
// boxes layout for Pages Content block
if (get_row_layout() == 'small_pricing_cards') {

    $heading = get_sub_field('heading');
    $bgColor = get_sub_field('background_color');
    ?>

<section class="small_pricing_cards_section <?php echo $bgColor; ?> section_spacing_top_big">

  <div class="container">
    <?php if ($heading) {?>
    <h3 class="heading text-center"><?php echo $heading; ?></h3>
    <?php }?>

    <div class="row justify-content-center">

      <?php //horizontal_box repeater
    if (have_rows('small_pricing_cards_list')) {

        while (have_rows('small_pricing_cards_list')) {
            the_row();
            $color = get_sub_field('color_theme');

            $box_heading = get_sub_field('heading');
            $box_text = get_sub_field('text');
            $box_price = get_sub_field('price');
            $mail_link = get_sub_field('mail_link');
            ?>

      <div class="col-lg-6">
        <div class="card <?php echo $color; ?>">
          <div class="card-body">
            <div class="small_pricing_card">

              <div class="row align-items-center justify-content-between">
                <div class="col-sm-9">
                  <h4 class="heading>"><?php echo $box_heading; ?></h4>

                  <p class="text <?php echo $color; ?>"><?php echo $box_text; ?></p>

                  <p class="">
                    <a href="mailto:<?php echo $link; ?>" target="_blank"><i class="fas fa-envelope"
                        aria-hidden="true"></i> <?php echo $mail_link; ?></a>
                  </p>
                </div>

                <div class="col-sm-3">
                  <div class="price">
                    <h3 class=""><?php echo $box_price; ?></h3>
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