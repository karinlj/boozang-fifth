 <?php
// pricing layout for Pages Content block
if (get_row_layout() == 'pricing_cards') {?>

 <section class="pricing-section section_spacing_top_medium">

   <div class="container">
     <div class="row justify-content-center">
       <div class="col-lg-10">
         <div class="row">

           <?php //pricing_cards repeater

    // check if the repeater field has rows
    if (have_rows('pricing_cards')) {

        while (have_rows('pricing_cards')) {
            the_row();

            $color = get_sub_field('color_theme');
            ?>

           <div class="col-md-4">

             <div class="card <?php echo $color; ?>">
               <div class="card-body">

                 <div class="pricing-card">

                   <h3 class="heading <?php echo $color; ?>"><?php the_sub_field('heading');?></h3>

                   <p class="text <?php echo $color; ?>"><?php the_sub_field('text');?></p>

                   <div class="">
                     <h2 class="price"><?php the_sub_field('price');?></h2>
                     <p class="price-text"><?php the_sub_field('price_text');?></p>
                   </div>

                   <ul class="feat-list">
                     <?php
// check if the repeater field has rows
            if (have_rows('features_list')) {

                while (have_rows('features_list')) {
                    the_row();
                    ?>
                     <li class="list-item"><?php the_sub_field('feature');?></li>

                     <?php
}
            }?>
                   </ul>

                   <?php
$btn_link = get_sub_field('button_link');
            ?>

                   <a class="btn <?php echo $color; ?>" href="<?php echo $btn_link['url']; ?>"
                     target="<?php echo $btn_link['target']; ?>"><?php echo $btn_link['title']; ?></a>

                 </div>
               </div>

             </div>
           </div>
           <!--.col-->

           <?php
}?>

           <?php
}
    ?>
         </div>
       </div>
     </div>
     <!--row-->
   </div><!-- /.container -->
 </section>
 <?php
}
?>