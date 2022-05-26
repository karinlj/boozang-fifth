<?php
// centered big_image_center for Front Page Block

if (get_row_layout() == 'big_image_center') { ?>

<?php
    $color = get_sub_field('background_color');
    $heading = get_sub_field('heading');
    $preamble = get_sub_field('preamble');

    $link_url = get_sub_field('link_url');

    $img_id = get_sub_field('img');
    $image = wp_get_attachment_image_src($img_id, 'full');
    $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true); ?>

<section class="big_image_center <?php echo $color; ?> section_spacing_top_small">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="heading"> <?php echo $heading; ?></h2>
                <p class="preamble"> <?php echo $preamble; ?></p>
                <div class="image_part">
                    <a class="link_url" href="<?php echo $link_url; ?>" target="_blank" rel="noreferrer noopener"
                        aria-label="Boozang TheLab">
                        <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />
                        <span class="alt_caption"><?php echo $alt_text; ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
}
?>