<!-- faq accordion layout for Pages Content block-->

<?php if (get_row_layout() == 'faq_accordion') {

    $heading = get_sub_field('heading');
    $bgColor = get_sub_field('background_color');
    ?>

<section class="faq_accordion_section <?php echo $bgColor; ?> section_spacing_top_big">
  <div class="container">

    <h3 class="heading"><?php echo $heading; ?></h3>

    <div class="row justify-content-between">
      <?php
$count = 0;
    $list_length = count(get_sub_field("faq_accordion_list"));
    ?>
      <div class="col-md-5">

        <?php if (have_rows('faq_accordion_list')) {?>
        <?php while (have_rows('faq_accordion_list')) {

        $count++;
        the_row();

        $question = get_sub_field('question');
        $answer = get_sub_field('answer');
        ?>

        <div class="info_list_item">
          <div class="question_part">
            <h5 class="question"><?php echo $question; ?></h5>
          </div>

          <div class="answer_part">
            <p><?php echo $answer; ?> </p>
          </div>
        </div>

        <?php if ($count == ceil($list_length / 2)) {?>
      </div>

      <div class="col-md-6">
        <?php }?>

        <?php }
    }
    ?>
      </div>
    </div>
  </div>
</section>

<?php
}
?>


<!-- <section class="faq_accordion_section section_spacing_top_big">
  <div class="container">
    <div class="row">


      <div class="col-lg-6">

        <div class="info_list_item">
          <div class="question_part">
            <h5 class="question">question</h5>
          </div>

          <div class="answer_part">
            <p>answer</p>
          </div>
        </div>

        <div class="info_list_item">
          <div class="question_part">
            <h5 class="question">question</h5>
          </div>

          <div class="answer_part">
            <p>answer</p>
          </div>
        </div>
      </div>


      <div class="col-lg-6">

        <div class="info_list_item">
          <div class="question_part">
            <h5 class="question">question</h5>
          </div>

          <div class="answer_part">
            <p>answer</p>
          </div>
        </div>


        <div class="info_list_item">
          <div class="question_part">
            <h5 class="question">question</h5>
          </div>

          <div class="answer_part">
            <p>answer</p>
          </div>
        </div>
      </div>


    </div>
</section> -->