<!-- faq accordion layout for Pages Content block-->

<?php if (get_row_layout() == 'faq_accordion') {
    $heading = get_sub_field('heading');
    $bgColor = get_sub_field('background_color'); ?>

    <section class="faq_accordion_section <?php echo $bgColor; ?> section_spacing_top_small">
        <div class="container">
            <?php if ($heading) { ?>
                <h2 class="text_center_laptop margin_4"><?php echo $heading; ?></h2>
            <?php } ?>
            
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <?php if (have_rows('faq_accordion_list')) { ?>
                        <?php while (have_rows('faq_accordion_list')) {
                            the_row();

                            $question = get_sub_field('question');
                            $answer = get_sub_field('answer'); ?>

                            <div class="faq_list_item">
                                <h3 class="smaller_size_text question_part">
                                    <button class="question" aria-expanded="false"><?php echo $question; ?></button>
                                </h3>
                                <section class="answer_part" aria-hidden="true">
                                    <p><?php echo $answer; ?> </p>
                                </section>
                            </div>
                    <?php
                        }
                    } ?>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>