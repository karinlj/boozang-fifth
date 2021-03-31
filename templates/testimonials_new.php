<?php
$link = get_sub_field('link');
?>

<section class="testimonials_section_new section_spacing_top_medium">
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
    <div class="container">
        <div class="row align-items-start justify-content-between">
            <div class="col">
                <div class="testimonials-container">
                    <?php
// check if the repeater field has rows
if (have_rows('testimonials_content')) {
    while (have_rows('testimonials_content')) {
        the_row();

        $color = get_sub_field('color_theme'); ?>
                    <div class="testimonials-item <?php echo $color; ?>">
                        <div>
                            <p class="icon">
                                <i class="fas fa-quote-left"></i>
                            </p>
                            <p class="text"><?php the_sub_field('text'); ?></p>
                        </div>

                        <h5 class="signature"><?php the_sub_field('signature'); ?></h5>
                    </div>
                    <?php
    }
}?>
                </div>
            </div>
        </div>
    </div>
</section>