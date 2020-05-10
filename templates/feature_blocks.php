<?php
// Feature blocks layout for Front Page Block
?>
<section class="banner-section section_spacing_top_medium">
  <div class="container">
    <!-- <div class="row">
      <div class="col-md-10 offset-md-1"> -->

    <?php
// check if the repeater field has rows
if (have_rows('feature_blocks_row')) {

    while (have_rows('feature_blocks_row')) {
        the_row();
        ?>

    <div class="row align-items-start">
      <?php
// check if the repeater field has rows
        if (have_rows('content')) {

            while (have_rows('content')) {
                the_row();

                $color = get_sub_field('color_theme');
                $icon = get_sub_field('icon');
                $col_class = 'col-12 col-lg-4';

                if (get_sub_field('columns_wide') == 'large') {
                    $col_class = 'col-12 col-lg-8';
                }
                ?>

      <div class="<?php echo $col_class; ?>">

        <div class="banner-item <?php echo $color; ?>">

          <p class="banner-icon">
            <i class="fas fa-<?php echo $icon; ?>"></i>
          </p>

          <h3 class="heading"><?php the_sub_field('heading');?></h3>

          <p class="text"><?php the_sub_field('text');?></p>
        </div>
      </div>

      <?php
}
        }
        ?>

    </div>


    <?php
}
}
?>
    <!-- </div>
    </div> -->
  </div>

</section>