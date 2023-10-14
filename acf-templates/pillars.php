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
                    <h2 class="pillars_top_heading"><?php the_sub_field('top_heading'); ?></h2>
                    <h3 class="pillars_heading"><?php the_sub_field('heading'); ?></h3>
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