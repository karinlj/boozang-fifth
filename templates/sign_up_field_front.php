<?php if (get_row_layout() == 'sign_up_field_front') {?>

<section class="sign_up_front_section <?php echo $color; ?> section_spacing_top_medium">
    <?php
    $color = get_sub_field('color_theme');
    $heading = get_sub_field('heading');
    $preamble = get_sub_field('preamble'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <header class="heading">
                    <?php
                    if ($heading) {?>
                    <h3 class="heading"> <?php echo $heading; ?></h3>
                    <?php
                    }
                     if ($preamble) {?>
                    <p class="preamble"> <?php echo $preamble; ?></p>
                    <?php
                } ?>
                </header>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row justify-content-between">

                    <?php
            // check if the repeater field has rows
                    if (have_rows('button_items')) {
                        while (have_rows('button_items')) {
                            the_row();
                            $heading = get_sub_field('heading');
                            $text = get_sub_field('text');
                            $link = get_sub_field('link'); ?>

                    <div class="col-md-6">
                        <div class="button_item">
                            <div class="text_section">
                                <?php if ($heading) {?>
                                <h4 class="heading"> <?php echo $heading; ?></h4>
                                <?php
                                } ?>
                                <?php if ($text) {?>
                                <p class="text"> <?php echo $text; ?></p>
                                <?php
                                } ?>
                            </div>
                            <div class="btn_container">
                                <?php
                              
                            if ($link) {?>
                                <a class="btn link" href="<?php echo $link['url']; ?>"
                                    target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?>
                                </a>
                                <?php } ?>
                            </div>
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