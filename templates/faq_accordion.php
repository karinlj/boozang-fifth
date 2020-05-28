<!-- faq accordion layout for Pages Content block-->

<section class="faq_accordion_section section_spacing_top_medium">
  <div class="container">
    <div class="row">



      <?php if (have_rows('faq_accordion_list')) {?>
      <?php while (have_rows('faq_accordion_list')) {
    the_row();

    $question = get_sub_field('question');
    $answer = get_sub_field('answer');?>

      <div class="col-lg-6">
        <div class="info_list_item">
          <div class="heading_part">
            <h5><?php echo $question; ?></h5>
            <i class="fas fa-angle-down"></i>
          </div>

          <p><?php echo $answer; ?> </p>
        </div>

      </div>
      <?php }
}
?>

    </div>
  </div>
</section>