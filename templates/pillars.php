<?php //layout in front page blocks
$color = get_sub_field('color_theme');
?>

<!-- thelab -->
<!-- two_columns_section -->
<section class="two_columns_section demo section_spacing_top_medium lightgrey">
    <div class="container">
        <div class="column_row">
            <!-- loopa flex content -->
            <div class="part text">
                <h3> Welcome to the Boozang Test Lab!</h3>
                <p> Here you find a number of test categories, that each has a number of problems to solve. Each
                    problem has a brief description and an information box of why this problem is worth solving.
                </p>
            </div>

            <div class="part image">
                <a href="http://thelab.boozang.com/" class="img_link" target="_blank" rel="noreferrer noopener"></a>
                <img src="https://localhost/Boozang/wp-content/uploads/2021/03/catordog.png" alt="Map view">
            </div>
        </div>
    </div>
</section>


<section class="pillars_section section_spacing_top_medium">
    <div class="container">
        <div class="row align-items-start">
            <?php
        // check if the repeater field has rows
        if (have_rows('pillars_content')) {
            while (have_rows('pillars_content')) {
                the_row(); ?>
            <div class="col-lg">
                <div class="pillars-item">
                    <h6 class="top-heading <?php echo $color; ?>"><?php the_sub_field('top_heading'); ?></h6>
                    <h5 class="heading"><?php the_sub_field('heading'); ?></h5>
                    <p class="text"><?php the_sub_field('text'); ?></p>
                </div>
            </div>
            <?php
            }
        }
        ?>
        </div>
    </div>
</section>