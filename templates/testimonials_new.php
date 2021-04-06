<?php
$link = get_sub_field('link');
$color = get_sub_field('color_theme'); ?>

<section class="testimonials_section_new <?php echo $color; ?> section_spacing_top_medium">
    <div class="container">
        <div class="heading_section">
            <div>
                <h2 class="tesimonials-heading"><?php the_sub_field('heading');?></h2>
                <?php if ($link) {?>
                <h5> <a class="arrow_link" href="<?php echo $link['url']; ?>"
                        target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?>
                    </a></h5>
                <?php
}?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-start justify-content-between">

            <?php
// check if the repeater field has rows
if (have_rows('testimonials_content')) {
    while (have_rows('testimonials_content')) {
        the_row(); ?>

            <div class="col-lg-4">
                <div class="testimonials_item">
                    <div>
                        <p class="icon">
                            <i class="fas fa-quote-left"></i>
                        </p>
                        <p class="text"><?php the_sub_field('text'); ?></p>
                    </div>
                    <h5 class="signature"><?php the_sub_field('signature'); ?></h5>
                </div>
            </div>
            <?php
    }
}?>
        </div>
    </div>
</section>