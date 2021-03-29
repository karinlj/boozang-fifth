<?php
// integrations layout for Front Page Block
?>

<!-- about -->
<!-- two_columns_section -->
<!-- <section class="two_columns_section presentation section_spacing_top_small lightgrey">
    <div class="container">
        <div class="column_row">
            <div class="part image">
                <img src="https://localhost/Boozang/wp-content/uploads/2018/10/robot-medium-tran2.png" alt="Map view">
            </div>
            <div class="part text">
                <h3>Boozang is... </h3>
                <p>Boozang is a web test automation tool that tests
                    your application flows end-to-end.
                    Boozang takes a modern approach to test automation,
                    using the built-in test capabilities of the web
                    browser instead of relying on APIs such as Selenium.
                    It’s part of the code-less revolution, but we prefer the
                    term low-code, or code optional, as you can incorporate
                    code when needed.
                </p>
            </div>
        </div>
</section> -->

<!-- integrations_section -->
<section class="integrations_section section_spacing_top_medium">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="text_section">
                    <h2 class="">
                        <?php the_sub_field('heading');?>
                    </h2>
                    <p>
                        <?php the_sub_field('text');?>
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="icon_section">
                    <div class="container">
                        <div class="d-flex flex-wrap justify-content-between">
                            <?php
// check if the repeater field has rows
if (have_rows('icon_box')) {
    while (have_rows('icon_box')) {
        the_row(); ?>
                            <div class="img_box">
                                <span>
                                    <?php $img_id = get_sub_field('icon_image'); ?>
                                    <?php echo wp_get_attachment_image($img_id, 'full'); ?>
                                </span>
                            </div>
                            <?php
    }
}?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>