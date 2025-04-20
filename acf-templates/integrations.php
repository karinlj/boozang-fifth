<?php
// integrations layout for Front Page Block
$bg_color = get_sub_field('background_color');
?>
<!-- integrations_section -->
<section class="integrations_section <?php echo $bg_color; ?> section_spacing_top_small">
    <div class="container">
        <!-- <div class="row justify-content-center"> -->
        <div class="row">

            <div class="col-sm-12 col-lg-8">
                <div class="text_section">
                    <div class="">
                        <?php the_sub_field('content'); ?>
</div>
                 
                </div>
            </div>
        </div>
        <div class="icon_section">
            <div class="container">
                <div class="icon_section">
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
</section>