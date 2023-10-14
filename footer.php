<!-- signup field -->
<section class="signup_section section_spacing_top_small">
    <div class="container">

        <?php $heading = get_field('heading', 'option'); ?>
        <?php $text = get_field('text', 'option'); ?>

        <div class="text_section text-center">
            <?php if ($heading) { ?>
                <h2 class=""> <?php echo $heading; ?></h2>
            <?php
            } ?>
            <?php if ($text) { ?>
                <p class=""> <?php echo $text; ?></p>
            <?php
            } ?>
        </div>

        <?php
        // check if repeater has rows
        if (function_exists('acf_add_options_page')) {

            if (have_rows('sign_up_btns', 'option')) {
                // loop rows of data
                while (have_rows('sign_up_btns', 'option')) {
                    the_row();

                    $link = get_sub_field('link'); ?>
                    <div class="btn_container">
                        <?php
                        if ($link) { ?>
                            <a class="btn link" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" rel="noopener noreferrer"><?php echo $link['title']; ?>
                            </a>
                        <?php } ?>
                    </div>
        <?php
                }
            }
        }  ?>

    </div>
</section>

<!-- footer -->
<footer id="footer" class="footer-main section_spacing_top_mini">
    <div class="container">
        <div class="row align-items-start justify-content-between">
            <div class="col-lg-3">
                <div class="logo">
                    <a href="<?php echo home_url() ?>" class="logo" aria-label="Boozang home page">
                        <img class="logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boozang_logo_reverse.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boozang_logo_reverse@2x.png 325w" width="208" height="51" alt="Boozang home page" />
                    </a>
                </div>
                <div class="social-icons">
                    <?php
                    if (function_exists('acf_add_options_page')) {
                    ?>
                        <ul class="social">

                            <?php
                            if (have_rows('social_icons', 'option')) { // check if repeater field has rows
                            ?>
                                <?php
                                while (have_rows('social_icons', 'option')) {
                                    the_row();

                                    $social_url = get_sub_field('social_url');
                                    $social_site = get_sub_field('social_site'); ?>

                                    <li class="social-item">
                                        <a href="<?php echo $social_url; ?>" aria-label="<?php echo $social_site; ?>">
                                            <i class="fab fa-<?php echo $social_site; ?>" aria-hidden="true"></i>
                                        </a>
                                    </li>

                                <?php
                                } ?>
                            <?php
                            }
                            $link = get_field('mail_link', 'option'); ?>
                            <li class="social-item">
                                <a href="mailto:<?php echo $link; ?>" target="_top" aria-label="Boozang email">
                                    <i class="fas fa-envelope" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <div class="col-lg-9 col-xl-8">
                <div class="row align-items-start links">
                    <?php
                    if (function_exists('acf_add_options_page')) {
                        // check if repeater field has rows
                        if (have_rows('footer_links', 'option')) {

                            // loop through the rows of data
                            while (have_rows('footer_links', 'option')) {
                                the_row(); ?>
                                <div class="col-6 col-md-3">
                                    <h3 class="footer-links-heading"><?php the_sub_field('heading'); ?> </h3>

                                    <?php
                                    //if repeater field has rows
                                    if (have_rows('links')) {
                                    ?>
                                        <ul class="footer-links">
                                            <?php
                                            while (have_rows('links')) {
                                                the_row(); ?>

                                                <?php
                                                $link = get_sub_field('link'); ?>

                                                <li class="link-item">
                                                    <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                                                </li>
                                            <?php
                                            } ?>
                                        </ul>
                                    <?php
                                    } ?>
                                </div>

                            <?php
                            } ?>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="back_to_top_link">
                <a href="#header_top">
                    <i class="fa-solid fa-angles-up" aria-hidden="true" aria-label="To top of page"></i>
                </a>
            </div>

        </div>
    </div>
    <div class="footer-copy">
        <div class="container">
            <div class="row align-items-start">
                <div class="col">
                    <div class="copy">
                        <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?> INC. ALL RIGHTS RESERVED.
                            Theme by <a href="http://karinljunggren.com/" target="_blank" rel="noopener noreferrer" aria-label="Karin Ljunggren Home Page">Karin</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>