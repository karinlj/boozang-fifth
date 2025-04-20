<?php
// centered items_and_text_boxes for Front Page Block

if (get_row_layout() == 'items_and_text_boxes') {  ?>

    <section class="items_and_text_boxes">
        <div class="container">
            <div class="flex_container">
                <?php
                $text_box_left = get_sub_field('text_box_left');
                ?>
                <div class="box">
                    <?php if ($text_box_left) { ?>
                        <section class="text_box_left lightblue">
                            <div> <?php echo $text_box_left ?> </div>
                        </section>
                    <?php
                    } ?>
                </div>
                <div class="box">
                    <?php if (have_rows('items_box_right')) {
                        while (have_rows('items_box_right')) {
                            the_row(); ?>

                            <section class="text_box_right blue">
                                <?php $text = get_sub_field('text'); ?>
                                <?php $btn_url = get_sub_field('btn_url'); ?>
                                <?php $btn_text = get_sub_field('btn_text'); ?>

                                <?php $img_id = get_sub_field('image'); ?>
                                <?php $image = wp_get_attachment_image_src($img_id, 'full'); ?>
                                <?php $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true); ?>

                                <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />
                                <p> <?php echo $text ?> </p>
                                <a href="<?php echo $btn_url ?> " class="btn_link green"><?php echo $btn_text ?></a>
                            </section>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>