<!-- signup field -->
<section class="signup_section section_spacing_top_small">
    <div class="container">
        <?php
        if (!is_page('k8s-tool')) {

            $footer_text = get_field('footer_text', 'option');
            $footer_link = get_field('footer_link', 'option'); ?>

        <div class="text_section text-center">
            <?php if ($footer_text) { ?>
            <p class=""> <?php echo $footer_text; ?></p>
            <?php
                } ?>
        </div>
        <div class="btn_container">
            <?php if ($footer_link) { ?>
            <a class="btn link" href="<?php echo $footer_link['url']; ?>" target="<?php echo $footer_link['target']; ?>"
                rel="noopener noreferrer"><?php echo $footer_link['title']; ?>
            </a>
            <?php } ?>
        </div>
        <?php
        } else {
            //k8s-tool sign up
            $k8s_text = get_field('k8s_text', 'option');
            $k8s_link = get_field('k8s_link', 'option'); ?>

        <div class="text_section text-center">
            <?php if ($k8s_text) { ?>
            <p class=""> <?php echo $k8s_text; ?></p>
            <?php
                } ?>
        </div>
        <div class="btn_container">
            <?php if ($k8s_link) { ?>
            <a class="btn link" href="<?php echo $k8s_link['url']; ?>" target="<?php echo $k8s_link['target']; ?>"
                rel="noopener noreferrer"><?php echo $k8s_link['title']; ?>
            </a>
            <?php } ?>
        </div>
        <?php }
        ?>
    </div>
</section>

<!-- footer -->
<?php
$footer_height_class = '';
if (!is_page('k8s-tool')) {
    $footer_height_class = 'boozang_footer';
}    ?>

<footer id="footer" class="footer-main section_spacing_top_mini <?php echo $footer_height_class; ?>">
    <div class="container">
        <div class="row align-items-start justify-content-between">
            <div class="col-md-6 col-xl-3">
                <div class="logo">
                    <a href="<?php echo home_url() ?>" class="logo" aria-label="Boozang home page">
                        <img class="logo-img"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boozang_logo_reverse.png"
                            srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boozang_logo_reverse@2x.png 325w"
                            width="208" height="51" alt="Boozang home page" />
                    </a>
                </div>
                <div class="social-icons">
                    <ul class="social">
                        <!-- repeater field -->
                        <?php if (have_rows('social_icons', 'option')) {
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
                            }
                        } ?>
                    </ul>
                    <div class="customer_contact">
                        <p>Drop us an email if you have any questions! We are always happy to help!


                        </p>
                        <?php $link = get_field('mail_link', 'option'); ?>
                        <a href="mailto:<?php echo $link; ?>" target="_top" aria-label="Boozang email">
                            <i class="fas fa-envelope" aria-hidden="true"></i><?php echo $link; ?>
                        </a>
                    </div>
                </div>
            </div>

            <!-- k8s-tool -->
            <?php if (!is_page('k8s-tool')) { ?>

            <div class="col-md-112 col-xl-8">
                <div class="row align-items-start links">
                    <?php
                        if (function_exists('acf_add_options_page')) {
                            //repeater field
                            if (have_rows('footer_links', 'option')) {
                                while (have_rows('footer_links', 'option')) {
                                    the_row(); ?>

                    <div class="col-6 col-md-3">
                        <h3 class="footer-links-heading"><?php the_sub_field('heading'); ?> </h3>

                        <!-- repeater field -->
                        <?php if (have_rows('links')) {  ?>
                        <ul class="footer-links">
                            <?php while (have_rows('links')) {
                                                    the_row(); ?>

                            <?php $link = get_sub_field('link'); ?>

                            <li class="link-item">
                                <a href="<?php echo $link['url']; ?>"
                                    target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </div>
                    <?php }
                            }
                        }  ?>
                </div>
            </div>
            <?php } ?>

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
                            Theme by <a href="http://karinljunggren.com/" target="_blank" rel="noopener noreferrer"
                                aria-label="Karin Ljunggren Home Page">Karin</a>
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