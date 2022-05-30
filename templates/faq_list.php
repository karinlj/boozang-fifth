<!-- faq list layout for Pages Content block-->

<section class="faq_list_section section_spacing_top_medium">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <ul class="list">

                    <!-- repeater field called 'list' -->
                    <?php if (have_rows('list')) { ?>
                    <?php while (have_rows('list')) {
                            the_row();

                            $question = get_sub_field('question');
                            $answer = get_sub_field('answer'); ?>

                    <li class="info_list_item">
                        <h3 class="small_size_text"><?php echo $question; ?> </h3>
                        <p><?php echo $answer; ?> </p>
                    </li>

                    <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>