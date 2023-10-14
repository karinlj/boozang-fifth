<?php
// header background
$color = get_field('color_theme');
?>

<div id="nav-wrap" class="">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="main_menu" role="navigation" aria-label="Main Navigation">
                    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Boozang home page">
                        <!--extra double size image for retina-->
                        <?php
                        if ($color === 'white' || $color === 'lightgrey') { ?>
                            <img class="logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boozang.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boozang@2x.png 325w" width="208" height="51" alt="Boozang home page" />
                        <?php
                        } else { ?>
                            <img class="logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boozang_logo_reverse.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boozang_logo_reverse@2x.png 325w" width="208" height="51" alt="Boozang home page" />
                        <?php
                        } ?>
                    </a>

                    <div class="nav_links">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                        ));
                        ?>
                        <div class="signup">
                            <ul>
                                <li>
                                    <a href="https://ai.boozang.com/" aria-label="Boozang Login">
                                        Login
                                    </a>
                                </li>
                                <li>
                                    <a href="https://ai.boozang.com/#security/signup" aria-label="Boozang Sign Up">
                                        Sign Up
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--hamburger-->
                    <button class="menu_toggle_btn" aria-expanded="false" aria-label="Mobile Menu">
                        <div aria-hidden="true"></div>
                    </button>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="nav-mobile">
    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Boozang home page">

        <img class="logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boozang_logo_reverse.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boozang_logo_reverse@2x.png 325w" width="208" height="51" alt="Boozang home page" />
    </a>
    <div class="nav_links">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
        ));
        ?>
        <div class="signup">
            <ul>
                <li>
                    <a href="https://ai.boozang.com/" aria-label="Boozang Login">
                        Login
                    </a>
                </li>
                <li>
                    <a class="btn signup_btn" href="https://ai.boozang.com/#security/signup" aria-label="Boozang Sign Up">
                        Free Trial
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>