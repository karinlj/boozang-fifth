<?php
// integrations layout for Front Page Block
$bg_color = get_sub_field('background_color');
?>
<!-- integrations_section -->
<section class="integrations_section <?php echo $bg_color; ?> section_spacing_top_medium">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-lg-8">
                <div class="text_section text-center">
                    <h2 class="">
                        <?php the_sub_field('heading'); ?>
                    </h2>
                    <p>
                        <?php the_sub_field('text'); ?>
                    </p>
                </div>
            </div>
        </div>


        <div class="icon_section">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <?php
                    // check if the repeater field has rows
                    if (have_rows('icon_box')) {
                        while (have_rows('icon_box')) {
                            the_row(); ?>
                    <div class="img_box">
                        <span>
                            <?php $img_id = get_sub_field('icon_image'); ?>
                            <?php echo wp_get_attachment_image($img_id, 'full'); ?>
                        </span>
                    </div>
                    <?php
                        }
                    } ?>
                </div>
            </div>
        </div>

    </div>
</section>