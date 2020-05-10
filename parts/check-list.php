<?php
//checklist template
//repeater in a field group

if (have_rows('check_list')) {
    while (have_rows('check_list')) {
        the_row();

        $heading = get_sub_field('heading');
        ?>

<section class="video_checklist_section">
  <h4 class="heading"><?php echo $heading; ?></h4>
  <ul class="list">

    <!-- repeater field -->
    <?php if (have_rows('list')) {?>
    <?php while (have_rows('list')) {
            the_row();

            $item = get_sub_field('list_item');?>
    <li class="check_list_item"><?php echo $item; ?> </li>

    <?php }
        }
        ?>
  </ul>

</section>

<?php }
}?>