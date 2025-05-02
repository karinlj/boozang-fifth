<?php
$style = '';
$color = get_sub_field('color');
$bg_image = get_sub_field('background_image');
?>

<section class="cards_template <?php echo $color ?> section_spacing_top_medium">
    <div class="container">
        <?php
        $heading = get_sub_field('heading');
        $text = get_sub_field('text'); ?>

        <?php if ($heading) { ?>
            <h2 class="cards_template_heading"><?php echo $heading ?></h2>
        <?php
        } ?>
        <?php if ($text) { ?>
            <p class="cards_template_text"><?php echo $text ?></p>
        <?php
        } ?>
        <ul class="cards_template_content">
            <?php
            // check if the repeater field has rows
            if (have_rows('single_card')) {
                while (have_rows('single_card')) {
                    the_row();
                    $color = get_sub_field('color'); ?>

                    <section class="card_container <?php echo $color; ?>">
                        <div class="card_container_inner">

                            <div class="cards_template_item_content">
                                <div class="icon">
                                    <i class="<?php echo the_sub_field('icon_code') ?>" aria-hidden="true"></i>
                                </div>
                                <h3><?php the_sub_field('heading'); ?></h3>
                                <p class="text"><?php the_sub_field('text'); ?></p>

                                <?php $link = get_sub_field('link');
                                $mail_link = get_sub_field('mail_link');
                                $mail_link_text = get_sub_field('mail_link_text');
                                $btn_class = 'btn_link'
                                ?>
                                <?php if ($color === 'darkblue') {
                                    $btn_class = 'btn_link outline_color_white';
                                } ?>

                                <?php if ($link) { ?>
                                    <a class="<?php echo $btn_class ?>" href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr( $link['target']); ?>" rel="noopener noreferrer"><?php echo esc_html ($link['title']); ?>
                                    </a>
                                <?php   } ?>

                                <?php if ($mail_link) { ?>
                                    <a href="<?php echo esc_url('mailto:' . antispambot( ($mail_link))) ; ?>" class="<?php echo $btn_class ?>" aria-label="Boozang email"><?php echo esc_html ($mail_link_text); ?>
                                    </a>
                                <?php   } ?>
                            </div>
                        </div>
                    </section>
            <?php
                }
            } ?>
    </div>
    </div>
</section>