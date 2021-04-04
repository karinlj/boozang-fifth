<?php //layout in front page blocks
$color = get_sub_field('color_theme');
?>

<section class="pillars_section <?php echo $color; ?> section_spacing_top_mini">
    <div class="container">
        <div class="row align-items-start">
            <?php
        // check if the repeater field has rows
        if (have_rows('pillars_content')) {
            while (have_rows('pillars_content')) {
                the_row(); ?>
            <div class="col-md">
                <div class="pillars_item">
                    <h6 class="top-heading"><?php the_sub_field('top_heading'); ?></h6>
                    <h6 class="heading"><?php the_sub_field('heading'); ?></h6>
                    <p class="text"><?php the_sub_field('text'); ?></p>
                </div>
            </div>
            <?php
            }
        }
        ?>
        </div>
    </div>
</section>