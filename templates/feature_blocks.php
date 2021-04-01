<?php
// Feature blocks layout for Front Page Block
?>
<section class="feature_blocks section_spacing_top_medium">
    <?php
   $heading = get_sub_field('heading');
if ($heading) {?>
    <h2 class="main_heading"> <?php echo $heading; ?></h2>
    <?php
}?>
    <div class="container">
        <?php
// check if the repeater field has rows
if (have_rows('feature_blocks_row')) {
    while (have_rows('feature_blocks_row')) {
        the_row(); ?>

        <div class="row align-items-start">
            <!-- <div class="row no-gutters align-items-start"> -->
            <?php
// check if the repeater field has rows
        if (have_rows('content')) {
            while (have_rows('content')) {
                the_row();

                $style = '';
                $color = get_sub_field('color_theme');
                $bg_image = get_sub_field('background_image');
                $link_url = get_sub_field('link_url');
                $overlay_color = '';
                
                if ($bg_image) {
                    $style = 'style="background:url(\'' . wp_get_attachment_url($bg_image, 'full') . '\') no-repeat center; background-size: cover"';
                    $overlay_color = get_sub_field('overlay_color');
                }
                $col_class = 'col-12 col-lg-4';
                if (get_sub_field('columns_wide') == 'large') {
                    $col_class = 'col-12 col-lg-8';
                } ?>

            <div class="<?php echo $col_class; ?>">
                <section class="single_block <?php echo $color; ?> <?php echo $overlay_color; ?>" <?php echo $style; ?>>
                    <div class="inner_items">
                        <h4 class=" heading"><?php the_sub_field('heading'); ?></h4>
                        <p class="text"><?php the_sub_field('text'); ?></p>
                    </div>
                    <?php if ($link_url) {?>
                    <a href="<?php echo $link_url; ?>" class="link"></a>
                    <?php
                        } ?>

                </section>
            </div>
            <?php
            }
        } ?>
        </div>
        <?php
    }
}
?>
    </div>
</section>