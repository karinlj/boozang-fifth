<?php
// feature-slider layout for Front Page Block
?>

<section class="mytabs2">
    <?php
//Loopa images
if (have_rows('feature_slider')) {
    $i = 0;
    while (have_rows('feature_slider')) {
        the_row();
        $i++; ?>

    <!-- I have <?php echo $i; ?>-->
    <?php
        $image = get_sub_field('img');
        //echo $image;
        if (!empty($image)) {?>
    <img id="tab_<?php echo $i ?>" class="tab_content" src="<?php echo $image['url']; ?>"
        alt="<?php echo $image['alt']; ?>" />
    <?php
                    }
    }
}?>
    <ul class="tabs">
        <?php
// Loopa länkar
 if (have_rows('feature_slider')) {
     $j = 0;
    
     while (have_rows('feature_slider')) {
         the_row();
         $j++; ?>

        <!--I have <?php echo $j; ?>-->
        <?php
        if (get_sub_field('heading_link')) {?>
        <li id="<?php echo $j ?>" class="tab_link" data_tab="tab_<?php echo $j ?>">
            <span><?php the_sub_field('heading_link'); ?></span>
        </li>
        <?php
        }
     }
 }
?>
    </ul>
</section>