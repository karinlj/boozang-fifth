    <?php
if (function_exists('acf_add_options_page')) {
    if (have_rows('sign_up_field', 'option')) { // check if the group field has rows
        while (have_rows('sign_up_field', 'option')) {
            the_row();
            $style = '';
            $btn_url = get_sub_field('button_url');
            $btn_text = get_sub_field('button_text');
            $color = get_sub_field('color_theme');
            $bg_image = get_sub_field('background_image');

            if ($bg_image) {
                $style = 'style="background:url(\'' . wp_get_attachment_url($bg_image, 'full') . '\') no-repeat center; background-size: cover"';
                $overlay_color = get_sub_field('overlay_color');
            } ?>


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

    <section class="signup_section <?php echo $color; ?> <?php echo $overlay_color; ?> section_spacing_top_medium"
        <?php echo $style; ?>>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="heading">
                        <h3 class=""><?php the_sub_field('heading'); ?></h3>
                        <p>Cats are cute kitty for slap owner's face at 5am until human fills food dish and steal mom's
                            crouton while she is in the bathroom, so sleep over your phone</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <div class="signup_button">
                                <div class="text_section">
                                    <div>
                                        <h4>Create your account for free!</h4>
                                        <p> <?php the_sub_field('text'); ?></p>
                                    </div>
                                </div>
                                <div class="btn_container">
                                    <?php
                  $signup_button = get_sub_field('signup_button');
            if ($signup_button) {?>
                                    <a class="btn signup_btn" href="<?php echo $signup_button['url']; ?>"
                                        target="<?php echo $signup_button['target']; ?>"><?php echo $signup_button['title']; ?>
                                    </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="demo_button">
                                <div class="text_section">
                                    <div>
                                        <h4>Hate dogs meow to be let?</h4>
                                        <p> <?php the_sub_field('text'); ?></p>
                                    </div>
                                </div>
                                <div class="btn_container">
                                    <?php
                  $signup_button = get_sub_field('signup_button');
            if ($signup_button) {?>
                                    <a class="btn signup_btn" href="<?php echo $signup_button['url']; ?>"
                                        target="<?php echo $signup_button['target']; ?>">Request Demo
                                    </a>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <?php
        }
    }
}
?>

    <!-- boxes - no img -->
    <!-- <section class="boxes">
	<div class="boxes-inner">
		<div class="box" style="background: url(&quot;/static/media/leaves_small.770460e1.jpg&quot;);">
			<div class="text-part-outer">
				<div class="text-part-inner"><i class="fas fa-laptop boxes-icon"></i><i class="fab fa-laptop boxes-icon"></i>
					<h3 class="heading"> Web Technologies &amp; other</h3>
					<div class="text">
						<p><b>Git</b>, NPM, Webpack, Azure DevOps, Firebase.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="box" style="background: url(&quot;/static/media/leaves_small.770460e1.jpg&quot;);">
			<div class="text-part-outer">
				<div class="text-part-inner"><i class="fas fa-graduation-cap boxes-icon"></i>
					<h3 class="heading"> theLab</h3>
					<div class="text">
						<p>Try to jump onto window and fall while scratching at wall sit in window and stare oooh, a bird, yum. Cat cat moo moo lick ears lick paws run at 3am human is washing you why halp oh the horror.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="box" style="background: url(&quot;/static/media/leaves_small.770460e1.jpg&quot;);">
			<div class="text-part-outer">
				<div class="text-part-inner"><i class="fas fa-wordpress boxes-icon"></i><i class="fab fa-wordpress boxes-icon"></i>
					<h3 class="heading"> CMS/Wordpress/Contentful</h3>
					<div class="text">
						<p><b>Custom WP themes</b> - dynamic and lightweight, best bulit with ACF. Woocommerce themes for webshops. Also developing with headless CMS <b>Sanity.io </b>or <b>Contentful</b>.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->







    <footer id="footer" class="footer-main section_spacing_top_small">
        <div class="container">
            <div class="row align-items-start justify-content-between">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="<?php echo home_url() ?>" class="logo">

                            <img class="logo-img"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/boozang_logo_reverse.png"
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/boozang_logo_reverse@2x.png 325w"
                                width="208" height="51" alt="boozang-logo" />
                        </a>
                    </div>
                    <div class="social-icons">
                        <?php
if (function_exists('acf_add_options_page')) {
    ?>
                        <ul class="social">

                            <?php
if (have_rows('social_icons', 'option')) { // check if repeater field has rows?>
                            <?php
while (have_rows('social_icons', 'option')) {
        the_row();

        $social_url = get_sub_field('social_url');
        $social_site = get_sub_field('social_site'); ?>

                            <li class="social-item">
                                <a href="<?php echo $social_url; ?>"><i
                                        class="fab fa-<?php echo $social_site; ?>"></i></a>
                            </li>

                            <?php
    }?>
                            <?php
}
    $link = get_field('mail_link', 'option'); ?>

                            <li class="social-item">
                                <a href="mailto:<?php echo $link; ?>" target="_top"><i class="fas fa-envelope"
                                        aria-hidden="true"></i></a>
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
    if (have_rows('footer_links', 'option')) { // check if repeater field has rows

        while (have_rows('footer_links', 'option')) { // loop through the rows of data
            the_row(); ?>
                        <div class="col-6 col-md-3">
                            <h5 class="footer-links-heading"><?php the_sub_field('heading'); ?> </h5>

                            <?php
if (have_rows('links')) { // check if repeater field has rows
                ?>
                            <ul class="footer-links">
                                <?php
while (have_rows('links')) { // loop through the rows of data
                    the_row(); ?>

                                <?php
$link = get_sub_field('link'); ?>

                                <li class="link-item">
                                    <a href="<?php echo $link['url']; ?>"
                                        target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                                </li>
                                <?php
                }?>

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
            </div>
        </div>
        <div class="footer-copy">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col">
                        <div class="copy">
                            <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name');?> INC. ALL RIGHTS RESERVED.
                                Theme by <a href="http://karinljunggren.com/" target="_blank">Karin</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer();?>
    </body>

    </html>