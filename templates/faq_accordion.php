<!-- faq accordion layout for Pages Content block-->

<?php if (get_row_layout() == 'faq_accordion') {
    $heading = get_sub_field('heading');
    $bgColor = get_sub_field('background_color'); ?>

<section class="faq_accordion_section <?php echo $bgColor; ?> section_spacing_top_medium">
    <div class="container">
        <?php if ($heading) {?>
        <h2 class="heading"><?php echo $heading; ?></h2>
        <?php } ?>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php if (have_rows('faq_accordion_list')) {?>
                <?php while (have_rows('faq_accordion_list')) {
        the_row();

        $question = get_sub_field('question');
        $answer = get_sub_field('answer'); ?>

                <div class="info_list_item">
                    <div class="question_part">
                        <h6 class="question"><?php echo $question; ?></h6>
                    </div>
                    <div class="answer_part">
                        <p><?php echo $answer; ?> </p>
                    </div>
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