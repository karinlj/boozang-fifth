<?php
/**
 * Created by Karin.
 * Layout 'story_img_text' in flex content 'Front Page block'
 */
?>
<section class="two_columns_section story">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="header">
                    <?php if (get_sub_field('heading')) {?>
                    <h2><?php the_sub_field('heading');?></h2>
                    <?php  }
                if (get_sub_field('preamble')) {?>
                    <p><?php the_sub_field('preamble');?></p>
                    <?php  }?>
                </div>
            </div>
        </div>
    </div>
    <?php
//loopa repeater
if (have_rows('two_columns_row')) {
    $number = 0;
    while (have_rows('two_columns_row')) {
        the_row();
        $number++;
        $color = get_sub_field('background_color'); ?>
    <div class="column_row <?php echo $color; ?>">
        <div class="container">
            <div class="column_row_inner">

                <!-- loopa flex content -->
                <?php if (have_rows('two_columns')) {
            while (have_rows('two_columns')) {
                the_row();

                //Innehåll i kolumnerna
                if (get_row_layout() == 'img') {?>
                <div class="part image">

                    <?php $img_id = get_sub_field('img');?>
                    <?php $image = wp_get_attachment_image_src($img_id, 'full');?>
                    <?php $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true);?>

                    <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />
                    <span class="alt_caption"><?php echo $alt_text; ?></span>
                </div>
                <?php
} ?>

                <?php
if (get_row_layout() == 'text') {?>

                <div class="part text">
                    <div class="small_title"><span class="number"><?php echo $number ?></span>.
                        <?php the_sub_field('heading_small');?></div>
                    <h5><?php the_sub_field('heading');?></h5>
                    <p><?php the_sub_field('text');?></p>
                </div>
                <?php
}
            }
        } ?>

            </div>
        </div>
    </div>
    <?php
    }
}
?>

</section>