<?php
// get started layout for  Pages Content block
if (get_row_layout() == 'action_banner') { ?>
<?php
    $style = '';
    $color = get_sub_field('color_theme');
    $bg_image = get_sub_field('background_image');

    if ($bg_image) {
        $style = 'style="background:url(\'' . wp_get_attachment_url($bg_image, 'full') . '\') no-repeat center; background-size: cover"';
        $overlay_color = get_sub_field('overlay_color');
    }
    ?>

<section class="action_banner <?php echo $color; ?> <?php echo $overlay_color; ?> section_spacing_top_medium"
    <?php echo $style; ?>>

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <?php
                    $heading = get_sub_field('heading');
                    $text = get_sub_field('text');
                    ?>
                <h2 class="heading"><?php echo $heading; ?></h2>
                <p class="action_banner_text"><?php echo $text; ?></p>

                <?php
                    $link = get_sub_field('button_link');

                    if ($link) {
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                    ?>
                <div class="btn_wrapper">
                    <a class="btn link"
                        href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                </div>

                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php
} ?>