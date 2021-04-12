<?php
// header background
$color = get_field('color_theme');
?>

<div id="nav-wrap" class="">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="">
                    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
                        <!--extra double size image for retina-->
                        <?php
                            if ($color === 'white') {?>
                        <img class="logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/boozang.png"
                            srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/boozang@2x.png 325w" width="208"
                            height="51" alt="boozang-logo" />
                        <?php
                            } else {?>
                        <img class="logo-img"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/boozang_logo_reverse.png"
                            srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/boozang_logo_reverse@2x.png 325w"
                            width="208" height="51" alt="boozang-logo" />
                        <?php
                            }?>
                    </a>

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
                    <!--hamburger-->
                    <div class="toggle_btn">
                        <div></div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="nav-mobile">
    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">

        <img class="logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/boozang_logo_reverse.png"
            srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/boozang_logo_reverse@2x.png 325w" width="208"
            height="51" alt="boozang-logo" />

    </a>

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
                    <a class="btn signup_btn" href="https://ai.boozang.com/#security/signup">
                        Free Trial
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>