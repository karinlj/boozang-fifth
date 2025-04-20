<?php
//wysiwyg 
if (get_row_layout() == 'text_content') { ?>

    <?php
    $text = get_sub_field('text'); ?>

    <section class="text_section_pages section_spacing_top_small">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="text_content">
                        <?php echo $text; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>