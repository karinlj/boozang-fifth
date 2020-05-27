 <?php
// pricing layout for Pages Content block
if (get_row_layout() == 'pricing_cards') {
    $preamble_heading = get_sub_field('preamble_heading');
    $preamble_text = get_sub_field('preamble_text');

    ?>
 <section class="pricing_section section_spacing_top_medium">

   <div class="container">
     <div class="row">
       <div class="col-12">

         <section class="preamble_section">
           <h3 class="preamble_heading"><?php echo $preamble_heading; ?></h3>
           <p class="preamble_text"><?php echo $preamble_text; ?></p>
         </section>

         <div class="cards_wrapper">

           <?php //pricing_cards repeater

    // check if the repeater field has rows
    if (have_rows('pricing_cards')) {
        //count for setting classes
        $count = 0;
        while (have_rows('pricing_cards')) {
            the_row();
            ?>

           <div class="card <?php
if ($count == 1) {
                ?>
             higher
                <?php } elseif ($count == 2) {
                ?> blue_darker
                <?php }
            ?>">

             <div class="card-body">

               <div class="pricing_header">
                 <div class="">
                   <h3 class="heading"><?php the_sub_field('heading');?></h3>
                   <p class="text"><?php the_sub_field('text');?></p>
                 </div>
               </div>

               <ul class="feat_list">
                 <?php
// check if the repeater field has rows
            if (have_rows('features_list')) {

                while (have_rows('features_list')) {
                    the_row();
                    ?>
                 <li class="list_item"><?php the_sub_field('feature');?></li>

                 <?php
}
            }?>
               </ul>
               <div class="price">
                 <h2 class="number"><?php the_sub_field('price');?>
                   <span><?php the_sub_field('price_text');?></span></h2>
               </div>

               <?php
$btn_link = get_sub_field('button_link');
            ?>

               <a class="btn" href="<?php echo $btn_link['url']; ?>"
                 target="<?php echo $btn_link['target']; ?>"><?php echo $btn_link['title']; ?></a>

             </div>
           </div>
           <?php
$count++;
        }
    }?>

         </div>
       </div>
     </div>
     <!--row-->
   </div><!-- /.container -->
 </section>
 <?php
}
?>