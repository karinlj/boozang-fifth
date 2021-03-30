<?php
// smaller_items for Front Page Block
?>
<section class="smaller_items section_spacing_top_small">
    <header class="header text-center">
        <h3 class="heading"><?php the_sub_field('heading'); ?></h3>
    </header>
    <div class="container">
        <div class="row no-gutters align-items-start">
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
                } ?>

            <div class="<?php echo $col_class; ?>">

                <div class="banner-item <?php echo $color; ?>">
                    <p class="banner-icon">
                        <i class="fas fa-<?php echo $icon; ?>"></i>
                    </p>
                    <h4 class="heading"><?php the_sub_field('heading'); ?></h4>
                    <p class="text"><?php the_sub_field('text'); ?></p>
                </div>
            </div>
            <?php
            }
        } ?>
        </div>

    </div>
</section>