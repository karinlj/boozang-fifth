<?php
// info_banner_small layout for Alternative Blocks
if (get_row_layout() == 'info_banner_small') {?>

<?php
$style = '';
    $color = get_sub_field('color_theme');
    $bg_image = get_sub_field('background_image');
    if ($bg_image) {
        $style = 'style="background:url(\'' . wp_get_attachment_url($bg_image, 'full') . '\') no-repeat center; background-size: cover;"';
        $overlay_color = get_sub_field('overlay_color');
    }
    ?>

<section class="info_banner_small section_spacing_top_mini">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <section class="content <?php echo $color; ?> <?php echo $overlay_color; ?>" <?php echo $style; ?>>
                    <?php
                    $heading = get_sub_field('heading');
                    $text = get_sub_field('text');

                    if ($heading) {?>
                    <h5 class="heading"><?php echo $heading; ?></h5>
                    <?php } ?>
                    <?php

                    if ($text) {?>
                    <p class="text"><?php echo $text; ?></p>
                    <?php } ?>

                    <?php if (have_rows('banner_links')) {
                        while (have_rows('banner_links')) {
                            the_row(); ?>

                    <?php  if (get_row_layout() == 'link') {
                                $link_url = get_sub_field('link_url');
                                $link_text = get_sub_field('link_text');
                                $icon = get_sub_field('icon');
                                $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)?>

                    <div class="link_wrapper">
                        <?php if ($icon) {
                                    echo wp_get_attachment_image($icon, $size);
                                } ?>
                        <a class="banner_link" href="<?php echo $link_url; ?>" target="_blank"
                            rel="noopener norefferer"><?php echo $link_text; ?></a>
                    </div>
                    <?php
                            }
                        }
                    }?>
                </section>

            </div>
        </div>
    </div>
</section>
<?php
}?>