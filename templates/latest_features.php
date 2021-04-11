<?php
// latest_features layout for Alternative Blocks
if (get_row_layout() == 'latest_features') {?>

<div class="col-md-4">
    <section class="latest_features">
        <?php  $heading = get_sub_field('heading');
        if ($heading) {?>
        <h6 class="heading"><?php echo $heading; ?></h6>
        <?php } ?>

        <div class="list">
            <?php if (have_rows('list')) {
            while (have_rows('list')) {
                the_row(); ?>
            <?php $title = get_sub_field('title'); ?>
            <?php $category = get_sub_field('category'); ?>

            <div class="item">

                <?php if ($title) {?>
                <h6 class="title"><?php echo $title; ?></h6>
                <?php } ?>

                <?php if ($category) {?>
                <p class="category"><?php echo $category; ?></p>
                <?php } ?>
            </div>
            <?php
            }
        }?>
        </div>
    </section>
</div>
<?php
}?>