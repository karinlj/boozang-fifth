<?php
/**
 * Created by Karin.
 * Layout 'about_small_img_text' in flex content 'Front Page block'
 */
?>
<?php $color = get_sub_field('background_color'); ?>

<section class="two_columns_section <?php echo $color; ?> presentation section_spacing_top_small">
    <div class="container">
        <div class="row justify-content-center">
            <?php  //Innehåll i kolumnerna
                if (get_row_layout() == 'about_small_img_text') {?>

            <div class="col-md-3">
                <div class="part image">

                    <?php $img_id = get_sub_field('img');?>
                    <?php $image = wp_get_attachment_image_src($img_id, 'full');?>
                    <?php $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true);?>

                    <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />
                    <span class="alt_caption"><?php echo $alt_text; ?></span>
                </div>
            </div>

            <div class="col-md-6">
                <div class="part text">
                    <h2><?php the_sub_field('heading');?></h2>
                    <p><?php the_sub_field('text');?></p>
                </div>
            </div>


            <?php
}  ?>


        </div>
    </div>
</section>