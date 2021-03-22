<?php
// feature-slider layout for Front Page Block

?>
<section class="two-columns-section feature-slider section_spacing_top_medium">
  <div class="container">
    <div class="row justify-content-between">
      <?php
$img_order = '';
$text_order = '';
$suffix = '';
if (get_sub_field('image_position'))
{ //radio btn field
    $img_order = 'comes-' . get_sub_field('image_position'); //first or last
    if ($img_order == 'comes-last')
    {
        $suffix = 'x';
        $text_order = 'comes-first';
    }
    else
    {
        $suffix = 'y';
        $text_order = 'comes-last';
    }
} ?>
      <div class="col-lg-4 <?php echo $text_order; ?>">
        <div class="feat-list">
          <h3><?php the_sub_field('heading'); ?></h3>
          <p class="feature-description-mobile"><?php the_sub_field('feature_description_mobile'); ?></p>
          <ul id="features-menu">

            <?php
//Loopa kolumner
if (have_rows('feature_slider'))
{
    $j = 0; //räknare = 0
    while (have_rows('feature_slider'))
    {
        the_row();
        $j++; //räknare räknas upp varje varv
?>
            <!--I have <?php echo $j; ?>-->

            <?php
        if (get_sub_field('heading_link') || get_sub_field('feature_description'))
        { ?>

            <li id="<?php echo $j ?><?php echo $suffix ?>" class="feat-menu-item inactive">

              <span id="<?php echo $j ?><?php echo $suffix ?>"><?php the_sub_field('heading_link'); ?></span>
              <p class="text"><?php the_sub_field('feature_description'); ?></p>
            </li>

            <?php
        }
    }
}
?>
          </ul>
        </div>
      </div>

      <div class="col-lg-8 <?php echo $img_order; ?>">
        <div class="feat-slider-wrapper">

          <?php
$imgsuffix = $suffix . "_img"; //img suffix
//Loopa kolumner
if (have_rows('feature_slider'))
{
    $i = 0; //räknare = 0
    while (have_rows('feature_slider'))
    {
        the_row();

        $i++; //räknare räknas upp varje varv
        
?>
          <!-- I have <?php echo $i; ?>-->
          <?php
        $image = get_sub_field('img');

        //echo $image;
        if (!empty($image))
        { ?>

          <img id="<?php echo $i ?><?php echo $imgsuffix ?>" class="feat-img" src="<?php echo $image['url']; ?>"
            alt="<?php echo $image['alt']; ?>" />

          <?php
        }
    }
}
?>
        </div>
      </div>
    </div>
  <div class="row">
      <div class="col-lg-8">
        <!-- <h6 class="preamble text-center"><?php the_sub_field('link_preamble'); ?></h6> -->

        <!-- <?php
$link_url = get_sub_field('link_url');
$link_text = get_sub_field('link_text'); ?>

        <div class="link_wrapper text-center">
          <a class="arrow_link" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
        </div> -->
      </div>
    </div> 

  </div>

  <section class="feature_link_item_section section_spacing_top_small">
  <h3 class="preamble text-center"><?php the_sub_field('link_preamble'); ?></h3>

  <div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      
    <div class="row justify-content-between">
    <div class="col-lg-3">
      <a href="https://localhost/Boozang/feature-overview/" class="feature_link_item">
      <div class="icon">
    <i class="fas fa-database"></i>
    </div>      <h6>Feature overview</h6>
      <p>Go from simple record-replay tests to powerful data-driven tests.</p>
</a>
    </div>
    <div class="col-lg-3">
    <a href="https://localhost/Boozang/feature-overview/" class="feature_link_item">
    <div class="icon">
    <i class="fas fa-database"></i>
    </div>
      <h6>BDD/Cucumber support</h6>
      <p>Offload the development team by using business developers to write the tests.</p>
      </a>
    </div>
    <div class="col-lg-3">
    <a href="https://localhost/Boozang/feature-overview/" class="feature_link_item">
    <div class="icon">
    <i class="fas fa-database"></i>
    </div>      <h6>Data Handling</h6>
      <p>Use data to create truly re-usable tests and use external data to drive your tests.</p>
      </a>
    </div>
    <div class="col-lg-3">
    <a href="https://localhost/Boozang/feature-overview/" class="feature_link_item">
    <div class="icon">
    <i class="fas fa-database"></i>
    </div>      <h6>Feature overview</h6>
      <p>Go from simple record-replay tests to powerful data-driven tests.</p>
      </a>
    </div>
    </div>
</div>
</div>
  </section>

</section>


