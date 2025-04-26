<?php
$bg_image = get_sub_field('background_image');
$style = 'style="background:url(\'' . wp_get_attachment_url($bg_image, 'full') . '\') no-repeat center; background-size: cover"';
?>
<section class="pricing_shortcuts darkblue overlay-darkblue section_spacing_top_medium" <?php echo $style; ?>>
    <div class="container">
        
            <div class="heading_section">
                <div>
                    <?php
                    $heading = get_sub_field('heading');
                    $text = get_sub_field('text'); ?>

                    <?php if ($heading) { ?>
                        <div class="pricing_shortcuts_heading"><?php echo $heading ?></div>
                    <?php
                    } ?>
                    <?php if ($text) { ?>
                        <p class="pricing_shortcuts_text"><?php echo $text ?></p>
                    <?php
                    } ?>
                </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <?php
            // check if the repeater field has rows
            if (have_rows('pricing_tiers')) {
                while (have_rows('pricing_tiers')) {
                    the_row();
                    $color = get_sub_field('color'); ?>

                    <div class="col-md-4">
                        <section class="pricing_tiers_item <?php echo $color; ?>">
                            <div>
                                <div class="icon">
                                    <i class="<?php echo the_sub_field('icon_code') ?>" aria-hidden="true"></i>
                                </div>
                                <h3><?php the_sub_field('heading'); ?></h3>
                                <p class="text"><?php the_sub_field('text'); ?></p>

                                <?php $link = get_sub_field('link'); ?>
                                <?php if ($color === 'darkblue') { ?>
                                    <a class="btn_link outline_color_white" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" rel="noopener noreferrer"><?php echo $link['title']; ?>
                                    </a>
                                <?php  } else { ?>
                                    <a class="btn_link outline_color_darkblue" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" rel="noopener noreferrer"><?php echo $link['title']; ?>
                                    </a>
                                <?php   } ?>
                            </div>
                        </section>
                    </div>
            <?php
                }
            } ?>
        </div>
    </div>
</section>