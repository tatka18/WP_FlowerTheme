<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <?php wp_head(); ?>
</head>

<body <?php body_class('body-class'); ?>>

<!--Top Menu
=============================================-->
<div class="top-menu-area dark-section">
    <div class="top-menu-inner common-container">
        <div class="top-menu-area-left">
            <div class="secondary-menu-container">
                <nav id="secondary-menu" class="secondary-menu-navigation">
                    <?php
                    if (has_nav_menu('secondary')) {
                        wp_nav_menu([
                            'theme_location' => 'secondary',
                            'container' => false,
                            'fallback_cb' => false,
                            'depth' => 1
                        ]);
                    }
                    ?>
                </nav><!-- #secondary-menu end -->
            </div>
        </div>

        <?php
        if (!is_user_logged_in()) {
            ?>

            <div class="top-menu-area-right">
                <div class="top-links">
                    <div class="single-link-area">
                        <h5>
                            <?php
                            if (has_nav_menu('authentication')) {
                                wp_nav_menu([
                                    'theme_location' => 'authentication',
                                    'container' => false,
                                    'fallback_cb' => false,
                                    'depth' => 1
                                ]);
                            }
                            ?>
                        </h5>
                    </div>

                    <!--PopUp Section
                    =============================================-->
                    <!--                    <div class="single-link-area">-->
                    <!--                        <h5>-->
                    <!--                            <a href="#popup-register">Registration</a>-->
                    <!--                        </h5>-->
                    <!--                    </div>-->
                    <!---->
                    <!--                    <div class="single-link-area">-->
                    <!--                        <h5>-->
                    <!--                            <a href="#popup-auth">Login</a>-->
                    <!--                        </h5>-->
                    <!---->
                    <!--                        <div id="popup-auth" class="popup">-->
                    <!--                            <a href="#" class="popup-area"></a>-->
                    <!--                            <div class="popup-body">-->
                    <!--                                <div class="popup-content">-->
                    <!--                                    --><?php
                    //                                    get_template_part('includes/login-form-template');
                    //                                    ?>
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!-- #popup section end -->
                </div>
            </div>
            <?php
        }
        ?>

    </div>
</div>


<!-- Header
============================================= -->

<header id="header" class="header-container">

    <div class="header-area common-container">

        <div class="header-top-container">

            <div class="header-logo-container">
                <div class="header-logo">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        ?>
                        <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
                        <?php
                    }
                    ?>
                </div><!-- #logo end -->
            </div>

            <div class="header-widgets">

                <!-- SearchForm -->
                <div class="header-widget-search-block">
                    <?php
                    get_search_form();
                    ?>
                </div>

            </div>
            <div class="toggle-icon-container">
                <label for="toggle-menu" class="toggleMenu"><i class="dashicons dashicons-menu"></i> </label>
            </div>

        </div>

        <input type="checkbox" name="toggle" id="toggle-menu" class="checkbox-toggle-menu">


        <div class="header-bottom-container">

            <nav id="primary-menu" class="primary-menu-navigation">
                <?php
                if (has_nav_menu('primary')) {
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container' => false,
                        'fallback_cb' => false,
                        'depth' => 5,
                        'walker' => new Y_Walker_Naw_Menu()
                    ]);
                }
                ?>
                <label for="toggle-menu" class="hideMenu"><i class="dashicons dashicons-no-alt"></i> </label>

            </nav><!-- #primary-menu end -->

            <div class="header-social-media-container">
                <div class="social-media">
                    <ul>
                        <?php
                        if (get_theme_mod('yInstagramHandle')) {
                            ?>
                            <li>
                                <a href="https://instagram.com/<?php echo get_theme_mod('yInstagramHandle'); ?>"><span
                                            class="dashicons dashicons-instagram"></span></span></a>
                            </li>
                            <?php
                        }
                        ?>

                        <?php
                        if (get_theme_mod('yFacebookHandle')) {
                            ?>
                            <li><a href="https://facebook.com/<?php echo get_theme_mod('yFacebookHandle'); ?>"><span
                                            class="dashicons dashicons-facebook-alt"></span></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</header><!-- #header end -->
