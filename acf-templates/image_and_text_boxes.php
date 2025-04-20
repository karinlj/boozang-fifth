<?php
// centered img_and_text_boxes for Front Page Block

if (get_row_layout() == 'image_and_text_boxes') { ?>

    <section class="image_and_text_boxes">
        <div class="container">
            <div class="flex_container">

                <!-- loopa flex content -->
                <?php if (have_rows('boxrow')) {
                    while (have_rows('boxrow')) {
                        the_row(); ?>
                        <div class="box">

                            <?php if (get_row_layout() == 'img') { ?>
                                <div class="img_box">
                                    <?php $img_id = get_sub_field('imgbox'); ?>
                                    <?php $image = wp_get_attachment_image_src($img_id, 'full'); ?>
                                    <?php $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true); ?>

                                    <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />
                                    <span class="alt_caption"><?php echo $alt_text; ?></span>
                                </div>

                            <?php
                            } ?>

                            <?php if (get_row_layout() == 'text') { ?>
                                <section class="text_box blue">
                                    <?php $textbox = get_sub_field('textbox'); ?>
                                    <?php if ($textbox) { ?>
                                        <div> <?php echo $textbox ?> </div>
                                    <?php } ?>
                                </section>
                       

                            <?php } ?>

                        </div>
                <?php   }
                } ?>

            </div>
        </div>
    </section>

<?php
}
?>