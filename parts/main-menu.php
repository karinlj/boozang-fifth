<div id="nav-wrap" class="">

    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="">
                    <h2 class="site-title">
                        <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">

                            <!--extra double size image for retina-->
                            <img class="logo-img"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/boozang_logo_reverse.png"
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/boozang_logo_reverse@2x.png 325w"
                                width="208" height="51" alt="boozang-logo" />
                        </a>
                    </h2>
                    <div class="nav-links">
                        <?php
wp_nav_menu(array(
    'theme_location' => 'primary',
));
?>
                        <div class="signup">
                            <ul>
                                <li>
                                    <a href="https://ai.boozang.com/">
                                        Login
                                    </a>
                                </li>
                                <li>
                                    <a href="https://ai.boozang.com/#security/signup">
                                        Sign Up
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <span class="toggle">&#9776;</span>
                    <!--hamburger-->
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="nav-mobile">
    <span class="toggle">&times;</span>
    <!--close-->
    <div class="nav-links">
        <?php
wp_nav_menu(array(
    'theme_location' => 'primary',
));
?>
        <div class="signup">
            <ul>
                <li>
                    <!-- <a href="<?php echo get_theme_mod('custom-link-url'); ?>">
            Login
          </a> -->
                    <a href="https://ai.boozang.com/">
                        Login
                    </a>
                </li>
                <li>
                    <a class="btn signup_btn" href="https://ai.boozang.com/#security/signup">
                        Free Trial
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>