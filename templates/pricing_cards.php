 <?php
    // pricing layout for Pages Content block
    if (get_row_layout() == 'pricing_cards') {
        $preamble_heading = get_sub_field('preamble_heading');
        $preamble_text = get_sub_field('preamble_text'); ?>
 <section class="pricing_section section_spacing_top_medium">

     <div class="container">

         <!-- <section class="preamble_section">
             <?php if ($preamble_heading) { ?>
             <h2 class="preamble_heading"><?php echo $preamble_heading; ?></h2>
             <?php } ?>
             <?php if ($preamble_text) { ?>
             <p class="preamble_text"><?php echo $preamble_text; ?></p>
             <?php } ?>
         </section> -->

         <div class="row align-items-center no-gutters">

             <?php
                    //pricing_cards repeater
                    if (have_rows('pricing_cards')) {
                        //count for setting classes
                        $count = 0;
                        while (have_rows('pricing_cards')) {
                            the_row();
                            $heading = get_sub_field('heading');
                            $text = get_sub_field('text'); ?>

             <div class="col-md-4">
                 <div class="card <?php
                                                if ($count == 1) {
                                                ?>
             higher
                <?php
                                                } elseif ($count == 2) {
                ?> blue_darker
                <?php
                                                } ?>">
                     <div class="card_body">
                         <header class="pricing_header">
                             <div class="">
                                 <h4 class="heading"><?php echo $heading; ?></h4>
                                 <p class="text"><?php echo $text; ?></p>
                             </div>
                         </header>
                         <main>
                             <ul class="feat_list">
                                 <?php
                                                // check if the repeater field has rows
                                                if (have_rows('features_list')) {
                                                    while (have_rows('features_list')) {
                                                        the_row();

                                                        $feature = get_sub_field('feature'); ?>

                                 <li class="list_item"><?php echo $feature; ?></li>
                                 <?php
                                                    }
                                                } ?>
                             </ul>
                         </main>

                         <?php
                                        $price = get_sub_field('price');
                                        $price_text = get_sub_field('price_text'); ?>
                         <footer class="price">
                             <h2 class="number"><?php echo $price; ?>
                                 <span><?php echo $price_text; ?></span>
                             </h2>
                         </footer>

                         <?php
                                        $btn_link = get_sub_field('button_link'); ?>
                         <a class="btn" href="<?php echo $btn_link['url']; ?>"
                             target="<?php echo $btn_link['target']; ?>"><?php echo $btn_link['title']; ?></a>
                     </div>
                 </div>
             </div>
             <?php
                            $count++;
                        }
                    } ?>

         </div>
     </div>
 </section>
 <?php
    }
    ?>