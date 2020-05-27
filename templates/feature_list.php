<?php
// feature_list layout for Pages Content block
if (get_row_layout() == 'feature_list') {

    $heading = get_sub_field('heading');
    ?>

<section class="feature_list_section section_spacing_top_small">
  <h3 class="heading text-center"><?php echo $heading; ?></h3>

  <ul class="feature_list">

    <!-- repeater field -->
    <?php if (have_rows('feature_list')) {?>
    <?php while (have_rows('feature_list')) {
        the_row();

        $icon = get_sub_field('icon');
        $item_heading = get_sub_field('item_heading');
        $item_text = get_sub_field('item_text');
        ?>
    <li class="feature_list_item">
      <span class="features_icon">
        <i class="fa fa-<?php echo $icon; ?>"></i>
      </span>
      <div class="info">
        <h6 class="item_heading"><?php echo $item_heading; ?></h6>
        <p class="item_text"><?php echo $item_text; ?></p>
      </div>


    </li>

    <?php }
    }
    ?>
  </ul>

</section>

<?php
}?>