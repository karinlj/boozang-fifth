<?php
// feature-slider layout for Front Page Block
?>
<section class="two-columns-section feature_slider section_spacing_top_medium">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6">

                <div class="feat_slider_wrapper">
                    <?php
//Loopa images
if (have_rows('feature_slider')) {
    $i = 0;
    
    while (have_rows('feature_slider')) {
        the_row();

        $i++; //räknas upp varje varv?>
                    <!-- I have <?php echo $i; ?>-->
                    <?php
        $image = get_sub_field('img');

        //echo $image;
        if (!empty($image)) { ?>
                    <img id="<?php echo $i ?>" class="feat_img" src="<?php echo $image['url']; ?>"
                        alt="<?php echo $image['alt']; ?>" />
                    <?php
        }
    }
}
?>
                </div>
                <!-- btns -->
                <div class="feat_list">
                    <!-- <h3><?php the_sub_field('heading'); ?></h3> -->
                    <ul id="features_menu">
                        <?php
//Loopa länkar
if (have_rows('feature_slider')) {
    $j = 0; //räknare = 0
    while (have_rows('feature_slider')) {
        the_row();
        $j++; //räknas upp varje varv?>
                        <!--I have <?php echo $j; ?>-->
                        <?php
        if (get_sub_field('heading_link')) { ?>
                        <li id="<?php echo $j ?>" class="features_menu_item inactive">
                            <span id="<?php echo $j ?>"><?php the_sub_field('heading_link'); ?></span>
                        </li>
                        <?php
        }
    }
}
?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>