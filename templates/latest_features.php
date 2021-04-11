<?php
// latest_features layout for Alternative Blocks
if (get_row_layout() == 'latest_features') {?>

<div class="col-lg-4">
    <section class="latest_features">
        <?php  $heading = get_sub_field('heading');
        if ($heading) {?>
        <h6 class="heading"><?php echo $heading; ?></h6>
        <?php } ?>

        <div class="list">
            <?php if (have_rows('list')) {
            while (have_rows('list')) {
                the_row(); ?>
            <?php
            $title = get_sub_field('title');
                $date = get_sub_field('date');
                $text = get_sub_field('text');
                $link_url = get_sub_field('link_url'); ?>

            <div class="item">
                <?php if ($title) {?>
                <h6 class="title"><?php echo $title; ?></h6>
                <?php } ?>
                <?php if ($text) {?>
                <p class="text"><?php echo $text; ?></p>
                <?php } ?>

                <?php if ($date) {?>
                <p class="date"><?php echo $date; ?></p>
                <?php } ?>
                <?php if ($link_url) {?>
                <a href="<?php echo $link_url; ?>" class="link"></a>
                <?php
                        } ?>
            </div>
            <?php
            }
        }?>
        </div>
    </section>
</div>
<?php
}?>